<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Register</title>
    <link rel="stylesheet" href="/public/css/styles.css" />
    <link rel="stylesheet" href="/public/css/auth/register-page.css" />
</head>

<body>
    <div class="container">
        <!-- header section -->
        <?php include VIEW_PATH . '/layout/header.php' ?>

        <!-- main section -->
        <main class="main-container">
            <div class="register-card">
                <h2>Customer Register</h2>
                <form
                    action="#"
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
                        <a
                            href="./signin-page.html"
                            style="
                                    text-decoration: none;
                                    color: #fff;
                                    display: block;
                                    width: 100%;
                                ">
                            Register Now</a>
                    </button>
                </form>
                <a class="link" href="./signin-page.html">Already have an account? Login</a>
                <a class="link" href="./admin-signup-page.html">Register as Admin/Vendor</a>
            </div>
        </main>
    </div>
</body>

</html>