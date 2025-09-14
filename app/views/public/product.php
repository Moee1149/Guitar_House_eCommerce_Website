<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Products</title>
    <link rel="stylesheet" href="/public/css/styles.css" />
    <link rel="stylesheet" href="/public/css/product-page.css" />
</head>

<body>
    <div class="container">
        <!-- header section -->
        <?php include VIEW_PATH . '/layout/header.php'; ?>

        <!-- main section  -->
        <main class="main-container">
            <div class="content">
                <div class="content-header">
                    <div>
                        <h2>All Products</h2>
                    </div>
                    <div class="search-wrapper">
                        <span class="search-icon">🔍</span>
                        <input type="text" class="search-input" placeholder="Search guitars..." id="guitar-search" />
                    </div>
                </div>

                <form action="/product/" method="POST">
                    <div class="sort-wrapper">
                        <select class="sort-select" id="sort-select" name="category">
                            <option value="" disabled selected>
                                Filter By Categories
                            </option>
                            <option value="solid body">Solid Body</option>
                            <option value="semi-hollow body">
                                Semi-Hollow Body
                            </option>
                            <option value="hollow body">Hollow Body</option>
                        </select>
                        <select class="sort-select" id="sort-select" name="sort">
                            <option value="" disabled selected>Sort by</option>
                            <option value="popularity">Popularity</option>
                            <option value="price-low-high">
                                Price: Low to High
                            </option>
                            <option value="price-high-low">
                                Price: High to Low
                            </option>
                            <option value="new-arrivals">New Arrivals</option>
                            <option value="customer-rating">
                                Customer Rating
                            </option>
                        </select>
                    </div>
                </form>

                <section class="featured-products">
                    <div class="product-grid">
                        <?php foreach ($products as $product): ?>
                            <div class="product-card">
                                <div class="product-image">
                                    <span class="sale-badge">Sale</span>
                                    <img src="<?= $product['image']; ?>" "alt="" />
                                </div>
                                <div class=" product-info">
                                    <h3 class="product-name"><?= $product['product_name']; ?></h3>
                                    <div>
                                        <div class="btn btn-primary category"><?= $product['category_name']; ?></div>
                                    </div>
                                    <div class="product-pricing">
                                        <span class="sale-price">Rs <?= $product['price']; ?></span>
                                        <span class="original-price">Rs 23,455</span>
                                    </div>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <div class="stars">
                                                <?php
                                                $maxStars = 5;
                                                $rating = (int)$product['rating'];
                                                for ($i = 1; $i <= $maxStars; $i++) {
                                                    echo $i <= $rating ? '<span class="star filled">★</span>' : '<span class="star">☆</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <span class="review-count">(<?= $product['review_count']; ?>)</span>
                                    </div>
                                    <button class="btn btn-primary add-to-cart-btn">
                                        <a href="/product/add-to-cart?product_id=<?= $product['product_id'] ?>" style=" text-decoration: none; color: white; "> Add to Cart </a>
                                    </button>
                                    <a href="/product?product_id=<?= $product['product_id'] ?>" class="btn btn-outline add-to-cart-btn">View Details</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <!-- pagination -->
                <div class="pagination-wrapper">
                    <div class="pagination">
                        <!-- Left Arrow -->
                        <div class="pagination-item arrow">‹</div>

                        <!-- Page Numbers -->
                        <div class="pagination-item active">1</div>
                        <div class="pagination-item">2</div>
                        <div class="pagination-item">3</div>

                        <!-- Right Arrow -->
                        <div class="pagination-item arrow">›</div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>
        document.querySelectorAll('.sort-select, .search-input').forEach(el => {
            el.addEventListener('change', function() {
                console.log("moee")
                // el.form.submit();
            });
        });
    </script>
</body>

</html>