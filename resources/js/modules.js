import Inputmask from "inputmask/dist/inputmask.es6.js";
import $ from "jquery";
document.addEventListener('DOMContentLoaded', (event) => {
    Inputmask().mask(document.querySelectorAll("input"));

    var kugoo_counter_value = $('.kugoo-counter-value');
    kugoo_counter_value.text(kugoo_counter_value.attr("data-value"));

    $('.kugoo-counter-add').click(function() {
        var value_block = $(this).prev();
        var val = value_block.attr("data-value");
        val++;
        value_block.text(val);
        value_block.attr("data-value", val);
    });
    $('.kugoo-counter-remove').click(function() {
        var value_block = $(this).next();
        var val = value_block.attr("data-value");
        val--;
        if(val < 1) val = 1;
        value_block.text(val);
        value_block.attr("data-value", val);
    });

    var kugoo_slider_value = $('.kugoo-slider-slide');
    kugoo_slider_value.children().last().css("width", 7 * kugoo_slider_value.attr("data-value"));

    $('.kugoo-slider-add').click(function (){
        var max_value_block = $(this).prev();
        var max_value = max_value_block.text();
        var value_block = max_value_block.prev();
        var val = value_block.attr("data-value");
        val++;
        if(val > max_value) val = max_value;
        value_block.attr("data-value", val);
        value_block.children().last().css("width", 7 * val);
    });
    $('.kugoo-slider-remove').click(function (){
        var min_value_block = $(this).next();
        var min_value = min_value_block.text();
        var value_block = min_value_block.next();
        var val = value_block.attr("data-value");
        val--;
        if(val < min_value) val = min_value;
        value_block.attr("data-value", val);
        value_block.children().last().css("width", 7 * val);
    });

    var rating = $('.rating-stars');
    rating.find('.left-half-label').hover(function (){
        var star = $(this).next().next();
        star.toggleClass('active');
        $(star.children()[0]).attr( "mask", 'url("#half")');

        var cur = $(this).attr("for").charAt(5)
        if(cur > 1){
            var arrChild = rating.children();
            for (let i = 0; i < cur-1; i++) {
                var iStar = $(arrChild[i]).find('.star');
                $(iStar).toggleClass('active');
                $(iStar.children()[0]).attr( "mask", 'url("#full")');
            }
        }
    })
    rating.find('.right-half-label').hover(function (){
        var star = $(this).next();
        star.toggleClass('active');
        $(star.children()[0]).attr( "mask", 'url("#full")');
        //TODO:create function - clean code
        var cur = $(this).attr("for").charAt(5)
        if(cur > 1){
            var arrChild = rating.children();
            for (let i = 0; i < cur-1; i++) {
                var iStar = $(arrChild[i]).find('.star');
                $(iStar).toggleClass('active');
                $(iStar.children()[0]).attr( "mask", 'url("#full")');
            }
        }
    })
    rating.find('.left-half-label').click(function(){
        var temp = rating.attr('data-confirm');
        if(temp === 'true')
            rating.attr('data-confirm', false);
        else
            rating.attr('data-confirm', true);
    })
    //AJAX без AJAXa
    // const request = new XMLHttpRequest();
    // const url = "/build/manifest.json";
    // request.open('GET', url);
    // request.addEventListener("readystatechange", () => {
    //     if (request.readyState === 4 && request.status === 200) {
    //         const data = JSON.parse(request.responseText);
    //         for (const item in data) {
    //             if(item.endsWith('css') || (item.endsWith('js') && !item.includes('workbox')))
    //                 console.log(data[item].file);
    //         }
    //     }
    // });
    // request.send();
});
