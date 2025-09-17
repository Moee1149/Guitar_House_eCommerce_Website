<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Product_Mgmt</title>
    <link rel="stylesheet" href="/public/css/admin/styles.css" />
    <link rel="stylesheet" href="/public/css/admin/sidebar.css" />
    <link rel="stylesheet" href="/public/css/admin/admin-product-mgmt.css" />
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
                    <h1 class="page-title">
                        Welcome to Product Management
                    </h1>
                    <div class="text-box">
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Ipsum molestias voluptas
                            voluptatibus quod ducimus eum eius minima hic
                            sint reiciendis.
                        </p>
                    </div>
                    <div class="btn-group">
                        <a
                            href="/admin/product-mgmt/product-register"
                            title="Register Product"
                            class="btn btn--secondary">Add New Product</a>
                        <a
                            href="/admin/product-mgmt/product-list"
                            title="View Products"
                            class="text-link">&rarrb; View Products</a>
                        <!--  Class naming: BEM techniques -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Script links -->
    <script src="/public/js/scripts.js" type="text/javascript"></script>
    <script type="module" src="/public/js/sidebar-collapsed.js"></script>
</body>

</html>