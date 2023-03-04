function myFunction(){
    let roll = document.getElementById("roll").value;
    let name = document.getElementById("name").value;
    let dob = document.getElementById("dob").value;
    let mob = document.getElementById("mob").value;
    let add = document.getElementById("add").value;
    if(roll == ""){
        alert("Roll can not be empty.");
    }else if(name == ""){
        alert("Last name can not be empty");
    }else if(dob == ""){
        alert("Please enter date of birth.");
    }else if(mob == ""){
        alert("Mobile can not be empty");
    }else if(add == ""){
        alert("Address can not be empty");
    }else{
        alert("You Inserted a data");
    }

}