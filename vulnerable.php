<?php
    $name = $_REQUEST ['customer'];
?>
<html>
<head>
<style>

th, td {
  padding: 5px;
}
th {
  text-align: left;
}
</style>
</head>
<body>

<h2>Customer: <?php echo $customer; ?></h2>
<p>Account: Your Account</p>

<table style="width:100%">
  <tr>
    <th>Date</th>
    <th>Vendor</th> 
    <th>Amount</th>
  </tr>
  <tr>
    <td>14Sept2020</td>
    <td>Starbucks</td>
    <td>($5.74)</td>
  </tr>
  <tr>
    <td>14Sept2020</td>
    <td>Pizza Hut</td>
    <td>($17.93)</td>
  </tr>
  <tr>
    <td>15Sept2020</td>
    <td>Hardee`s</td>
    <td>($8.37)</td>
  </tr>
  <tr>
    <td>15Sept2020</td>
    <td>Taco Bell</td>
    <td>($6.18)</td>
  </tr>
  <tr>
    <td>16Sept2020</td>
    <td>Arby`s</td>
    <td>($9.53)</td>
  </tr>
  <tr>
    <td>16Sept2020</td>
    <td>ABC Store</td>
    <td>($32.94)</td>
  </tr>
</table>

</body>
</html>
<!-- https://github.com/jgarner149/project2_comp5370/blob/main/vulnerable.php?customer=Bob -->
