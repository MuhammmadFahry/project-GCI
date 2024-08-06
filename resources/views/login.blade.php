<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            background: url('https://png.pngtree.com/thumb_back/fh260/background/20230526/pngtree-an-old-bookcase-in-a-library-image_2642908.jpg') no-repeat center center fixed; 
            background-size: cover;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5); /* Optional: adds a dark overlay for better readability */
        }

        .login-box {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            width: 300px;
        }

        .login-box h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .input-box {
            position: relative;
            margin-bottom: 20px;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            background: transparent;
            border: none;
            border-bottom: 1px solid #333;
            outline: none;
            color: #333;
            font-size: 16px;
        }

        .input-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #333;
            pointer-events: none;
            transition: 0.5s;
        }

        .input-box input:focus ~ label,
        .input-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #03a9f4;
            font-size: 12px;
        }

        .input-box .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
            color: #333;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            background: #03a9f4;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #0288d1;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-box">
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="password" required>
                    <label>Password</label>
                    <span class="toggle-password" onclick="togglePasswordVisibility()">👁️</span>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var passwordToggle = document.querySelector(".toggle-password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordToggle.textContent = "🙈";
            } else {
                passwordInput.type = "password";
                passwordToggle.textContent = "👁️";
            }
        }
    </script>
</body>
</html>
