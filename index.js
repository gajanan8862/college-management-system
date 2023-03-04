let form1 = document.getElementById("div1");
let form2 = document.getElementById("div2");
let form3 = document.getElementById("div3");
let form4 = document.getElementById("div4");
let form5 = document.getElementById("div5");
form1.classList.add("div-dispay");

function openForm1(){
    form1.classList.add("div-dispay");
    form2.classList.remove("div-dispay");
    form3.classList.remove("div-dispay");
    form4.classList.remove("div-dispay");
    form5.classList.remove("div-dispay");
}

function openForm2(){
    form2.classList.add("div-dispay");
    form1.classList.remove("div-dispay");
    form3.classList.remove("div-dispay");
    form4.classList.remove("div-dispay");
    form5.classList.remove("div-dispay");
}

function openForm3(){
    form3.classList.add("div-dispay");
    form2.classList.remove("div-dispay");
    form1.classList.remove("div-dispay");
    form4.classList.remove("div-dispay");
    form5.classList.remove("div-dispay");
}

function openForm4(){
    form4.classList.add("div-dispay");
    form2.classList.remove("div-dispay");
    form3.classList.remove("div-dispay");
    form1.classList.remove("div-dispay");
    form5.classList.remove("div-dispay");
}

function openForm5(){
    form5.classList.add("div-dispay");
    form2.classList.remove("div-dispay");
    form3.classList.remove("div-dispay");
    form4.classList.remove("div-dispay");
    form1.classList.remove("div-dispay");
}