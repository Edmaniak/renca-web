import $ from 'jquery'
import axios from 'axios'

const header = $('header')
const menu = $('.menu')
const isHomepage = $('.top .hk').length > 0
const hamburger = $('.hamburger')

$(document).ready(function () {
    if (isHomepage) {
        console.log(isHomepage)
        if ($(window).scrollTop() > 0 && !header.hasClass('scrolled')) {
            console.log('add')
            header.addClass('scrolled')
        }

        if ($(window).scrollTop() <= 0 && header.hasClass('scrolled')) {
            console.log('remove')
            header.removeClass('scrolled')
        }
    } else {
        header.addClass('scrolled')
    }

    if (isHomepage) {
        $(window).scroll(function (e) {
            if ($(window).scrollTop() > 0 && !header.hasClass('scrolled')) {
                header.addClass('scrolled')
            }

            if ($(window).scrollTop() <= 0 && header.hasClass('scrolled')) {
                header.removeClass('scrolled')
            }
        })
    }

    hamburger.click(function () {
        if (!menu.hasClass('opened')){
            menu.addClass('opened')
            hamburger.addClass('opened')
        } else {
            menu.removeClass('opened')
            hamburger.removeClass('opened')
        }
    })

    $('form.contact-form').submit(function (e) {
        e.preventDefault()
        const data = {
            name: $('[name="name"]').val(),
            telephone: $('[name="telephone"]').val(),
            email: $('[name="email"]').val(),
            message: $('[name="message"]').val(),
        }
        axios.post('/send', data)
    })

})


