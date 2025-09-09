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
            <!-- filter section -->
            <aside class="filter-sidebar">
                <div class="filter-container">
                    <!-- filter by body style -->
                    <div class="filter-section">
                        <div class="section-header">Shape / Style</div>
                        <div class="section-content">
                            <div class="filter-option">
                                <input type="checkbox" id="strat" />
                                <label for="strat">Strat</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="tele" />
                                <label for="tele">Tele</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="les-paul" />
                                <label for="les-paul">Les Paul</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="sg" />
                                <label for="sg">SG</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="superstrat" />
                                <label for="superstrat">Superstrat</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="offset" />
                                <label for="offset">Offset</label>
                            </div>
                        </div>
                    </div>

                    <!-- filter my pickup type -->
                    <div class="filter-section">
                        <div class="section-header">Pickup Type</div>
                        <div class="section-content">
                            <div class="filter-option">
                                <input type="checkbox" id="single-coil" />
                                <label for="single-coil">Single Coil</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="humbucker" />
                                <label for="humbucker">Humbucker</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="p90" />
                                <label for="p90">P90</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="mixed" />
                                <label for="mixed">Mixed</label>
                            </div>
                        </div>
                    </div>

                    <!--Filter by price -->
                    <div class="filter-section">
                        <div class="section-header">Price Range</div>
                        <div class="section-content">
                            <div class="filter-option">
                                <input type="checkbox" id="under-10000" />
                                <label for="under-10000">Under ₹10,000</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="10000-25000" />
                                <label for="10000-25000">₹10,000 - ₹25,000</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="25000-50000" />
                                <label for="25000-50000">₹25,000 - ₹50,000</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="50000-100000" />
                                <label for="50000-100000">₹50,000 - ₹1,00,000</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="100000-200000" />
                                <label for="100000-200000">₹1,00,000 - ₹2,00,000</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="above-200000" />
                                <label for="above-200000">Above ₹2,00,000</label>
                            </div>
                        </div>
                    </div>

                    <!-- filter by brand -->
                    <div class="filter-section">
                        <div class="section-header">By Brand</div>
                        <div class="section-content">
                            <div class="filter-option">
                                <input type="checkbox" id="fender" />
                                <label for="fender">Fender</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="gibson" />
                                <label for="gibson">Gibson</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="ibanez" />
                                <label for="ibanez">Ibanez</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="prs" />
                                <label for="prs">PRS (Paul Reed Smith)</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="yamaha" />
                                <label for="yamaha">Yamaha</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="esp" />
                                <label for="esp">ESP / LTD</label>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="jackson" />
                                <label for="jackson">Jackson</label>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="content">
                <div class="content-header">
                    <div>
                        <h2>All Guitars</h2>
                    </div>
                    <div class="search-wrapper">
                        <span class="search-icon">🔍</span>
                        <input
                            type="text"
                            class="search-input"
                            placeholder="Search guitars..."
                            id="guitar-search" />
                    </div>
                </div>

                <div class="sort-wrapper">
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
                                <img src="/public/images/products/fp4.png" alt="" />
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
                                <img src="/public/images/products/p1.jpeg" alt="" />
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