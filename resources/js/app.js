import $ from 'jquery'
import axios from 'axios'
const validate = require("validate.js");

const header = $('header')
const logo = $('.logo')
const menu = $('.menu')
const isHomepage = $('.top .hk').length > 0
const hamburger = $('.hamburger')

$(document).ready(function () {
    if (isHomepage) {
        logo.hide()
        if ($(window).scrollTop() > 0) {
            if (!header.hasClass('scrolled'))
                header.addClass('scrolled')
            if (!logo.is(':visible')) {
                logo.show()
            }
        }

        if ($(window).scrollTop() <= 0) {
            if (header.hasClass('scrolled')) {
                header.removeClass('scrolled')
            }
            if (logo.is(':visible')) {
                logo.hide()
            }
        }
    } else {
        header.addClass('scrolled')
    }

    if (isHomepage) {
        $(window).scroll(function (e) {
            if ($(window).scrollTop() > 0 && !header.hasClass('scrolled')) {
                header.addClass('scrolled')
                logo.show()
            }

            if ($(window).scrollTop() <= 0 && header.hasClass('scrolled')) {
                header.removeClass('scrolled')
                logo.hide()
            }
        })
    }

    hamburger.click(function () {
        if (!menu.hasClass('opened')) {
            menu.addClass('opened')
            hamburger.addClass('opened')
        } else {
            menu.removeClass('opened')
            hamburger.removeClass('opened')
        }
    })

    const validations = {
        email: {
            presence: {message: 'E-mail je povinný'},
            email: {message: 'není ve správném formátu'}
        },
        msg: {
            presence: {message: 'Napiště prosím zprávu.'},
        }
    }

    $('form.contact-form').submit(function (e) {
        e.preventDefault()
        $('.err').remove()
        const data = {
            name: $('[name="name"]').val(),
            telephone: $('[name="telephone"]').val(),
            email: $('[name="email"]').val(),
            msg: $('[name="message"]').val()
        }
        const res = validate(data, validations)
        const errors = Object.keys(res || {})
        console.log(res)

        errors.forEach(err => {
            $(`[name=${err}]`).parent().append(`<span class="err">${res[err]}</span>`)
        })

        if(errors.length === 0) {
            $('.submit-button').text('Posílám...')
            axios.post('/send', data, {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }).then(() => {
                $('.contact-form').hide()
                $('.contact-form-send').show()
                $('.submit-button').text('Odeslat zprávu')
            }).catch(() => {
                $('.submit-button').text('Odeslat zprávu')
            })
        }



    })

})


