import Inputmask from "inputmask/dist/inputmask.es6.js";
import $ from "jquery";

var ratingValue = 0;
var currentValue = 0;
var currentStarValue = 0;
var allStar = '';

document.addEventListener('DOMContentLoaded', (event) => {
    Inputmask().mask(document.querySelectorAll("input"));

    allStar = $('.rating-stars').children();

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

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "GET",
        url: '/api/get_own_mark',
        data: {},
        success: function (data) {
            if(data !== '') {
                let maxValue = Math.floor(data);
                for (let i = 0; i < maxValue; i++) {
                    let iStar = $(allStar[i]).find('.star');
                    iStar.attr('data-check', 'true');
                    iStar.addClass('active');
                    $(iStar.children()[0]).attr( "mask", 'url("#full_active")');
                }
                if(data % 1 > 0){
                    let iStar = $(allStar[maxValue]).find('.star');
                    iStar.attr('data-check', 'true');
                    iStar.addClass('active');
                    $(iStar.children()[0]).attr( "mask", 'url("#half_active")');
                }
            }
            else{
                for (let i = 0; i < 5; i++) {
                    let iStar = $(allStar[i]).find('.star');
                    iStar.attr('data-check', 'false');
                    iStar.removeClass('active');
                }
            }
        },
        error: function (data, textStatus, errorThrown) {},
    });


    let rating = $('.rating-stars');

    rating.find('.left-half-label').mouseenter(function (){
        rate('left', 'enter', this);
    })
    rating.find('.left-half-label').mouseleave(function (){
        rate('left', 'leave', this);
    })

    rating.find('.right-half-label').mouseenter(function (){
        rate('right', 'enter', this);
    })
    rating.find('.right-half-label').mouseleave(function (){
        rate('right', 'leave', this);
    })
    rating.find('.left-half-label').click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if(rateClick()){
            $.ajax({
                type: "POST",
                url: '/api/add_mark',
                data: { mark: currentValue },
                success: function (data) {
                    updateValue(data);
                },
                error: function (data, textStatus, errorThrown) {},
            });
        }
        else{
            $.ajax({
                type: "GET",
                url: '/api/remove_mark',
                data: {},
                success: function (data) {
                    updateValue(data);
                },
                error: function (data, textStatus, errorThrown) {},
            });
        }
    })
    rating.find('.right-half-label').click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
		if(rateClick()){
            $.ajax({
                type: "POST",
                url: '/api/add_mark',
                data: { mark: currentValue },
                success: function (data) {
                    updateValue(data);
                },
                error: function (data, textStatus, errorThrown) {},
            });
        }
		else{
            $.ajax({
                type: "GET",
                url: '/api/remove_mark',
                data: {},
                success: function (data) {
                    updateValue(data);
                },
                error: function (data, textStatus, errorThrown) {},
            });
        }
    })
});

function rate(half, mouseevent, element){
    currentValue = $(element).attr('for').charAt(5);
	currentStarValue = currentValue-1;
	if(half === 'left'){
		currentValue-=0.5;
	}
    if((currentValue !==  ratingValue)){
		for (let i = 0; i < 5; i++) {
			let iStar = $(allStar[i]).find('.star');
			if(mouseevent === 'enter'){
                if(i < currentStarValue){
                    $(iStar).addClass('active');
                    $(iStar.children()[0]).attr( "mask", 'url("#full")');
                }
                else if(i > currentStarValue){
                    $(iStar).removeClass('active');
                }
                else{
                    $(iStar).addClass('active');
                    if(half === 'left')
                        $(iStar.children()[0]).attr( "mask", 'url("#half")');
                    else
                        $(iStar.children()[0]).attr( "mask", 'url("#full")');
                }
            }
            else{
                if(ratingValue > 0){
                    if(i < ratingValue-1){
                        iStar.addClass('active');
                        $(iStar.children()[0]).attr( "mask", 'url("#full_active")');
                    }
                    else if(i >= ratingValue){
                        iStar.removeClass('active');
                    }
                    else{
                        iStar.addClass('active');
                        if(ratingValue % 1 > 0){
                            $(iStar.children()[0]).attr( "mask", 'url("#half_active")');
                        }
                        else{
                            $(iStar.children()[0]).attr( "mask", 'url("#full_active")');
                        }
                    }
                }
                else{
                    iStar.removeClass('active');
                }
            }
		}
	}
}

function rateClick(){
	if(currentValue !== ratingValue){
		for (let i = 0; i <= currentStarValue; i++) {
			let iStar = $(allStar[i]).find('.star');
			iStar.attr('data-check', 'true');
			if(currentValue - i < 1)
                $(iStar.children()[0]).attr( "mask", 'url("#half_active")');
            else
                $(iStar.children()[0]).attr( "mask", 'url("#full_active")');
		}
		ratingValue = currentValue;
		return true;
	}
	else{
        for (let i = 0; i < 5; i++) {
            let iStar = $(allStar[i]).find('.star');
            iStar.attr('data-check', 'false');
            $(iStar).removeClass('active');
        }
        ratingValue = 0;
        return false;
    }
}

function updateValue(data) {
	let rating = $('.rating-stars');
	let json_data = JSON.parse(data);
	rating.find('.rating-stars-count').text(json_data.marks_count);
	rating.find('.rating-stars-average').text(json_data.average_mark);
}


//TODO: АЯКС сделать
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

