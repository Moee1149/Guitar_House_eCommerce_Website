<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Customer Mgmt</title>
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
                    <h1 class="page-title">Welcome to Order Management</h1>
                    <div class="text-box">
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum molestias voluptas voluptatibus quod ducimus eum eius minima hic sint reiciendis. </p>
                    </div>
                    <div class="btn-group">
                        <a href="/admin/order-mgmt/order-list" title="Order List" class="btn btn--secondary">Order List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>