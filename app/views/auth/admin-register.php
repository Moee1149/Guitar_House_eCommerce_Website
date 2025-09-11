<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Register</title>
    <link rel="stylesheet" href="public/css/styles.css" />
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
            margin-top: 12rem;
            padding-bottom: 5rem;
        }

        .register-card {
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
        input[type="text"],
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
        input[type="text"]:focus,
        input[type="email"]:focus {
            outline: none;
            border: 2px solid #4a90e2;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .checkbox-group label {
            position: relative;
            top: 4px;
        }

        .register-btn {
            width: 100%;
            margin-bottom: 0.9rem;
            background-color: var(--primary);
        }

        .register-btn:hover {
            background: var(--secondary);
        }

        .error {
            font-size: 12px;
            color: red;
            font-style: italic;
        }

        .link {
            display: block;
            margin-top: 12px;
            color: var(--primary);
            text-decoration: none;
            font-size: 14px;
            text-align: center;
            margin-left: -15px;
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

        <!-- main section -->
        <main class="main-container">
            <div class="register-card">
                <h2>Admin Register</h2>
                <form
                    action="/admin-register"
                    method="POST"
                    name="user_form"
                    enctype="multipart/form-data"
                    novalidate>
                    <div class="form-group">
                        <label for="fullname" class="required">Full Name</label>
                        <input
                            type="text"
                            id="fname"
                            name="fullname"
                            placeholder="Enter your Full name" />
                    </div>
                    <div class="form-group">
                        <label for="text" class="required">Phone Number</label>
                        <input
                            type="text"
                            id="phone"
                            name="phone"
                            placeholder="Phone"
                            value="" />
                    </div>
                    <div class="form-group">
                        <label for="addr" class="required">Address</label>
                        <input
                            type="text"
                            id="addr"
                            name="address"
                            placeholder="Enter you address"
                            value="" />
                    </div>
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
                            placeholder="Enter your password" />
                    </div>

                    <div class="form-group checkbox-group">
                        <input
                            type="checkbox"
                            id="agree"
                            name="agree"
                            value="1" />
                        <label for="agree">I agree with the
                            <a href="#" title="" style="color: white">Terms &amp; Conditions</a></label>
                    </div>
                    <button
                        type="submit"
                        name="submit"
                        class="btn btn-primary register-btn">
                        Register Now
                    </button>
                </form>
                <a class="link" href="/admin-login">Already have an account? Login</a>
                <a class="link" href="/register">Register as Customer</a>
            </div>
        </main>
    </div>
    <script src="/public/js/form-validation.js"></script>
</body>

</html>