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
                <header class="header" style="padding: 1rem 1.3rem">
                    <div class="header-left">
                        <div class="header-text">
                            <h1>
                                Edit Product: Fender Squier Sonic
                                Stratocaster Electric Guitar
                            </h1>
                            <p>
                                Update details for product ID: prod00-1234
                            </p>
                        </div>
                    </div>
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

                    <form action="#" method="POST" name="product_form" class="product-form" enctype="multipart/form-data" novalidate>
                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
                        <div class="form-row">
                            <div class="form-group">
                                <label for="productName">Product Name</label>
                                <input type="text" name="product_name" id="productName" value=" Fender Squier Sonic Stratocaster Electric Guitar" class="form-input" />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="price">Price ($)</label>
                                <input type="number" name="product_price" id="price" value="18342" step="0.01" class="form-input" />
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock Quantity</label>
                                <input type="number" name="product_stock" id="stock" value="12" class="form-input" />
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label for="description">Product Description</label>
                            <textarea id="description" name="product_description" class="form-textarea" rows="4"> </textarea>
                        </div>

                        <div class="form-group full-width">
                            <label for="productImage">Product Image</label>
                            <div class="image-upload-container">
                                <div class="file-upload">
                                    <input type="file" name="product_image" accept="image/*" />
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn btn-cancel">
                                <a href="/admin/product-mgmt" style=" text-decoration: none; color: white; "> ✕ Cancel </a>
                            </button>
                            <button type="submit" name="submit" class="btn btn-primary">
                                <a href="/admin/product-mgmt/product-list" style=" text-decoration: none; color: white; "> 💾 Save Changes </a>
                            </button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <!-- Script links -->
    <script src="/public/js/scripts.js" type="text/javascript"></script>
</body>

</html>