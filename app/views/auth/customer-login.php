<?php if (isset($_SESSION['login_status']) && $_SESSION['login_status'] === true) {
    header("Location: /customer/dashboard");
    exit;
} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Login Page</title>
    <link rel="stylesheet" href="/public/css/styles.css" />
    <link rel="stylesheet" href="/public/css/auth/signin-page.css" />
</head>

<body>
    <div class="container">
        <!-- header section -->
        <?php include VIEW_PATH . '/layout/header.php' ?>

        <!-- main section -->
        <main class="main-container">
            <div class="login-card">
                <?php echo (!empty($_SESSION['msg'])) ? "<p class='msg-box'>" . $_SESSION['msg'] . "</p>" : '';  ?>
                <h2>Customer Login</h2>
                <form action="/login" method="POST">
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
                        Login
                    </button>
                </form>
                <a class="link" href="/register">Don’t have an account? Register</a>
                <a class="link" href="/admin-login">Login as Admin/Vendor</a>
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
<?php $_SESSION['msg'] = '';
