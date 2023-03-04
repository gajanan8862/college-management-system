let btn = document.getElementById("nxtbtn");
btn.addEventListener("click",myFunction);

function myFunction(){
    //document.getElementById("main_form").classList.add("display-form");
    let s_accn = document.getElementById("s_accn").value;
    const xhr = new XMLHttpRequest();
    xhr.open('GET',"book_return_fill.php?accn="+s_accn,true);
    xhr.onload = function(){
        console.log("Processing cmplete");
        var data1 = JSON.parse(this.response);
        document.getElementById("accn").value=data1[0].book_accn_no;
        document.getElementById("issue_date").value=data1[0].issue_date;
        document.getElementById("roll").value=data1[0].st_roll_no;
    }
    xhr.send();

}