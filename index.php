<?php
session_start();

// চেক করুন ইউজার লগইন করেছেন কিনা
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMAR SERVER</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&family=Noto+Serif+Bengali&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Hind Siliguri', sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 400px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border-radius: 15px;
        }

        .icon {
            width: 120px;
            height: 120px;
            border-radius: 10%;
            object-fit: cover;
            margin: auto;
            display: block;
        }

        .form-label {
            font-weight: bold;
            color: red;
        }

        .form-control {
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid red;
            padding: 10px;
        }

        .btn-primary {
            width: 100%;
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            padding: 12px;
            color: #ffffff;
            cursor: pointer;
        }

        .btn-warning {
            width: 100%;
            background-color: red;
            border: none;
            border-radius: 8px;
            padding: 12px;
            color: white;
            cursor: pointer;
            margin-top: 20px;
        }

        .alert-dark {
            font-size: 1rem;
            color: #343a40;
            background-color: #d1ecf1;
            border: 1px solid #bee5eb;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card shadow text-center">
            <img src="https://i.postimg.cc/3wjCYhTC/20240118-094452.png" class="icon" alt="Image">
            <h3 class="display-5 mt-3">AMAR SV COPY</h3>
            
            <form action="info.php" method="post">
                <div class="alert-dark" role="alert">
                    Developed By: Ariyan Raihan
                </div>

                <div class="mb-3">
                    <input type="text" placeholder="ENTER NID NO" class="form-control" id="nationalId" name="nationalId" required>
                </div>

                <div class="mb-3">
                    <input type="text" placeholder="YYYY-MM-DD" class="form-control" id="dob" name="dob" required>
                </div>

                <input type="submit" class="btn btn-primary" value="GET INFO">

                <a href="https://t.me/iamRaihan" class="btn btn-warning">
                    Developer
                </a>
            </form>
            
            <!-- Add logout link -->
            <div class="mt-4">
                <a href="logout.php" class="btn btn-warning">Logout</a>
            </div>
        </div>
    </div>

    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.js"></script>
</body>
</html>