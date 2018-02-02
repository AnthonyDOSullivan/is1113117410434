/* global $ */ 

function calcSub(){
    
    var argSubTotal;
    if(document.getElementbyId('Salesforce').checked) {
    argSubtotal= 100;
}
else{
    argSubtotal = 300;
}
 display(argSubtotal);
 }
 
 function display(parm1){
     
     document.getElementbyId("subtotal").value = parm1;
     document.getElementById("total").value = parm1;
     
     enablebtnProceed()
     $('#btnProceed').prop('Disabled', false);
     
 }
 function disablebtnProceed() {
     $('#btnProceed').prop('disabled', false);
    
 }
 
 function disablebtnproceed() {
     $('#btnProceed').prop('disabled', true);
 }