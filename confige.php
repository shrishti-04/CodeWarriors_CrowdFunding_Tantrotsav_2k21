<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51JZTsXSF3qaTGzDDKH3Qgbxs0S8GQW5cvksjqbpjrdZb1llfpo1Qh8NnViRqM75ZTKpifdp0spL6tf6hwWJNLWqd003qDRRKwI";

$secretKey="sk_test_51JZTsXSF3qaTGzDDqhULJ3hNB5Pett8JmVG2YHFSKfXPwKKKvUuHXqHw2AXfduFqFH2dy5XgiU3VkvUqdxMUiEZN00n2W4SanE";

\Stripe\Stripe::setApiKey($secretKey);
?>
