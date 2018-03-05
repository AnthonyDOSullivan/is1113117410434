<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
      <style>
        body{
            background-image: url("http://barbmayer.com/images/backgrounds/blue_sky_background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            text-align:center;
        }
              div {background-color: black;}
div a {
    text-decoration: none;
    color: white;
    font-size: 20px;
    padding: 15px;
    display:inline-block;
}
ul {
    display:inline-block;
  margin: 0;
  padding: 0;
}
ul li {display: inline-block;}
ul li:hover {background: #adad85;}
ul li:hover ul {display: block;}
ul li ul {
  position: absolute;
  width: 200px;
  display: none;
}
ul li ul li { 
  background: #adad85 ; 
  display: block; 
  color : #c2c2a3;
}
ul li ul li a {display:block;} 
ul li ul li:hover {background: #adad85;}
li a:hover:not(.active) {
    background-color: #c2c2a3;
}
 a:hover:not(.active) {
    background-color: #adad85;
}
      </style>
      <div class="topnav">
  
           
        <ul>
  <li><a href="cv_page1.html">Curriculum Vitae</a>
  <ul>
        <li><a href="cv_page1.html">CV Page 1</a></li>
        <li><a href="cv_page2.html">CV Page 2</a></li>
        <li><a href="cv_page3.html">CV Page 3</a></li>
      </ul>
    </li>
  </ul>
  <ul>
    <li><a href="Interests/sports.html">Interests</a>
    <ul>
        <li><a href="Interests/sports.html">Sports</a></li>
        <li><a href="Interests/travel.html">Travel</a></li>
    </ul>
    </li>
    </ul>
  <a href="ebusiness/ebus1.php">E-Business </a>
  <a href="about_cloud.html">About Cloud Services</a>
  <a href=https://github.com/AnthonyDOSullivan/is1113117410434>Github</a>
  <a href=https://dashboard.heroku.com/apps/is1113117410434/deploy/github>Heroku</a>
  <a href=https://is1113117410434.herokuapp.com/>Website link </a>
  
</div>
        
            <h4>Select a Product</h4>
            
            <br/>
            
            
            
            <form method="POST" action="ebus2.php">
              
              <label for="Salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              <label for="Cloud 9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
              </label>
              <br/>
              
              <label for="AWS">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
               <br/>
               
               <label for="Gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              <br/>
              <br/>
             
              
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="discount">
                Discount
                <input type="text" id="discount" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="vat">
                Vat
                <input type="text" id="vat" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcsub()">Calculate Cost</button>
            <a role="button" href="ebus1.php">Clear Choice</a>
    
    </body>
</html>