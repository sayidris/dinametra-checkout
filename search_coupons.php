<?php
// Get the coupon code from the AJAX request
$coupon_code = $_POST['coupon_code'];

// Load the JSON object into a variable
$json = file_get_contents("coupons.json");
//$json = '{"coupons":[{"code":"DINA10PCTOFF","value":"10%","validity":"2023-03-30"},{"code":"DINA20PCTOFF","value":"20%","validity":"2023-04-30"}]}';

// Convert the JSON object to a PHP array
$coupons = json_decode($json, true)['coupons'];

// Search for the coupon with the given code
$coupon = null;
foreach ($coupons as $c) {
    if ($c['code'] == $coupon_code) {
        $coupon = $c;
        break;
    }
}

// Return the coupon data as JSON
if ($coupon != null) {
    echo json_encode($coupon);
} else {
    echo json_encode(['error' => 'Coupon not found']);
}
?>
