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
                <div class="product-container" style="overflow-y: auto;">
                    <!-- Header -->
                    <header class="product-header">
                        <div class="product-header-left">
                            <div class="product-header-text">
                                <h1>Add New Product</h1>
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
                            </div>
                        </div>

                        <form action="#" method="POST" name="product_form" enctype="multipart/form-data" class="product-form" novalidate>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="productName">Product Name</label>
                                    <input type="text" id="productName" name="product_name" placeholder="Product Name" class="form-input" required>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select id="category" name="product_category" class="form-input">
                                        <option value="1" selected>Select Category</option>
                                        <option value="1">Solid Body</option>
                                        <option value="1">Hollow Body</option>
                                        <option value="1">Semi-Hollow Body</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="price">Price ($)</label>
                                    <input type="number" id="price" name="product_price" placeholder="Product Price" class="form-input" required>
                                </div>
                                <div class="form-group">
                                    <label for="stock">Stock Quantity</label>
                                    <input type="number" id="stock" name="product_stock" placeholder="Stock size" class="form-input" required>
                                </div>
                            </div>

                            <div class="form-group full-width">
                                <label for="description">Product Description</label>
                                <textarea id="description" name="product_description" class="form-textarea" rows="4" placeholder="High-quality wireless headphones with noise cancellation and long battery life."></textarea>
                            </div>

                            <div class="form-group full-width">
                                <label for="productImage">Product Image</label>
                                <div class="image-upload-container">
                                    <div class="file-upload">
                                        <input type="file" name="product_image" accept="image/*">
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="button" class="btn btn-cancel" style="background-color: #ef4444;">
                                    <a href="/admin/product-mgmt" style="text-decoration:none; color: white;"> ✕ Cancel </a>
                                </button>
                                <button type="submit" name="submit" class="btn btn-primary" style="background-color: #10b981;">
                                    <a href="#" style="text-decoration:none; color: white;"> 💾 Save Changes </a>
                                </button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>

</html>