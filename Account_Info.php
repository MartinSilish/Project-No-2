<?php  
$host = 'localhost';
$user = 'root';  
$pass = '';  
$dbname = 'bank_customer';  
$conn = mysqli_connect($host, $user, $pass,$dbname);   //establish connection from php to mysql 

$Name="";
$Account_Number="";
$Balance="";

$result = mysqli_query($con,"SELECT * FROM Account_info where Name = '$_SESSION["user"]'");

echo "<table border='1'>
    <tr>
    <th>Name</th>
    <th>Account_Number</th>
    <th>Balance</th>
    </tr>";
    
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Account_Number'] . "</td>";
    echo "<td>" . $row['Balance'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    
    mysqli_close($con);
    
    ?>
<html>
    <head>
        <style>
            <script>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="styles.css" />

body{
  background-color: rgb(211, 226, 216);
}

table {
  border-spacing: 0;
  width: 80%;
  border: 1px solid #dddd;
}

th,
td {
  text-align: left;
  padding: 15px;
}

tr:nth-child(even) {
  background-color: rgb(153, 153, 197);
}
</style>
</head>
  <body>
    <table id="table">
      <tr>
        <th onclick="sortTable(0)">Name</th>
        <th onclick="sortTable(1)">AccountNumber</th>
        <th onclick="sortTable(1)">Balance</th>
      </tr>
    </table>
    <script src="script.js"></script>
  </body>
</html>



<script>
// JavaScript program to illustrate
// Table sort for both columns and both directions.
function sortTable(n) {
  let table;
  table = document.getElementById('table');
  let rows,
    i,
    x,
    y,
    count = 0;
  let switching = true;

  // Order is set as ascending
  let direction = 'ascending';

  // Run loop until no switching is needed
  while (switching) {
    switching = false;
    let rows = table.rows;

    //Loop to go through all rows
    for (i = 1; i < rows.length - 1; i++) {
      var Switch = false;

      // Fetch 2 elements that need to be compared
      x = rows[i].getElementsByTagName('TD')[n];
      y = rows[i + 1].getElementsByTagName('TD')[n];

      // Check the direction of order
      if (direction == 'ascending') {
        // Check if 2 rows need to be switched
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If yes, mark Switch as needed and break loop
          Switch = true;
          break;
        }
      } else if (direction == 'descending') {
        // Check direction
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If yes, mark Switch as needed and break loop
          Switch = true;
          break;
        }
      }
    }
    if (Switch) {
      // Function to switch rows and mark switch as completed
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;

      // Increase count for each switch
      count++;
    } else {
      // Run while loop again for descending order
      if (count == 0 && direction == 'ascending') {
        direction = 'descending';
        switching = true;
      }
    }
  }
}