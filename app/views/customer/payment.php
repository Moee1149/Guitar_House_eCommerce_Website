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
                    <form action="/customer/payment/confirmOrder" method="POST">
                        <div class="left-section">
                            <div class="section">
                                <div class="section-title card"> PAYMENT METHOD </div>

                                <div class="payment-method selected">
                                    <input type="radio" id="cash-delivery" name="payment" value="cash_on_delivery" checked />
                                    <div class="payment-content">
                                        <div class="payment-title"> 💵 Cash on Delivery </div>
                                        <div class="payment-description"> Pay when your order is delivered to your address<br />Available for all orders </div>
                                    </div>
                                </div>

                                <div class="payment-method">
                                    <input type="radio" id="credit-card" name="payment" value="esewa" />
                                    <div class="payment-content">
                                        <div class="btn btn-primary e-sewa">
                                            <img src="/public/images/esewa.svg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="confirmation-section">
                                <div class="confirmation-title"> ORDER CONFIRMATION </div>
                                <div class="confirmation-details">
                                    <div class="detail-row">
                                        <span class="detail-label">Customer Information:</span>
                                        <div class="detail-value"> <?= $customer_data['customer_name'] ?><br /> +977 <?= $customer_data['phone'] ?><br /> <?= $customer_data['email'] ?></div>
                                    </div>
                                    <div class="detail-row">
                                        <span class="detail-label">Delivery Address:</span>
                                        <div class="detail-value"><?= $order_data['shipping_street'] ?><br /> <?= $order_data['shipping_city'] ?>, <?= $order_data['shipping_state'] ?></div>
                                    </div>
                                    <div class="detail-row">
                                        <span class="detail-label">Payment Method:</span>
                                        <span class="detail-value"><?= $order_data['payment_type'] ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="button-row">
                                <button type="submit" name="submit" class="btn btn-primary btn-confirm">
                                    CONFIRM ORDER
                                </button>
                            </div>
                    </form>
                </div>

                <?php include VIEW_PATH . '/layout/order-summary.php'; ?>
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