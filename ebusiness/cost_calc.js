/* global $ */
var argSubTotal;
function calcsub(){
    
    
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
    else if(document.getElementById('cloud9').checked) {
      argSubTotal = 200;
    }
    else if(document.getElementById('aws').checked) {
      argSubTotal = 300;
    }
    else if(document.getElementById('gmail').checked) {
      argSubTotal = 400;
    }
    calcDisVatTotal(argSubTotal);
   
}

  

function calcDisVatTotal(argSubTotal){
    var subtotal = argSubTotal;
    var discountAmt = (subtotal) * 0.05;
    var vatAmt= subtotal*0.1; 
   
    var totalPrice = subtotal + vatAmt - discountAmt;
    display(argSubTotal, discountAmt, vatAmt, totalPrice);
    
 
}

    
  
function display(parm1,parm2,parm3,parm4){
 
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("discount").value= parm2;
  document.getElementById("vat").value = parm3;
  document.getElementById("total").value = parm4;
  
  
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}