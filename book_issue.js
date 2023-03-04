let btn = document.getElementById("nxtbtn");
btn.addEventListener("click",myFunction);

function myFunction(){
    document.getElementById("main_form").classList.add("display-form");
    let s_accn = document.getElementById("search_accn_no").value;
    let s_roll = document.getElementById("search_roll_no").value;
    const xhr = new XMLHttpRequest();
    xhr.open('GET',"b_detail_fill.php?accn="+s_accn,true);
    xhr.onload = function(){
        console.log("Processing cmplete");
        var data1 = JSON.parse(this.response);
        document.getElementById("accn").value=data1[0].accn_no;
        document.getElementById("author").value=data1[0].author;
        document.getElementById("book_name").value=data1[0].book_name;
    }
    xhr.send();

    const xhttp = new XMLHttpRequest();
    xhttp.open('GET',"s_detail_fill.php?roll="+s_roll,true);
    xhttp.onload = function(){
        console.log("Prosseing complete");
        var data2 = JSON.parse(this.response);
        document.getElementById("roll").value=data2[0].roll;
        document.getElementById("st_name").value=data2[0].name;

    }
    xhttp.send();
}