<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Management - Order List</title>
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
                    <h1 class="page-title">Orders List</h1>
                    <table border="1" cellspacing="0" cellpadding="6">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th>Items</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $row) { ?>
                                <tr>
                                    <td><?php echo $row['order_id']; ?></td>
                                    <td><?php echo $row['customer']; ?></td>
                                    <td><?php echo $row['order_date']; ?></td>
                                    <td><?php echo $row['item_count']; ?></td>
                                    <td><?php echo $row['total_amount']; ?></td>
                                    <td><?php echo $row['order_status']; ?></td>
                                    <td>
                                        <a href="/admin/order-mgmt/order-edit?order_id=<?php echo $row['order_id']; ?>" title="Edit">View / Edit</a>
                                    </td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                    <a href="/admin/order-mgmt" title="Back to Home" class="text-link">&larr;Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="/public/js/sidebar-collapsed.js"></script>
</body>

</html>
<?php unset($_SESSION['msg']);
