function formVisibility(){
    document.getElementById("form2").style="visibility: visible;";
}

console.log("Trying AJAX");
let findbtn = document.getElementById("button1");
findbtn.addEventListener("click",buttonclicked); 
function buttonclicked(){
    //var froll = document.getElementById("search_roll").value;
    //const search = {"roll":froll};
    //const dbParam = JSON.stringify(search);
    let str = document.getElementById("search_roll").value;
    console.log("You have clicked the button");
    const xhr = new XMLHttpRequest();
    xhr.open('GET',"update_form.php?q="+str,true);
    xhr.onprogress=function(){
        console.log('on progress');
    }
    xhr.onload=function(){
        console.log('Success');
        let roll_ele = document.getElementById("roll");
        let name_ele = document.getElementById("name");
        let dob_ele = document.getElementById("dob");
        let mob_ele = document.getElementById("mob");
        let add_ele = document.getElementById("add");
        var data = JSON.parse(this.responseText);
        roll_ele.value = data[0].roll;
        name_ele.value = data[0].name;
        mob_ele.value = data[0].mobile;
        dob_ele.value = data[0].dob;
        add_ele.value = data[0].address;
    }
    xhr.send();
    
}
