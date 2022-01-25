import $ from 'jquery'

const header = $('header')
const menu = $('.menu')
const isHomepage = $('.top .hk').length > 0

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

    $('.hamburger').click(function () {
        if (!menu.hasClass('opened'))
            $(menu).addClass('opened')
        else
            $(menu).removeClass('opened')
    })

})


