<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Customer Register</title>
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
                <div class="customer_mgmt">
                    <h1 class="page-title">All User</h1>
                    <!-- <a href="./logout.php" title="Logout" class="btn btn--secondary">Logout</a> -->
                    <table border="1" cellspacing="0" cellpadding="6">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Customer_id</th>
                                <th>Fullname</th>
                                <th>E-Mail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>1234</td>
                                <td>Aayusha Adhikari</td>
                                <td>aayu123@gmail.com</td>
                                <td>
                                    <a
                                        href="/admin/customer-mgmt/customer-edit"
                                        title="Edit">Edit</a>
                                    <a href="#" title="Delete">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>7832</td>
                                <td>Anima Dahal</td>
                                <td>anime5343@gmail.com</td>
                                <td>
                                    <a
                                        href="./customer-edit-page.html"
                                        title="Edit">Edit</a>
                                    <a href="#" title="Delete">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a
                        href="/admin/customer-mgmt"
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