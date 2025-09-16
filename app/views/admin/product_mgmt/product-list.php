<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Product_Mgmt</title>
    <link rel="stylesheet" href="/public/css/admin/styles.css" />
    <link rel="stylesheet" href="/public/css/admin/sidebar.css" />
    <link rel="stylesheet" href="/public/css/admin/admin-user-mgmt.css" />
    <link rel="stylesheet" href="/public/css/admin/admin-product-mgmt.css" />
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
                    <?php echo (!empty($_SESSION['msg'])) ? "<p class='msg-box'>" . $_SESSION['msg'] . "</p>" : '';  ?>
                    <h1 class="page-title">Product list</h1>
                    <?php if ($products): ?>
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <?php if ($product_count > 0): ?>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($products)): ?>
                                        <tr>
                                            <td>
                                                <div class="product-info">
                                                    <?php if (!empty($row['image'])): ?>
                                                        <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['product_name']; ?>" class="product-image">
                                                    <?php else: ?>
                                                        <div class="product-image-placeholder">IMG</div>
                                                    <?php endif; ?>
                                                    <div class="product-details">
                                                        <h3><?php echo htmlspecialchars($row['product_name']); ?></h3>
                                                        <div class="product-id">prod<?php echo str_pad($row['product_id'], 3, '0', STR_PAD_LEFT); ?></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $row['stock']; ?></td>
                                            <td>$<?php echo number_format($row['price'], 2); ?></td>
                                            <td>
                                                <?php
                                                $stock = $row['stock'];
                                                if ($stock > 50) {
                                                    echo '<span class="status-badge status-in-stock">In Stock</span>';
                                                } elseif ($stock > 0) {
                                                    echo '<span class="status-badge status-low-stock">Low Stock</span>';
                                                } else {
                                                    echo '<span class="status-badge status-out-of-stock">Out of Stock</span>';
                                                }
                                                ?>
                                            </td>
                                            <td style="margin-top: 5px;">
                                                <a href="/admin/product-mgmt/product-edit?product_id=<?php echo $row['product_id']; ?>" class="action-btn edit-btn" title="Edit">
                                                    Edit
                                                </a>
                                                <a href="/admin/product-mgmt/product-delete?product_id=<?php echo $row['product_id']; ?>" class="action-btn delete-btn" title="Edit">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            <?php else: ?>
                                <tr>
                                    <p class="msg-box">No products found.</p>
                                </tr>
                            <?php endif; ?>
                        </table>
                    <?php else: ?>
                        <p class="msg-box">Error getting Products</p>
                    <?php endif; ?>
                    <a href="/admin/product-mgmt" class="text-link">&larr; Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script links -->
    <script src="/public/js/scripts.js" type="text/javascript"></script>
</body>

</html>
<?php unset($_SESSION['msg']); ?>