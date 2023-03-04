let div1 = document.getElementById("div1");
let div2 = document.getElementById("div2");
let div3 = document.getElementById("div3");
let divhome = document.getElementById("divhome");
divhome.classList.add("div-display");
function homeDisplay(){
    divhome.classList.add("div-display");
    div1.classList.remove("div-display");
    div2.classList.remove("div-display");
    div3.classList.remove("div-display");
    document.getElementById("btn1").classList.remove("boldbg");
    document.getElementById("btnhome").classList.add("boldbg");
    document.getElementById("btn2").classList.remove("boldbg");
    document.getElementById("btn3").classList.remove("boldbg");
}
function div1Display(){
    div1.classList.add("div-display");
    divhome.classList.remove("div-display");
    div2.classList.remove("div-display");
    div3.classList.remove("div-display");
    document.getElementById("btn1").classList.add("boldbg");
    document.getElementById("btnhome").classList.remove("boldbg");
    document.getElementById("btn2").classList.remove("boldbg");
    document.getElementById("btn3").classList.remove("boldbg");
}
function div2Display(){
    div2.classList.add("div-display");
    divhome.classList.remove("div-display");
    div1.classList.remove("div-display");
    div3.classList.remove("div-display");
    document.getElementById("btn1").classList.remove("boldbg");
    document.getElementById("btnhome").classList.remove("boldbg");
    document.getElementById("btn2").classList.add("boldbg");
    document.getElementById("btn3").classList.remove("boldbg");
}
function div3Display(){
    div3.classList.add("div-display");
    divhome.classList.remove("div-display");
    div1.classList.remove("div-display");
    div2.classList.remove("div-display");
    document.getElementById("btn1").classList.remove("boldbg");
    document.getElementById("btnhome").classList.remove("boldbg");
    document.getElementById("btn2").classList.remove("boldbg");
    document.getElementById("btn3").classList.add("boldbg");
}

