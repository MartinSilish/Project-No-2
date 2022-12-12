<?php  
$host = 'localhost';
$user = 'root';  
$pass = '';  
$dbname = 'bank_customer';  
$conn = mysqli_connect($host, $user, $pass,$dbname);   //establish connection from php to mysql 


$Name="";
$Address ="";
$City="";
$State="";
$Account_Number="";
$Balance="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST["submit"]))
{
  if(!empty($_POST["Name"])){
    if(!empty($_POST["Address"])){
      if(!empty($_POST["City"])){
        if(!empty($_POST["State"])){
          if(!empty($_POST["Balance"])){
      $Name = $_POST["Name"];
      $Address=$_POST["Address"];
      $City= $_POST["City"];
      $State = $_POST["State"];
      $Balance = $_POST["Balance"];
     $Account_Number = mt_rand(10000000,99999999);

            $query = "insert into customer_details(Name,Address,City,State,Balance,Account_Number) values('$Name','$Address','$City','$State','$Balance','$Account_Number')";

            $result = mysqli_query($conn,$query);

            if($result){
              echo "Data inserted successfully";
            }
            else{
              echo "Failed to insert";
            }
          } 
          else{
            echo "Enter Balance";
          }
        } 
        else{
          echo "Enter State";
        }
      } 
      else{
        echo "Enter City";
      } 
    } 
    else{
      echo "Enter Address";
    }
  }
  else{
    echo "Enter Name";
  }
}
}
// mysqli_close($conn);  
?>  

<html>
<head> 
 <style>
form {
	
    border-radius: 5px;
    height: auto;
    margin-right: auto;
}
</style>

<title>
bank customer
</title>
<script type="text/javascript">  
function validateform(){
alert("Added Successfully")  
var inp = document.getElementById('Name');
var price = document.getElementById('Address');
if ( inp.value == "" ){  
  alert("Name can't be blank");  
  return false;
  
}else if(Address == ""){  
  alert("Write Address");  
  return false;
  }
} 

</script>
</head>
<body bgcolor="lightblue">
<br>
<h1 align="center"> Customer Details</h1>
<br>
<form   action="customer_details.php" method="POST">

<label> Name  </label> <br> 
<input type="text" id="Name" name='Name' size="15"/> <br> <br>
<label>  Address: </label><br> 
<input type="text" id="Address" name='Address' size="15"/> <br> <br>
<label> City: </label><br> 
<input type="text" id="City" name='City' size="15"/> <br> <br>
<label> State: </label><br> 
<input type="text" id="State" name='State' size="15"/> <br> <br>
<!-- <label> Account Number </label> <br>
<input type="text" id="Account Number" name='AccountNumber' size="15"/> <br> <br> -->
<label> Balance: </label><br>
<input type="number" id="Balance" name='Balance' size="15"/> <br> <br>

<br>	
<br>

 <input align="center" type="submit" value="ADD" name="submit" />  
</form>

</body>