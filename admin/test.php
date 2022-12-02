<?php include("../pages/setup.php");

$sql =  "SELECT orders.order_id, accounts.username
FROM orders
INNER JOIN accounts ON orders.account_id = accounts.account_id"; ?>    