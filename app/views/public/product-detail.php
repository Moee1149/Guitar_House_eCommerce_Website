<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Product Detail</title>
    <link rel="stylesheet" href="public/css/styles.css" />
    <link rel="stylesheet" href="public/css/product-detail-page.css" />
</head>

<body>
    <div class="container">
        <!-- header section -->
        <?php include VIEW_PATH . '/layout/header.php'; ?>

        <!-- main section -->
        <main class="main-container">
            <div class="content-container">
                <!-- Back Button -->
                <a href="/product" class="btn btn-primary back-button"> ← BACK TO PRODUCTS </a>

                <!-- Product Section -->
                <div class="product-section">
                    <!-- Product Images -->
                    <div class="product-images">
                        <div class="main-image">
                            <img src="<?= $product['image'] ?>" alt="" />
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="product-info">
                        <h1><?= $product['product_name']; ?></h1>
                        <div class="rating">
                            <span class="stars">★★★★★</span>
                            <span class="review-count">(<?= $product['review_count']; ?> reviews)</span>
                        </div>

                        <div class="price">$ <?= $product['price']; ?></div>

                        <!-- Key Features -->
                        <div class="features-card">
                            <div class="card-header">KEY FEATURES:</div>
                            <div class="card-body">
                                <ul class="feature-list">
                                    <li>Double Cutaway Body</li>
                                    <li>HSH Pickup Configuration</li>
                                    <li>24 Jumbo Frets</li>
                                    <li>Floyd Rose–Style Tremolo Bridge</li>
                                    <li>Premium Finish & Slim Neck</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Specifications -->
                        <div class="specs-card">
                            <div class="card-header">SPECIFICATIONS:</div>
                            <div class="card-body">
                                <div class="specs-grid">
                                    <div>
                                        <div class="spec-item">
                                            <span class="spec-label">Body:</span>
                                            <span class="spec-value">Solid Double Cutaway</span>
                                        </div>
                                        <div class="spec-item">
                                            <span class="spec-label">Neck:</span>
                                            <span class="spec-value">Maple, 24 Jumbo Frets</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="spec-item">
                                            <span class="spec-label">Pickups:</span>
                                            <span class="spec-value">2 Humbuckers + 1 Single
                                                Coil</span>
                                        </div>
                                        <div class="spec-item">
                                            <span class="spec-label">Bridge:</span>
                                            <span class="spec-value">Floyd Rose–Style
                                                Tremolo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="action-buttons">
                            <button class="btn btn-primary">
                                <a href="/product/add-to-cart?product_id=<?= $product['product_id'] ?>" style="text-decoration: none; color: white; "> ADD TO CART </a>
                            </button>
                            <button class="btn btn-secondary"> WISHLIST </button>
                        </div>

                        <!-- Benefits -->
                        <ul class="benefits">
                            <li>Free shipping on orders over $200</li>
                            <li>30-day return policy</li>
                            <li>2-year manufacturer warranty</li>
                        </ul>
                    </div>
                </div>

                <!-- Customer Reviews -->
                <div class="reviews-section">
                    <h2 class="reviews-header">Customer Reviews</h2>

                    <!-- Add Review Form -->
                    <div class="add-review">
                        <h3>ADD YOUR REVIEW</h3>

                        <div class="rating-input">
                            <span>Rating:</span>
                            <span class="stars">★★★★★</span>
                        </div>

                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Review title" />
                        </div>

                        <div class="form-group">
                            <textarea
                                class="form-control textarea"
                                placeholder="Review text area"></textarea>
                        </div>

                        <button class="btn btn-primary" style="width: auto">
                            SUBMIT
                        </button>
                    </div>

                    <!-- Reviews List -->
                    <div class="review-item">
                        <div class="review-header">
                            <span class="review-rating">★★★★★</span>
                            <span class="review-author">John Doe</span>
                            <span class="review-date">2 days ago</span>
                        </div>
                        <div class="review-title">Excellent Guitar!</div>
                        <div class="review-text">
                            This guitar has significantly improved my gaming
                            experience...
                        </div>
                    </div>

                    <div class="review-item">
                        <div class="review-header">
                            <span class="review-rating">★★★★★</span>
                            <span class="review-author">John Doe</span>
                            <span class="review-date">2 days ago</span>
                        </div>
                        <div class="review-title">Excellent Guitar!</div>
                        <div class="review-text">
                            This guitar has significantly improved my gaming
                            experience...
                        </div>
                    </div>

                    <div class="review-item">
                        <div class="review-header">
                            <span class="review-rating">★★★★★</span>
                            <span class="review-author">John Doe</span>
                            <span class="review-date">2 days ago</span>
                        </div>
                        <div class="review-title">Excellent Guitar!</div>
                        <div class="review-text">
                            This guitar has significantly improved my gaming
                            experience...
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- footer section -->
    </div>
</body>

</html>