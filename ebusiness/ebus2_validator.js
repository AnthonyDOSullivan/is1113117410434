/* global $ */

function validateDetails(){
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    var name ;
    name = document.getElementById("user_name").value;
    if (name ==""){
        alert("Please enter your name");
    }
    var email;
    
    email = document.getElementById("user_email");
    
    if (email == ""){
        alert("Please enter your email address");
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
