/* global $ */ 

function calcSub(){
    
    var argSubTotal;
    if(document.getElementbyId('Salesforce').checked) {
    argSubTotal= 100;
}
else{
    argSubTotal = 300;
}
 display(argSubTotal);
 }
 
 function display(parm1){
     
     document.getElementbyId("subtotal").value = parm1;
     document.getElementById("total").value = parm1;
 }
     function enablebtnProceed(){
     $('#btnProceed').prop('Disabled', false);
     
 }
 function disablebtnProceed() {
     $('#btnProceed').prop('disabled', true);
    
 }
 
