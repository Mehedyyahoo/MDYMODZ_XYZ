<?php
session_start();

// লগইন ডেটা গ্রহণ করা হচ্ছে
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// ইউজারনেম এবং পাসওয়ার্ড যাচাই করা হচ্ছে (এটি একটি সিম্পল উদাহরণ, বাস্তবে ডাটাবেসের সাথে সংযুক্ত হবে)
$users = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($users as $user) {
    list($stored_username, $stored_password) = explode(':', $user);

    if ($username === $stored_username && password_verify($password, $stored_password)) {
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit;
    }
}

echo "অবৈধ ইউজারনেম বা পাসওয়ার্ড।";
?>