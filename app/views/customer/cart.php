<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Cart</title>
    <link rel="stylesheet" href="/public/css/styles.css" />
    <link rel="stylesheet" href="/public/css/cart-page.css" />
</head>

<body>
    <div class="container">
        <!-- header section -->
        <?php include VIEW_PATH . '/layout/header.php'; ?>

        <!-- main section -->
        <main class="main-container">
            <div class="content-container">
                <!-- cart section -->
                <div class="cart-section">
                    <div class="cart-items">
                        <!-- Cart Item 1 -->
                        <div class="cart-item">
                            <div class="item-image">
                                <img src="/public/images/products/fp1.png" alt="" />
                            </div>
                            <div class="item-details">
                                <h3 class="item-name">
                                    Ibanez GRX40 RG Gio Series Maple Neck 6
                                    String Electric Guitar
                                </h3>
                                <p class="item-description">
                                    High-performance electric guitar
                                </p>
                                <p class="item-price">Rs 18,789.99</p>
                            </div>
                            <div class="item-controls">
                                <div class="quantity-controls">
                                    <button
                                        class="btn btn-primary qty-btn decrease">
                                        -
                                    </button>
                                    <span class="quantity">1</span>
                                    <button
                                        class="btn btn-primary qty-btn increase">
                                        +
                                    </button>
                                </div>
                                <button class="remove-btn">×</button>
                            </div>
                        </div>

                        <!-- Cart Item 2 -->
                        <div class="cart-item">
                            <div class="item-image">
                                <img src="/public/images/products/p1.jpeg" alt="" />
                            </div>
                            <div class="item-details">
                                <h3 class="item-name">
                                    Fender Squier Classic Vibe '60s
                                    Stratocaster Electric Guitar
                                </h3>
                                <p class="item-description"></p>
                                <p class="item-price">Rs 12,853.93</p>
                            </div>
                            <div class="item-controls">
                                <div class="quantity-controls">
                                    <button
                                        class="btn btn-primary qty-btn decrease">
                                        -
                                    </button>
                                    <span class="quantity">2</span>
                                    <button
                                        class="btn btn-primary qty-btn increase">
                                        +
                                    </button>
                                </div>
                                <button class="remove-btn">×</button>
                            </div>
                        </div>

                        <!-- Cart Item 3 -->
                        <div class="cart-item">
                            <div class="item-image">
                                <img src="/public/images/products/p3.jpeg" alt="" />
                            </div>
                            <div class="item-details">
                                <h3 class="item-name">
                                    Fender Squier Sonic Stratocaster
                                    Electric Guitar
                                </h3>
                                <p class="item-description">
                                    Most Popular eletric guitar
                                </p>
                                <p class="item-price">Rs 44,369.99</p>
                            </div>
                            <div class="item-controls">
                                <div class="quantity-controls">
                                    <button
                                        class="btn btn-primary qty-btn decrease">
                                        -
                                    </button>
                                    <span class="quantity">1</span>
                                    <button
                                        class="btn btn-primary qty-btn increase">
                                        +
                                    </button>
                                </div>
                                <button class="remove-btn">×</button>
                            </div>
                        </div>
                    </div>

                    <div class="cart-actions">
                        <button
                            class="btn btn-primary continue-shopping-btn">
                            CONTINUE SHOPPING
                        </button>
                        <button class="btn btn-outline clear-cart-btn">
                            CLEAR CART
                        </button>
                    </div>
                </div>

                <!-- order summary section -->
                <div class="order-summary">
                    <h2 class="summary-title">ORDER SUMMARY</h2>

                    <div class="summary-details">
                        <div class="summary-row">
                            <span class="summary-label">Subtotal (4 items)</span>
                            <span class="summary-value">Rs 1,149.96</span>
                        </div>
                        <div class="summary-row">
                            <span class="summary-label">Shipping</span>
                            <span class="summary-value">Free</span>
                        </div>
                        <div class="summary-row">
                            <span class="summary-label">Tax</span>
                            <span class="summary-value">Rs 91.99</span>
                        </div>
                        <div class="summary-row total">
                            <span class="summary-label">Total</span>
                            <span class="summary-value">Rs 1,241.95</span>
                        </div>
                    </div>

                    <button class="btn btn-primary checkout-btn">
                        <a
                            href="/customer/checkout"
                            style="text-decoration: none; color: #fff">PROCEED TO CHECKOUT</a>
                    </button>

                    <div class="secure-checkout">
                        <p class="secure-text">Secure checkout with:</p>
                        <div class="payment-icons">
                            <div class="btn btn-primary e-sewa">
                                <img src="/public/images/esewa.svg" alt="" />
                            </div>
                            <div class="btn btn-primary cash-on-delivery">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-banknote-icon lucide-banknote">
                                    <rect
                                        width="20"
                                        height="12"
                                        x="2"
                                        y="6"
                                        rx="2" />
                                    <circle cx="12" cy="12" r="2" />
                                    <path d="M6 12h.01M18 12h.01" />
                                </svg>
                                Cash on Delivery
                            </div>
                        </div>
                    </div>

                    <div class="policy-info">
                        <div class="policy-item">
                            <span class="checkmark">✓</span>
                            <span>Free shipping on orders over $200</span>
                        </div>
                        <div class="policy-item">
                            <span class="checkmark">✓</span>
                            <span>30-day return policy</span>
                        </div>
                    </div>
                </div>
                <!-- buttons -->
            </div>
        </main>

        <!-- footer section -->
        <?php include VIEW_PATH . '/layout/footer.php'; ?>
    </div>
</body>

</html>