<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index');
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Home Page </title>    
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style>
input[type=button] {
  padding: 10px 20px;
  font-size: 20px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: pink;
  border: none;
  border-radius: 15px 0px 0px 0px;
  box-shadow: 0 9px #999;
  margin-top:10px;
  margin-left:-40px;
}
input[type=submit] {
  padding: 10px 15px;
  font-size: 25px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: pink;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  margin-top:10px;
  margin-left:50px;
}
.container{
margin-left:25px; 
float:left; 
background:rgba(255,255,255,0.4);
}
</style>
<script src='res/js.js'>
</script>
</head>
<body>
<style>
<?php include "res/styles.css"?>
</style>
   <header
<?php include "res/navbar.php"?>
</header>
<form method="post" action="buy.php">
<div class="container">
<div class="item">
<img class="itempic" alt="img" src="images/i1.png"/>
<p class='ilabel'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BEST SELLING</p>
<input readonly type="text" id="v1" value="₹35499"/>
<input type="button" onclick="increment('i1'); add('v1'); tocart('n1','v1')" value="+">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" onclick="decrement('i1'); rem('v1'); fromcart('n1','v1')" value="-">
<div id='n1'><b><h4>Sony Xperia R1 Plus Dual</b></h4></div>
<input readonly type="text" id="i1" value="0" name="item1"/>
</div>
<div class="item">
<img class="itempic" alt="img" src="images/i2.png"/>
<p class='ilabel'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEW ARRIVAL</p>
<input readonly type="text" id="v2" value="₹49999"/>
<input type="button" onclick="increment('i2'); add('v2'); tocart('n2','v2')" value="+">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" onclick="decrement('i2'); rem('v2'); fromcart()" value="-">
<div id='n2'><h4><b>POCO X3 PRO</b></h4></div>
<input readonly type="text" id="i2" value="0" name="item2"/>
</div>
<div class="item">
<img class="itempic" alt="img" src="images/i3.png"/>
<p class='ilabel'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BEST SELLING</p>
<input readonly type="text" id="v3" value="₹15999"/>
<input type="button" onclick="increment('i3'); add('v3'); tocart('n3','v3')" value="+">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" onclick="decrement('i3'); rem('v3'); fromcart()" value="-">
<div id='n3'><h4><b>SAMSUNG S20 PLUS 5G</b></h4></div>
<input readonly type="text" id="i3" value="0" name="item3"/>
</div>
<div class="item">
<img class="itempic" alt="img" src="images/i4.png"/>
<p class='ilabel'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MUST BUY</p>
<input readonly type="text" id="v4" value="₹19999"/>
<input type="button" onclick="increment('i4'); add('v4'); tocart('n4','v4')" value="+">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" onclick="decrement('i4'); rem('v4'); fromcart()" value="-">
<div id='n4'><h4><b>REALME X7 MAX</b></h4></div>
<input readonly type="text" id="i4" value="0" name="item4"/>
</div>
<div class="item">
<img class="itempic" alt="img" src="images/i5.png"/>
<p class='ilabel'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ON SALE!</p>
<input readonly type="text" id="v5" value="₹11999"/>
<input type="button" onclick="increment('i5'); add('v5'); tocart('n5','v5')" value="+">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" onclick="decrement('i5'); rem('v5'); fromcart()" value="-">
<div id='n5'><h4><b>IQOO 7 5G</b></h4></div>
<input readonly type="text" id="i5" value="0" name="item5"/>
</div>
<div class="item">
<img class="itempic" alt="img" src="images/i6.png"/>
<p class='ilabel'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEW ARRIVAL</p>
<input readonly type="text" id="v6" value="₹9999"/>
<input type="button" onclick="increment('i6'); add('v6'); tocart('n6','v6')" value="+">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" onclick="decrement('i6'); rem('v6'); fromcart()" value="-">
<div id='n6'><h4><b>LG WING 5G+</b></h4></div>
<input readonly type="text" id="i6" value="0" name="item6"/>
</div>
<div class="item">
<img class="itempic" alt="img" src="images/i7.png"/>
<p class='ilabel'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEW ARRIVAL</p>
<input readonly type="text" id="v7" value="₹29999"/>
<input type="button" onclick="increment('i7'); add('v7'); tocart('n7','v7')" value="+">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" onclick="decrement('i7'); rem('v7'); fromcart()" value="-">
<div id='n7'><h4><b>APPLE iPHONE XR</b></h4></div>
<input readonly type="text" id="i7" value="0" name="item7"/>
</div>
<div class="item">
<img class="itempic" alt="img" src="images/i8.png"/>
<p class='ilabel'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEW ARRIVAL</p>
<input readonly type="text" id="v8" value="₹35499"/>
<input type="button" onclick="increment('i8'); add('v8'); tocart('n8','v8')" value="+">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" onclick="decrement('i8'); rem('v8'); fromcart()" value="-">
<div id='n8'><h4><b>GOOGLE PIXEL XL</b></h4></div>
<input readonly type="text" id="i8" value="0" name="item8"/>
</div>
</div>
<div class='sidebar'>
<p id="cart"><b>YOUR CART:</b><br>ITEM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SUBTOTAL<br></p>
<p id="cartMain"></p>
<label class='cartL'>Cart Total</label>
<input readonly type="text" id="total" value="0" name="total"/>
<input id='buy' type="submit" value="CHECKOUT">
<input id='ord' onclick="location.href='orderhist' " type="button" value="ORDER HISTORY">
</div>
</div>
</form>
<?php include "res/footer.php"?>
</body>
</html>