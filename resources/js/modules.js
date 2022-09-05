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
    $('.kugoo-slider-add').click(function (){
        var max_value_block = $(this.prev());
        var max_value = max_value_block.text();
        var value_block = $(max_value).prev();
        var val = value_block.attr("data-value");
        val++;
        if(val > max_value) val = max_value;
        value_block.attr("data-value", val);
    });
});
