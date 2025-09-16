<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Customer List</title>
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
                    <?php echo (!empty($_SESSION['msg'])) ? "<p class='msg-box'>" . $_SESSION['msg'] . "</p>" : '';  ?>
                    <h1 class="page-title">All Customers</h1>
                    <table border="1" cellspacing="0" cellpadding="6">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>customer_id</th>
                                <th>Fullname</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>E-Mail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0;
                            foreach ($customers as $row) {
                                $i++;
                            ?>
                                <tr>
                                    <td><?php echo $i; ?>. </td>
                                    <td><?php echo $row['customer_id']; ?></td>
                                    <td><?php echo $row['customer_name']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td>
                                        <a href="/admin/customer-mgmt/customer-edit?customer_id=<?php echo $row['customer_id']; ?>" title="Edit">Edit</a>
                                        <a href="/admin/customer-mgmt/customer-delete?customer_id=<?php echo $row['customer_id']; ?>" title="Delete">Delete</a>
                                    </td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                    <a href="/admin/customer-mgmt" title="Back to Home" class="text-link">&larr;Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script links -->
    <script src="./public/scripts.js" type="text/javascript"></script>
</body>

</html>
<?php unset($_SESSION["msg"]) ?>