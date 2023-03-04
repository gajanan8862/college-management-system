let btn = document.getElementById("findbtn");
btn.addEventListener("click",myFunction);
function myFunction(){
    console.log("Button is clicked .");
    let search_id = document.getElementById("search_id").value;
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET',"faculty_update.php?fid="+search_id,true);
    xhttp.onload = function(){
        var id_ele = document.getElementById("fid");
        console.log("processing completed");
        var details = JSON.parse(this.responseText);
        id_ele.value=details[0].fid;
        document.getElementById("fname").value=details[0].fname;
        document.getElementById("fmob").value=details[0].fmobile;
        document.getElementById("femail").value=details[0].femail;
    }

    xhttp.send();

}

