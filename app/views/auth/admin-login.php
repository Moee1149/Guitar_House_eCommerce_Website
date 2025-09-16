<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/css/styles.css" />
    <title>Guitar House | Admin Login Page</title>
    <style>
        :root {
            --primary: #ff7b54;
            --secondary: #ff9671;
        }

        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-top: var(--nav-height);
        }

        .login-card {
            background: var(--secondary-bg);
            padding: 35px;
            border-radius: 10px;
            width: 450px;
        }

        .logo {
            width: 80px;
            margin-bottom: 15px;
        }

        h2 {
            margin-bottom: 2rem;
            color: var(--secondary);
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-primary);
            font-size: 14px;
            text-align: left;
        }

        .required::after {
            content: " *";
            color: red;
            opacity: 0.8;
        }

        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 12px 16px;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
            border: 2px solid transparent;
            color: var(--text-primary);
            background: var(--primary-bg);
            transition:
                border-color 0.2s,
                background-color 0.2s;
        }

        input[type="password"]:focus,
        input[type="email"]:focus {
            outline: none;
            border: 2px solid #4a90e2;
        }

        .login-btn {
            background: var(--primary);
            color: white;
            width: 100%;
            margin-bottom: 1.3rem;
        }

        .login-btn:hover {
            background: var(--secondary);
        }

        .link {
            display: block;
            margin-top: 12px;
            color: var(--primary);
            text-decoration: none;
            font-size: 14px;
            text-align: center;
        }

        .link:hover {
            color: var(--secondary);
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- header section -->
        <?php include VIEW_PATH . '/layout/header.php'; ?>

        <!-- <main></main> -->
        <main class="main-container">
            <div class="login-card">
                <?php echo (!empty($_SESSION['msg'])) ? "<p class='msg-box'>" . $_SESSION['msg'] . "</p>" : '';  ?>
                <h2>Admin Login</h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="email" class="required">Email Address</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="your.email@example.com" />
                    </div>
                    <div class="form-group">
                        <label for="password" class="required">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="******" />
                    </div>
                    <button
                        type="submit"
                        name="submit"
                        class="btn btn-primary login-btn">
                        Login as Admin
                    </button>
                </form>
                <a class="link" href="/admin-register">Don’t have an account? Register</a>
                <a class="link" href="/login">Login as Customer</a>
            </div>
        </main>
    </div>
    <script>
        window.onload = function() {
            document.getElementById('email').focus();
        };
    </script>
</body>

</html>
<?php unset($_SESSION["msg"]) ?>