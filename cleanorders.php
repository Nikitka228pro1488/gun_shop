<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
	file_put_contents('files/orderscurrentdates_E1i3JqRb9KMxu2hqA.txt', '');
    file_put_contents('files/orderslogins_E1i3JqRb9KMxu2hqA.txt', '');
    file_put_contents('files/ordersfullnames_E1i3JqRb9KMxu2hqA.txt', '');
    file_put_contents('files/ordersphonenumbers_E1i3JqRb9KMxu2hqA.txt', '');
    file_put_contents('files/ordersemails_E1i3JqRb9KMxu2hqA.txt', '');
    file_put_contents('files/ordersaddresses_E1i3JqRb9KMxu2hqA.txt', '');
    file_put_contents('files/ordersitems_E1i3JqRb9KMxu2hqA.txt', '');
    echo '<script>location.href="new_orders.php"</script>';
} else
    header('Location:index.php');
?>