<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Home</title>
    <link rel="stylesheet" href="/public/css/styles.css" />
    <link rel="stylesheet" href="/public/css/index-page.css" />
</head>

<body>
    <div class="container">
        <!--header section-->
        <?php include VIEW_PATH . '/layout/header.php'; ?>

        <!-- main section  -->
        <main class="main-container">
            <!-- hero section -->
            <div class="slideshow-container">
                <?php foreach ($mostViewProducts as $index => $product): ?>
                    <section class="mySlides fade">
                        <div class="hero-section">
                            <div class="hero-content">
                                <p class="spotlight">#<?= $index + 1 ?> Spotlight</p>
                                <h1><?= htmlspecialchars($product['product_name']) ?></h1>
                                <p><?= htmlspecialchars($product['description']) ?></p>
                                <div class="btn-container">
                                    <button class="btn btn-primary" style=" display: flex; gap: 0.2rem; align-items: center; ">
                                        <a href="/product/add-to-cart?product_id=<?= $product['product_id'] ?>"
                                            style="text-decoration: none; color: white;">Shop Now</a>
                                        <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon lucide lucide-move-right-icon lucide-move-right">
                                            <path d="M18 8L22 12L18 16" />
                                            <path d="M2 12H22" />
                                        </svg>
                                    </button>
                                    <a href="/product?product_id=<?= htmlspecialchars($product['product_id']) ?>" class="btn btn-outline">View Details</a>
                                </div>
                                <div class="stats">
                                    <div class="stat-item">
                                        <svg class="star-icon" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span><?= htmlspecialchars($product['rating']) ?>/5 Rating</span>
                                    </div>
                                    <div><?= htmlspecialchars($product['review_count']) ?> Reviews</div>
                                    <div><?= number_format($product['views']) ?> Views</div>
                                    <div>50K+ Happy Customers</div>
                                </div>
                            </div>
                            <div class="hero-right-side">
                                <div class="image-container">
                                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['product_name']) ?>" />
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endforeach ?>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>

            <!-- our services -->
            <section class="our-services">
                <div class="service">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-truck-icon lucide-truck">
                        <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
                        <path d="M15 18H9" />
                        <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
                        <circle cx="17" cy="18" r="2" />
                        <circle cx="7" cy="18" r="2" />
                    </svg>
                    <p>Free Shipping</p>
                    <span>Free shipping on orders over Rs 5000</span>
                </div>

                <div class="service">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check-icon lucide-shield-check">
                        <path
                            d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                        <path d="m9 12 2 2 4-4" />
                    </svg>
                    <p>Secure Payment</p>
                    <span>100% secure payment processing</span>
                </div>

                <div class="service">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rotate-ccw-icon lucide-rotate-ccw">
                        <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" />
                        <path d="M3 3v5h5" />
                    </svg>
                    <p>Easy Returns</p>
                    <span>30-day hassle-free returns</span>
                </div>

                <div class="service">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-headset-icon lucide-headset">
                        <path d="M3 11h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5Zm0 0a9 9 0 1 1 18 0m0 0v5a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3Z" />
                        <path d="M21 16v2a4 4 0 0 1-4 4h-5" />
                    </svg>
                    <p>24/7 Support</p>
                    <span>Round-the-clock customer service</span>
                </div>
            </section>

            <!-- feature products -->
            <section class="featured-products">
                <h2>Featured Products</h2>
                <span class="featured-message">Discover our handpicked selection of trending products that our customers love</span>
                <div class="product-grid">
                    <?php foreach ($featuredProducts as $product): ?>
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
                                    <span class="sale-price">$ <?= $product['price']; ?></span>
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
                <button class="btn btn-primary view-all-product-btn">
                    <a href="/product">View All Products</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </button>
            </section>

            <!-- Customer Reviews-->
            <div class="customer-reviews">
                <section class="testimonials-section">
                    <div class="testimonials-header">
                        <h1 class="testimonials-title"> What Our Customers Say </h1>
                        <p class="testimonials-subtitle"> Don't just take our word for it - hear from our satisfied customers </p>
                    </div>

                    <div class="testimonials-grid">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-card">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="testimonial-text"> "Amazing quality products and super fast shipping! I've been shopping here for months and never disappointed." </p>
                            <div class="customer-info">
                                <div class="customer-avatar"></div>
                                <div class="customer-details">
                                    <div class="customer-name"> Aayusha Adhikari </div>
                                    <div class="customer-status"> Verified Buyer </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-card">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="testimonial-text">
                                "Great customer service and competitive
                                prices. The return process was seamless when
                                I needed to exchange an item."
                            </p>
                            <div class="customer-info">
                                <div class="customer-avatar"></div>
                                <div class="customer-details">
                                    <div class="customer-name"> Anima Dahal </div>
                                    <div class="customer-status"> Verified Buyer </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-card">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="testimonial-text">
                                "Love the variety of products available.
                                Found exactly what I was looking for at a
                                great price!"
                            </p>
                            <div class="customer-info">
                                <div class="customer-avatar"></div>
                                <div class="customer-details">
                                    <div class="customer-name">
                                        Bibash Basnet
                                    </div>
                                    <div class="customer-status">
                                        Verified Buyer
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <!-- footer section -->
        <?php include VIEW_PATH . '/layout/footer.php'; ?>
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides((slideIndex += n));
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides((slideIndex = n));
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
    </script>
</body>

</html>