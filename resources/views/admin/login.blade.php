<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 50%;
        }

        .login-container img {
            width: 120px;
            margin-bottom: 20px;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-container input {
            width: 100% !important;
            padding: 12px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .password-container {
            position: relative;
            width: 100%;
        }

        .password-container input {
            width: calc(100% - 32px);
        }

        .password-container .eye-icon {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .login-container button {
            background-color: #4caf50;
            color: #fff;
            padding: 14px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 15px;
        }

        .login-container button:hover {
            background-color: #45a049;
        }

    </style>
</head>

<body>
    <div class="login-container">
        <img src="{{ asset('admin/assets/images/logo.svg') }}" alt="Logo">
        @if ($errors->any())
            <p style="color: red;">{{ $errors->first() }}</p>
        @endif
        <form action="{{ route('login_submit') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <div class="password-container">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <span class="eye-icon" onclick="togglePasswordVisibility()">&#128065;</span>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var eyeIcon = document.querySelector(".eye-icon");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.innerHTML = "&#128064;";
            } else {
                passwordField.type = "password";
                eyeIcon.innerHTML = "&#128065;";
            }
        }
    </script>
</body>

</html>
