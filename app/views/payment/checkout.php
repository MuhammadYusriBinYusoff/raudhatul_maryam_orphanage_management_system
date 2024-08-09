<?php

require __DIR__ . "../../../../vendor/autoload.php";

\Stripe\Stripe::setApiKey(STRIPE_KEY);

$checkout_session = \Stripe\Checkout\Session::create([
    "payment_method_types" => ["card", "fpx"],
    "mode" => "payment",
    "success_url" => "http://localhost/Activity-PHP/raudhatul_maryam_orphanage_management_system/public/payment/successPayment",
    "cancel_url" => "http://localhost/Activity-PHP/raudhatul_maryam_orphanage_management_system/public/home",
    "locale" => "auto",
    "customer_email" => $_SESSION["EMAIL"],

    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "myr",
                "unit_amount" => $data['amount'] * 100,
                "product_data" => [
                    "name" => "Infaq kepada NGO Rumah Anak Yatim Raudhatul Maryam"
                ]
            ]
        ],      
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);