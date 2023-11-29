import './bootstrap';

import Typed from 'typed.js';
import  Alpine  from 'alpinejs';
window.Alpine=Alpine;
Alpine.start();

var typed = new Typed('#element', {
    strings: ["Back End developer" ,"Problem Solver",'Competitve Programmer'],
    typeSpeed: 30,
    backSpeed: 30,
    loop: true
});

