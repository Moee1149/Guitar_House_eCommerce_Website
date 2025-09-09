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


        <!-- <main></main> -->
        <main class="main-container">
            <div class="login-card">
                <h2>Customer Login</h2>
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
                        <a
                            href="customer/customer-dashboard-page.html"
                            style="
                                    text-decoration: none;
                                    color: #fff;
                                    display: block;
                                    width: 100%;
                                ">Login</a>
                    </button>
                </form>
                <a class="link" href="/register">Don’t have an account? Register</a>
                <a class="link" href="/admin-login">Login as Admin/Vendor</a>
            </div>
        </main>
    </div>
</body>

</html>