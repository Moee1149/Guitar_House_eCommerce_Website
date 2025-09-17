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
                    <form action="/admin/user-mgmt/user-edit?user_id=<?= $user_id ?>" method="POST" name="user_form" enctype="multipart/form-data" novalidate>
                        <input type="hidden" name="user_id" value="<?= $user_id ?>" />
                        <div class="field-group">
                            <label for="fname">Fullname</label>
                            <input type="text" id="fname" name="fullname" value="<?php echo $fname; ?>">
                        </div>
                        <div class="field-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" value="<?php echo $ph; ?>">
                        </div>
                        <div class="field-group">
                            <label for="email">E-Mail</label>
                            <input type="text" id="email" name="email" value="<?php echo $email; ?>" disabled>
                        </div>
                        <div class="field-group">
                            <label for="addr">Address</label>
                            <input type="text" id="addr" name="address" value="<?php echo $addr; ?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn--secondary"> Update Now </button>
                    </form>
                    <a href="/admin/user-mgmt/user-list" title="Back to List" class="text-link">&larr;Back to User List</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script links -->
    <script src="./public/scripts.js" type="text/javascript"></script>
    <script type="module" src="/public/js/sidebar-collapsed.js"></script>
</body>

</html>