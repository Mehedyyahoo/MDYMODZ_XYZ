<?php

// ফর্ম ডেটা গ্রহণ করা হচ্ছে
$number = isset($_POST['nationalId']) ? $_POST['nationalId'] : '';
$message = isset($_POST['dob']) ? $_POST['dob'] : '';

if (empty($number) || empty($message)) {
    die("অনুগ্রহ করে সবগুলো ফিল্ড পূরণ করুন।");
}

// অন্য API-তে ডেটা পাঠানো হচ্ছে
$other_api_url = 'https://monsterteambd.co/UNKNWON-COPY/V2/vip.php?nid=' . urlencode($number) . '&dob=' . urlencode($message);

$ch = curl_init($other_api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

curl_close($ch);

// API থেকে প্রাপ্ত রেসপন্স দেখানো হচ্ছে
echo $response;
?>