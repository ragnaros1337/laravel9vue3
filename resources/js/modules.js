import Inputmask from "inputmask/dist/inputmask.es6.js";

document.addEventListener('DOMContentLoaded', (event) => {
    Inputmask().mask(document.querySelectorAll("input"));
});
