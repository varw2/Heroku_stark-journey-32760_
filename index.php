
<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: sans-serif;
    border-collapse: collapse;
    width: 100%;
}td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<title>Network</title>
</head>
<body>

<table>
  <tr>
    <th>Network</th> <th>CPM</th>
  </tr>
    <?php
$x = 1; 

while($x <= 200) {
    echo "<tr>    <td>Alfreds Futterkiste</td> <td>Maria Anders</td>  </tr>";
    $x++;
} 

?>

</table>

</body>
</html>

