<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        
    </head>
    
    <body> 
    
            <h4>Select a Product</h4>
            <br/>
            
            <form method="POST" action="ebus2.php">
                
               <label for="salesforce">
                   <input type="radio" id="salesforce" name="product" chekced onClick="disablebtnProceed()"/>
                   Salesforce @$100
               </label> 
               
               <br/>
               
               <label for="aws">
               <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
               AWS @ $300
               </label>
                
                <br/>
                <br/>
                
                <label for="subtotal"
                subtotal
                <input type="text" id="subtotal" value="0.00" readonly
               <label/>
               
                <br/>
                
                 <label for="total"
                total
                <input type="text" id="total" value="0.00" readonly
               <label/>
               
               <br/>
                
                <button type="submit" id="btnProceed" disabled> Add to shoppping cart</button>
                
                
            </form>
            
            <br/>
            <button onClick="calcsub()"> Calculate Cost</button>
            <a role="button" href="ebus1.phop"> Clear Choice</a>
    
    
    </body>
</html>