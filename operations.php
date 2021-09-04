<?php
include('customer.php');

$customerA = new Customer("Jane", "Doe");
$customerA->deposit(20);

$customerB = new Customer("Gbo", "Joe");
$customerB->deposit(30);

$customerA->transfer($customerB, 10);
$customerA->withdraw(10);

echo $customerA->checkBalance().'<br/>';
echo $customerB->checkBalance();
?>
