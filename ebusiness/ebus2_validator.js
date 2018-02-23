/* global $ */

function validateDetails(){
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin == ""){
        alert("Please enter your PIN");
        disablebtnPurchase();
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
        disablebtnPurchase();
    }
    var name ;
    name = document.getElementById("username").value;
    if (name ==""){
        alert("Please enter your name");
        disablebtnPurchase();
    }
    var email;
    
    email = document.getElementById("useremail").value;
    
    if (email == ""){
        alert("Please enter your email address");
        disablebtnPurchase();
    }
    
    else{
        enablebtnPurchase();
    }
    
    
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}
