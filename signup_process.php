<?php
// সাইন আপ ডেটা গ্রহণ করা হচ্ছে
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// সাইন আপ তথ্য যাচাই করা হচ্ছে
if (!empty($username) && !empty($password)) {
    // ইউজার ডেটা ফাইল সিস্টেমে সংরক্ষণ করা হচ্ছে (এটি একটি সিম্পল উদাহরণ, বাস্তবে ডাটাবেস ব্যবহার করতে হবে)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    file_put_contents('users.txt', $username . ':' . $hashed_password . "\n", FILE_APPEND);
    header('Location: login.php');
    exit;
} else {
    echo "অনুগ্রহ করে সমস্ত ফিল্ড পূরণ করুন।";
}
?>