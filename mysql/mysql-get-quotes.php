<?php
$sql = "SELECT quoteId, quoteName, status, customerId, createdDate, expirationDate, renewed, brokerId, price FROM quotes";
$quoteList = $conn->query($sql);
?>
