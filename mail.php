<?php

require_once 'mail/variables.php';
require_once 'mail/generate.php';

$mysqli = new mysqli("127.0.0.1", "root", "", "smplfy_wellplanned");

$order_id = (int)random_int(1000000, 9999999);

$sql = "INSERT INTO wp_orders (order_id, data, your_name, email, amount) VALUES ('" . $order_id . "', '" . $email_content . "', '" . $name . "', '" . $email . "', '" . $amount . "')";
if (mysqli_query($mysqli, $sql)) {
//    echo "New record created successfully";
} else {
//    echo "Error: " . $sql . "" . mysqli_error($mysqli);
}
$mysqli->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.tap.company/v2/charges",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => '{
            "amount": ' . $amount . ',
            "currency":"USD",
            "threeDSecure":true,
            "save_card":false,
            "description":"Payment WellPlanned365",
            "statement_descriptor":"Sample",
            "metadata":{
                "order_id":"' . $order_id . '",
                "udf2":"test 2"
            },
            "reference":{
                "transaction":"txn_0001",
                "order":"ord_0001"
            },
            "receipt":{
                "email":false,
                "sms":false
            },
            "customer":{
                "first_name":"' . $name . '",
                "middle_name":"test",
                "last_name":"test",
                "email":"sviatoslav.terletskyi@gmail.com",
                "phone":{
                    "country_code":"380",
                    "number":"934387459"
                    }
            },
            "source":{
                "id":"src_all"
            },
            "post":{
                "url":"http://well-planned.test/wp-content/themes/well-planned/response-handler.php"
            },
            "redirect":{
                "url":"http://well-planned.test/"
            }
        }',
        CURLOPT_HTTPHEADER => array(
            "authorization: Bearer sk_test_CcXfM70z8DAkUBEh9pVNOGRZ",
            "content-type: application/json"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    $url = json_decode($response)->transaction->url;
    header("Location: $url");

} else {
    echo 'wrong!!';
}