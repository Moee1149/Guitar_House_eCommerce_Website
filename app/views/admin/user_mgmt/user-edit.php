<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | User Mgmt</title>
    <link rel="stylesheet" href="/public/css/admin/styles.css" />
    <link rel="stylesheet" href="/public/css/admin/sidebar.css" />
    <link rel="stylesheet" href="/public/css/admin/admin-user-mgmt.css" />
</head>

<body>
    <div class="container">
        <!-- sidebar section -->
        <?php include VIEW_PATH . '/layout/admin-sidebar.php'; ?>

        <div class="main-content-container">
            <!-- header section -->
            <?php include VIEW_PATH . '/layout/admin-header.php'; ?>

            <div class="customer-page-container">
                <div class="customer_mgmt form-box">
                    <h1 class="page-title">Update User</h1>
                    <form
                        action="#"
                        method="POST"
                        name="user_form"
                        enctype="multipart/form-data"
                        novalidate>
                        <input type="hidden" name="user_id" value="1234" />
                        <div class="field-group">
                            <label for="fname">Fullname</label>
                            <input
                                type="text"
                                id="fname"
                                name="fullname"
                                value="Aayusha Adhikari" />
                        </div>
                        <div class="field-group">
                            <label for="phone">Phone</label>
                            <input
                                type="text"
                                id="phone"
                                name="phone"
                                value="9822451234" />
                        </div>
                        <div class="field-group">
                            <label for="email">E-Mail</label>
                            <input
                                type="text"
                                id="email"
                                name="email"
                                value="aayu1234@gmail.com"
                                disabled />
                        </div>
                        <div class="field-group">
                            <label for="addr">Address</label>
                            <input
                                type="text"
                                id="addr"
                                name="address"
                                value="Lekhnath 31, Pokhara" />
                        </div>
                        <button
                            type="submit"
                            name="submit"
                            class="btn btn--secondary">
                            Update Now
                        </button>
                    </form>
                    <a
                        href="/admin/user-mgmt"
                        title="Back to Home"
                        class="text-link">&larr;Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script links -->
    <script src="./public/scripts.js" type="text/javascript"></script>
</body>

</html>