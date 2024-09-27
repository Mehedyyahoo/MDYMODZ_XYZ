<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
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

        .btn-secondary {
            width: 100%;
            background-color: red;
            border: none;
            border-radius: 8px;
            padding: 12px;
            color: white;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card shadow text-center">
            <h3 class="display-5 mt-3">Login</h3>
            
            <form action="login_process.php" method="post">
                <div class="mb-3">
                    <input type="text" placeholder="Username" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Password" class="form-control" id="password" name="password" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Login">
                <a href="signup.php" class="btn btn-secondary">Sign Up</a>
            </form>
        </div>
    </div>
</body>
</html>