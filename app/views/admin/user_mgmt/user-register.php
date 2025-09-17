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
                    <?php echo isset($_SESSION['msg']) ? "<p class='msg-box'>" . $_SESSION['msg'] . "</p>" : '';  ?>
                    <h1 class="page-title">Register New Admin</h1>
                    <form action="/admin/user-mgmt/user-register" method="POST" name="user_form" enctype="multipart/form-data" novalidate>
                        <div class="field-group">
                            <label for="fname">Fullname</label>
                            <input type="text" id="fname" name="fullname" value="" />
                        </div>
                        <div class="field-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" value="" />
                        </div>
                        <div class="field-group">
                            <label for="email">E-Mail</label>
                            <input type="text" id="email" name="email" value="" />
                        </div>
                        <div class="field-group">
                            <label for="pwd">Password</label>
                            <input type="password" id="pwd" name="password" value="" />
                        </div>
                        <div class="field-group">
                            <label for="cpwd">Confirm Password</label>
                            <input type="password" id="cpwd" name="cpassword" value="" />
                        </div>
                        <div class="field-group">
                            <label for="addr">Address</label>
                            <input type="text" id="addr" name="address" value="" />
                        </div>
                        <div class="field-group checkbox-field">
                            <input type="checkbox" id="agree" name="agree" value="1" />
                            <label for="agree" style="position: relative; top: 3px">I agree with the <a href="#" title="" style="color: white">Terms &amp; Conditions</a></label>
                        </div>
                        <button type="submit" name="submit" class="btn btn--secondary"> Register Now </button>
                    </form>
                    <a href="/admin/user-mgmt" title="Back to Home" class="text-link">&larr;Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script links -->
    <script src="./public/scripts.js" type="text/javascript"></script>
    <script type="module" src="/public/js/sidebar-collapsed.js"></script>
</body>

</html>
<?php unset($_SESSION["msg"]) ?>