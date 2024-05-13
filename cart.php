<?php
    // Get the cart cookie
    $cartCookie = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : '[]';

    // Decode the cart cookie from a JSON string into an array
    $cart = json_decode($cartCookie, true);

    // Encode the cart array as a JSON string
    $cartJson = json_encode($cart);

    // Output the JSON string
    echo $cartJson;
?>