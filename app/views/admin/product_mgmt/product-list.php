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
                <div class="product_mgmt">
                    <h1 class="page-title">Product list</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Category</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="product-info">
                                        <div class="product-details">
                                            <h3>
                                                Fender Squier Sonic
                                                Stratocaster Electric Guitar
                                            </h3>
                                            <div class="product-id">
                                                2345
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>Solid Body</td>
                                <td>23</td>
                                <td>Rs 18,453</td>
                                <td>
                                    <span
                                        class="status-badge status-in-stock">In Stock</span>
                                </td>
                                <td>
                                    <a
                                        href="/admin/product-mgmt/product-edit"
                                        class="action-btn edit-btn"
                                        title="Edit">
                                        <svg
                                            class="action-icon"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg>
                                    </a>
                                    <a
                                        href="#"
                                        class="action-btn delete-btn"
                                        title="Edit">
                                        <svg
                                            class="action-icon"
                                            viewBox="0 0 20 20">
                                            <path
                                                fill-rule="evenodd"
                                                d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9zM4 5a2 2 0 012-2h8a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-info">
                                        <div class="product-details">
                                            <h3>
                                                Vault RG1 Soloist Premium
                                                Electric Guitar
                                            </h3>
                                            <div class="product-id">
                                                3345
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>Semi-Hollow Body</td>
                                <td>12</td>
                                <td>Rs 18,453</td>
                                <td>
                                    <span
                                        class="status-badge status-out-of-stock">Out of Stock</span>
                                </td>
                                <td>
                                    <a
                                        href="/admin/product-mgmt/product-edit"
                                        class="action-btn edit-btn"
                                        title="Edit">
                                        <svg
                                            class="action-icon"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg>
                                    </a>
                                    <a
                                        href="./product-edit-page.html"
                                        class="action-btn delete-btn"
                                        title="Edit">
                                        <svg
                                            class="action-icon"
                                            viewBox="0 0 20 20">
                                            <path
                                                fill-rule="evenodd"
                                                d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9zM4 5a2 2 0 012-2h8a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="/admin/product-mgmt" class="text-link">&larr; Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script links -->
    <script src="/public/js/scripts.js" type="text/javascript"></script>
</body>

</html>