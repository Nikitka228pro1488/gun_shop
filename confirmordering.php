<?php
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    echo header('Location:index.php');
} else {
    $sum = 0;
    for ($i = 0; $i < $_SESSION['basketcounter']; $i++) {
        $sum = $sum + $_SESSION['price' . $i] * $_SESSION['quantity' . $i];
        file_put_contents('files/ordersitems_E1i3JqRb9KMxu2hqA.txt', '<tr><td>' . $_SESSION['item' . $i] . '</td><td>' . $_SESSION['item_name' . $i] . '</td><td>' . $_SESSION['quantity' . $i] . '</td><td>' . $_SESSION['price' . $i] * $_SESSION['quantity' . $i] . ' руб.</td></tr><br>', FILE_APPEND);
    }
    file_put_contents('files/ordersitems_E1i3JqRb9KMxu2hqA.txt', '<tr><td style="background:#e6e6fa;"><b>Итого к оплате: </b></td><td style="background:#e6e6fa; text-align: right; padding-right:40px;" colspan="4"><b>' . $sum . ' руб.</b></td></tr>' . "\n", FILE_APPEND);
    $login       = !empty($_SESSION['login']) ? $_SESSION['login'] : '';
    $fullname    = !empty($_GET['fullname']) ? htmlspecialchars($_GET['fullname']) : '';
    $phonenumber = !empty($_GET['phonenumber']) ? htmlspecialchars($_GET['phonenumber']) : '';
    $email       = !empty($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
    $address     = !empty($_GET['address']) ? htmlspecialchars($_GET['address']) : '';
    $orderingdate = date("d.m.y H:i");
    file_put_contents('files/orderslogins_E1i3JqRb9KMxu2hqA.txt', $login . "\n", FILE_APPEND);
	file_put_contents('files/orderscurrentdates_E1i3JqRb9KMxu2hqA.txt', $orderingdate . "\n", FILE_APPEND);
    file_put_contents('files/ordersfullnames_E1i3JqRb9KMxu2hqA.txt', $fullname . "\n", FILE_APPEND);
    file_put_contents('files/ordersphonenumbers_E1i3JqRb9KMxu2hqA.txt', $phonenumber . "\n", FILE_APPEND);
    file_put_contents('files/ordersemails_E1i3JqRb9KMxu2hqA.txt', $email . "\n", FILE_APPEND);
    file_put_contents('files/ordersaddresses_E1i3JqRb9KMxu2hqA.txt', $address . "\n", FILE_APPEND);
    $_SESSION['basketcounter'] = 0;
    echo '<script>location.href="thankyou.php"</script>';
}
?>