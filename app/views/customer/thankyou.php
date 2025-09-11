<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Thank You</title>
    <link rel="stylesheet" href="/public/css/styles.css" />
    <link rel="stylesheet" href="/public/css/thank-you-page.css" />
</head>

<body>
    <div class="container">
        <!-- header section -->
        <?php include VIEW_PATH . '/layout/header.php'; ?>

        <!-- main section -->
        <main class="main-container">
            <div class="content-container">
                <!-- Header -->
                <div class="content-header">
                    <div class="checkmark"></div>
                    <h1>THANK YOU FOR YOUR ORDER!</h1>
                    <p>
                        Your order has been successfully placed and
                        confirmed
                    </p>
                </div>

                <!-- Order Confirmation Card -->
                <div class="card">
                    <div class="card-header">ORDER CONFIRMATION</div>
                    <div class="card-body">
                        <div class="order-details">
                            <div class="detail-item">
                                <div class="detail-label">Order ID:</div>
                                <div class="detail-value">
                                    #RS-2024-001234
                                </div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Order Date:</div>
                                <div class="detail-value">
                                    August 21, 2025
                                </div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">
                                    Total Amount:
                                </div>
                                <div class="detail-value">Rs 50,456.87</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">
                                    Payment Method:
                                </div>
                                <div class="detail-value">
                                    Cash on Delivery
                                </div>
                            </div>
                            <div class="detail-item delivery-address">
                                <div class="detail-label">
                                    Delivery Address:
                                </div>
                                <div class="detail-value">
                                    Reecha Dangi<br />
                                    12 Main Street<br />
                                    Jhapa, Bagmati 10001
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary Card -->
                <div class="card">
                    <div class="card-header">ORDER SUMMARY</div>
                    <div class="card-body">
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

                        <div class="order-totals">
                            <div class="total-row">
                                <span>Subtotal</span>
                                <span>Rs 48,149.96</span>
                            </div>
                            <div class="total-row">
                                <span>Shipping:</span>
                                <span>Free</span>
                            </div>
                            <div class="total-row">
                                <span>Tax</span>
                                <span>Rs 191.99</span>
                            </div>
                            <div class="total-row final">
                                <span>Total</span>
                                <span>Rs 50,241.95</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="buttons">
                    <a
                        href="/customer/dashboard"
                        class="btn btn-outline">Customer Profile</a>
                    <a
                        href="/product"
                        style="text-decoration: none; color: #fff"
                        class="btn btn-primary">CONTINUE SHOPPING</a>
                </div>
            </div>
        </main>
    </div>
</body>

</html>