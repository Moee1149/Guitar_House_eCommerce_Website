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
                <?php if ($data): ?>
                    <!-- Header -->
                    <h1>Edit Product: <?= $product_name; ?></h1>
                    <p>Update details for product ID: prod00<?= $product_id; ?></p>
                    </header>

                    <!-- Product Information Section -->
                    <section class="product-form-section">
                        <div class="section-header">
                            <div class="section-icon">
                                <span class="edit-icon">✏️</span>
                            </div>
                            <div class="section-text">
                                <h2>Product Information</h2>
                                <p>Modify the product details below.</p>
                            </div>
                        </div>

                        <form action="/admin/product-mgmt/product-edit?product_id=<?php echo $product_id; ?>" method="POST" name="product_form" class="product-form" enctype="multipart/form-data" novalidate>
                            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="productName">Product Name</label>
                                    <input type="text" name="product_name" id="productName" value="<?php echo $product_name; ?>" class="form-input">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="price">Price ($)</label>
                                    <input type="number" name="product_price" id="price" value="<?php echo $price; ?>" step="0.01" class="form-input">
                                </div>
                                <div class="form-group">
                                    <label for="stock">Stock Quantity</label>
                                    <input type="number" name="product_stock" id="stock" value="<?php echo $stock; ?>" class="form-input">
                                </div>
                            </div>

                            <div class="form-group full-width">
                                <label for="description">Product Description</label>
                                <textarea id="description" name="product_description" class="form-textarea" rows="4">
                                        <?php echo htmlspecialchars(trim($description)); ?>
                                    </textarea>
                            </div>

                            <div class="form-actions">
                                <button type="button" class="btn btn-cancel">
                                    <a href="/admin/product-mgmt/product-list" style="text-decoration:none; color: white;"> ✕ Cancel </a>
                                </button>
                                <button type="submit" name="submit" class="btn btn-primary"> 💾 Save Changes </button>
                            </div>
                        </form>
                    </section>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Script links -->
    <script src="/public/js/scripts.js" type="text/javascript"></script>
    <script type="module" src="/public/js/sidebar-collapsed.js"></script>
</body>

</html>