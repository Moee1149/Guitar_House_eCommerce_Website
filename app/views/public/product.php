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

                <div class="sort-wrapper">
                    <select class="sort-select" id="sort-select">
                        <option value="" disabled selected>
                            Filter By Categories
                        </option>
                        <option value="solid-body">Solid Body</option>
                        <option value="semi-hollow-body">
                            Semi-Hollow Body
                        </option>
                        <option value="hollow-body">Hollow Body</option>
                    </select>
                    <select class="sort-select" id="sort-select">
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

                <section class="featured-products">
                    <div class="product-grid">
                        <div class="product-card">
                            <div class="product-image">
                                <span class="sale-badge">Sale</span>
                                <img src="/public/images/products/fp1.png" alt="" />
                            </div>
                            <div class="product-info">
                                <h3 class="product-name">
                                    Ibanez GRX40 RG Gio Series Maple Neck 6
                                    String Electric Guitar
                                </h3>
                                <div class="product-pricing">
                                    <span class="sale-price">Rs 20,900</span>
                                    <span class="original-price">Rs 23,455</span>
                                </div>
                                <div class="product-rating">
                                    <div class="stars">
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                    </div>
                                    <span class="review-count">(154)</span>
                                </div>
                                <button
                                    class="btn btn-primary add-to-cart-btn">
                                    <a
                                        href="cart-page.html"
                                        style="
                                                text-decoration: none;
                                                color: white;
                                            ">
                                        Add to Cart
                                    </a>
                                </button>
                                <a
                                    href="./product-detail-page.html"
                                    class="btn btn-outline add-to-cart-btn">View Details</a>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <span class="sale-badge">Sale</span>
                                <img src="/public/images/products/fp2.png" alt="" />
                            </div>
                            <div class="product-info">
                                <h3 class="product-name">
                                    Fender Squier Sonic Mustang HH 6 String
                                    Electric Guitar
                                </h3>
                                <div class="product-pricing">
                                    <span class="sale-price">Rs 18,453</span>
                                    <span class="original-price">Rs 19,424</span>
                                </div>
                                <div class="product-rating">
                                    <div class="stars">
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                    </div>
                                    <span class="review-count">(124)</span>
                                </div>
                                <button
                                    class="btn btn-primary add-to-cart-btn">
                                    <a
                                        href="cart-page.html"
                                        style="
                                                text-decoration: none;
                                                color: white;
                                            ">
                                        Add to Cart
                                    </a>
                                </button>
                                <a
                                    href="./product-detail-page.html"
                                    class="btn btn-outline add-to-cart-btn">View Details</a>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <span class="sale-badge">Sale</span>
                                <img src="/public/images/products/fp3.png" alt="" />
                            </div>
                            <div class="product-info">
                                <h3 class="product-name">
                                    Fender Squier Classic Vibe '60s
                                    Stratocaster Electric Guitar
                                </h3>
                                <div class="product-pricing">
                                    <span class="sale-price">Rs 44,369</span>
                                    <span class="original-price">Rs 46,704</span>
                                </div>
                                <div class="product-rating">
                                    <div class="stars">
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                    </div>
                                    <span class="review-count">(124)</span>
                                </div>
                                <button
                                    class="btn btn-primary add-to-cart-btn">
                                    <a
                                        href="cart-page.html"
                                        style="
                                                text-decoration: none;
                                                color: white;
                                            ">
                                        Add to Cart
                                    </a>
                                </button>
                                <a
                                    href="./product-detail-page.html"
                                    class="btn btn-outline add-to-cart-btn">View Details</a>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <span class="sale-badge">Sale</span>
                                <img src="public/images/products/fp4.png" alt="" />
                            </div>
                            <div class="product-info">
                                <h3 class="product-name">
                                    Cort CR250 6 String Electric Guitar
                                </h3>
                                <div class="product-pricing">
                                    <span class="sale-price">Rs 38,200</span>
                                    <span class="original-price">Rs 42,378</span>
                                </div>
                                <div class="product-rating">
                                    <div class="stars">
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                    </div>
                                    <span class="review-count">(124)</span>
                                </div>
                                <button
                                    class="btn btn-primary add-to-cart-btn">
                                    <a
                                        href="cart-page.html"
                                        style="
                                                text-decoration: none;
                                                color: white;
                                            ">
                                        Add to Cart
                                    </a>
                                </button>
                                <a
                                    href="./product-detail-page.html"
                                    class="btn btn-outline add-to-cart-btn">View Details</a>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <span class="sale-badge">Sale</span>
                                <img src="/public/images/products/p3.jpeg" alt="" />
                            </div>
                            <div class="product-info">
                                <h3 class="product-name">
                                    Fender Squier Classic Vibe '60s
                                    Stratocaster Electric Guitar
                                </h3>
                                <div class="product-pricing">
                                    <span class="sale-price">Rs 44,369</span>
                                    <span class="original-price">Rs 46,704</span>
                                </div>
                                <div class="product-rating">
                                    <div class="stars">
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                    </div>
                                    <span class="review-count">(124)</span>
                                </div>
                                <button
                                    class="btn btn-primary add-to-cart-btn">
                                    <a
                                        href="cart-page.html"
                                        style="
                                                text-decoration: none;
                                                color: white;
                                            ">
                                        Add to Cart
                                    </a>
                                </button>
                                <a
                                    href="./product-detail-page.html"
                                    class="btn btn-outline add-to-cart-btn">View Details</a>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <span class="sale-badge">Sale</span>
                                <img src="public/images/products/p1.jpeg" alt="" />
                            </div>
                            <div class="product-info">
                                <h3 class="product-name">
                                    Ibanez GRX40 RG Gio Series Maple Neck 6
                                    String Electric Guitar
                                </h3>
                                <div class="product-pricing">
                                    <span class="sale-price">Rs 20,900</span>
                                    <span class="original-price">Rs 23,455</span>
                                </div>
                                <div class="product-rating">
                                    <div class="stars">
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                        <span class="star filled">★</span>
                                    </div>
                                    <span class="review-count">(154)</span>
                                </div>
                                <button
                                    class="btn btn-primary add-to-cart-btn">
                                    Add to Cart
                                </button>
                                <button
                                    class="btn btn-outline add-to-cart-btn">
                                    View Details
                                </button>
                            </div>
                        </div>
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
</body>

</html>