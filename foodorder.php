
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style1.css">
    
  </head>
  <body>

      <form action="" class="dashboard" method="post" name="f">
        <h1>Order Your Food</h1>
        <center><?php include('welcome.php');?></center>

        <center><?php include('welcome1.php');?></center>
        
        
       <?php
       $db=mysqli_connect('localhost','root','','newfood');
       $query1="SELECT * FROM food WHERE rid='$rid'";
       $result1=mysqli_query($db,$query1);
      while($row1= mysqli_fetch_array($result1)){
        $food=$row1['fname'];
        $price=$row1['price'];
        echo "<br/>";
        echo "<center><input type='checkbox' name='food' value='$price'>$food<br/></center>";
        echo "<center><h4>Rs.$price</h4></center>";
        echo "<center><input type='number' name='qty' placeholder='Enter Quantity' ></center>";
        }
       ?>

        <br/><input type="submit" name ="order" class="logbtn" value="Place your order" onclick="myFunction()">
     
       
         <br/><center><?php echo ' <a href="dashboard.php?dashboard">Back to Dashboard</a>';?></center>
      </form>





<script type="text/javascript">
  function Redirect() {
               window.location="dashboard.php";
            }
function myFunction(){
  var food = document.f.food;
  var texts = document.getElementsByName("qty");
  var i;
  var checkedValue=parseInt(0, 10);
  for (i = 0; i < food.length; i++) {
    if (food[i].checked) {
      quantity=parseInt(texts[i].value,10);
      cost=parseInt(food[i].value,10);
      checkedValue=checkedValue+(cost*quantity);
    }
  }
  
if(checkedValue==0){
  alert("Please select your order");}
  else{
if (confirm("\nThank you for Your order"+"\nYour Total amount is=Rs. "+checkedValue+"\nYou can logout now")) {
            Redirect();
         } 
  }
     

}
</script>
    
  </body>
</html>