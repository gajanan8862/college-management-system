function displayForm(){
    console.log("button is clicked");
    let ele = document.getElementById("form");
    ele.style.display = "block";
    
}
let btn = document.getElementById("nxtbtn");
btn.addEventListener("click",myFunction);
function myFunction(){
    let search_id = document.getElementById("search_id").value;
    const xhr = new XMLHttpRequest();
    xhr.open('GET',"faculty_update.php?fid="+search_id,true);
    xhr.onload = function(){
        console.log("processing complete");
        var data = JSON.parse(this.response);
        document.getElementById("fname").value=data[0].fname;
        document.getElementById("fid").value=data[0].fid;
    }
    xhr.send();

}

