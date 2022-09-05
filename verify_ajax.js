function required(){
    var username = document.form.username.value;
    if(username.length == 0){
        document.getElementById("message").innerHTML = "Key in username and click submit";
        document.getElementById("message").style.color = "green";
        return false;
    }else{
        return true;
    }
}
