<?php
 // I am primarily a front-end developer, so I probably won't win any php/mysql best 
 //practices prize. But here goes :)
 $db = mysqli_connect('localhost','root','','hng_status')
 or die('Error connecting to MySQL server.');
?>

<html lang="en">
  <head>
    <title>Demo Page</title>
  </head>
  <body>
    <h3>Hello, There</h3>
    <p>This is a demo page demonstrating reading from a database</p>
    <p>It's also a page I can use later to keep track of my progress in the internship</p> 
<?php
$query = "SELECT * FROM stages";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
 echo '<table>
         <tr>
           <th>ID</th><th>Stage</th><th>Status</th><th>Last Modified</th>
         </tr>
         <tr>
           <td>' . $row['Name'] . '</td>
           <td>' . $row['ID'] . '</td>
           <td>' . $row['Is_Completed'] . '</td>
           <td>' . $row['Last_Modified'] . '</td>
         </tr>
       </table>';
}

mysqli_close($db);
?>

</body>
</html>
