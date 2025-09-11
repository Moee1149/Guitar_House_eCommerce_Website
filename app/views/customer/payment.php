<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Payment</title>
    <link rel="stylesheet" href="/public/css/styles.css" />
    <link rel="stylesheet" href="/public/css/payment-page.css" />
</head>

<body>
    <div class="container">
        <!-- header section -->
        <?php include VIEW_PATH . '/layout/header.php'; ?>

        <!-- main section -->
        <main class="main-container">
            <div class="payment-container">
                <div class="progress-steps">
                    <div class="step completed">
                        <div class="step-number">1</div>
                        <span>Cart</span>
                    </div>
                    <div class="step-connector"></div>
                    <div class="step completed">
                        <div class="step-number">2</div>
                        <span>Checkout</span>
                    </div>
                    <div class="step-connector"></div>
                    <div class="step active">
                        <div class="step-number">3</div>
                        <span>Payment</span>
                    </div>
                </div>

                <div class="main-content">
                    <div class="left-section">
                        <div class="section">
                            <div class="section-title card">
                                PAYMENT METHOD
                            </div>

                            <div class="payment-method selected">
                                <input
                                    type="radio"
                                    id="cash-delivery"
                                    name="payment"
                                    value="cash"
                                    checked />
                                <div class="payment-content">
                                    <div class="payment-title">
                                        💵 Cash on Delivery
                                    </div>
                                    <div class="payment-description">
                                        Pay when your order is delivered to
                                        your address<br />Available for all
                                        orders
                                    </div>
                                </div>
                            </div>

                            <div class="payment-method">
                                <input
                                    type="radio"
                                    id="credit-card"
                                    name="payment"
                                    value="card" />
                                <div class="payment-content">
                                    <div class="btn btn-primary e-sewa">
                                        <img
                                            src="/public/images/esewa.svg"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="confirmation-section">
                            <div class="confirmation-title">
                                ORDER CONFIRMATION
                            </div>
                            <div class="confirmation-details">
                                <div class="detail-row">
                                    <span class="detail-label">Delivery Address:</span>
                                    <div class="detail-value">
                                        Reecha Dangi<br />
                                        12 Tyape Street<br />
                                        Jhapa, 10001
                                    </div>
                                </div>
                                <div class="detail-row">
                                    <span class="detail-label">Delivery Method:</span>
                                    <span class="detail-value">Home Delivery (3-5 business
                                        days)</span>
                                </div>
                                <div class="detail-row">
                                    <span class="detail-label">Payment Method:</span>
                                    <span class="detail-value">Cash on Delivery</span>
                                </div>
                            </div>
                        </div>

                        <div class="button-row">
                            <button
                                type="button"
                                class="btn btn-outline btn-back">
                                <a
                                    href="/customer/checkout"
                                    style="
                                            text-decoration: none;
                                            color: #4a90e2;
                                        ">BACK TO CHECKOUT</a>
                            </button>
                            <button
                                type="button"
                                class="btn btn-primary btn-confirm">
                                <a
                                    href="/customer/thankyou"
                                    style="
                                            text-decoration: none;
                                            color: #fff;
                                        ">CONFIRM ORDER</a>
                            </button>
                        </div>
                    </div>

                    <div class="order-summary">
                        <div class="summary-title">FINAL ORDER SUMMARY</div>

                        <div class="order-item">
                            <div class="item-image">
                                <img src="/public/images/products/p3.jpeg" alt="" />
                            </div>
                            <div class="item-details">
                                <div class="item-name">
                                    Fender Squier Sonic Stratocaster
                                    Electric Guitar
                                </div>
                                <div class="item-qty">Qty: 1</div>
                            </div>
                            <div class="item-price">Rs 23,399.00</div>
                        </div>

                        <div class="order-item">
                            <div class="item-image">
                                <img src="/public/images/products/p5.png" alt="" />
                            </div>
                            <div class="item-details">
                                <div class="item-name">
                                    Vault ST1 Premium Electric Guitar
                                </div>
                                <div class="item-qty">Qty: 2</div>
                            </div>
                            <div class="item-price">Rs 14,234.98</div>
                        </div>

                        <div class="order-item">
                            <div class="item-image">
                                <img src="/public/images/products/p1.jpeg" alt="" />
                            </div>
                            <div class="item-details">
                                <div class="item-name">
                                    Vault RG1 Soloist Premium Electric
                                    Guitar
                                </div>
                                <div class="item-qty">Qty: 1</div>
                            </div>
                            <div class="item-price">Rs 13,449.99</div>
                        </div>

                        <div class="summary-calculations">
                            <div class="summary-row">
                                <span>Subtotal</span>
                                <span>Rs 48,149.96</span>
                            </div>
                            <div class="summary-row">
                                <span>Shipping</span>
                                <span>Free</span>
                            </div>
                            <div class="summary-row">
                                <span>Tax</span>
                                <span>Rs 191.99</span>
                            </div>
                            <div class="summary-row total">
                                <span>Total</span>
                                <span>Rs 50,241.95</span>
                            </div>
                        </div>

                        <div class="payment-amount">
                            Amount to pay on delivery: Rs 50,241.95
                        </div>

                        <div class="summary-features">
                            <div>Secure order processing</div>
                            <div>30-day return policy</div>
                            <div>2-year warranty included</div>
                            <div>Order tracking available</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- footer section -->
        <?php include VIEW_PATH . '/layout/footer.php'; ?>
    </div>

    <script>
        // Handle payment method selection
        document
            .querySelectorAll('input[name="payment"]')
            .forEach((radio) => {
                radio.addEventListener("change", function() {
                    if (!this.disabled) {
                        document
                            .querySelectorAll(".payment-method")
                            .forEach((method) => {
                                method.classList.remove("selected");
                            });
                        this.closest(".payment-method").classList.add(
                            "selected",
                        );
                    }
                });
            });
    </script>
</body>

</html>