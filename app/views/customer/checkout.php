<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Checkout page</title>
    <link rel="stylesheet" href="/public/css/styles.css" />
    <link rel="stylesheet" href="/public/css/check-out-page.css" />
</head>

<body>
    <div class="container">
        <!-- header section -->
        <?php include VIEW_PATH . '/layout/header.php'; ?>

        <!-- main section -->
        <main class="main-container">
            <div class="checkout-container">
                <div class="progress-steps">
                    <div class="step completed">
                        <div class="step-number">1</div>
                        <span>Cart</span>
                    </div>
                    <div class="step-connector"></div>
                    <div class="step active">
                        <div class="step-number">2</div>
                        <span>Checkout</span>
                    </div>
                    <div class="step-connector"></div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <span>Payment</span>
                    </div>
                </div>
                <div class="checkout-title"></div>

                <div class="login-status">
                    You are logged in as aayu.tyape@email.com
                </div>

                <div class="main-content">
                    <div class="left-section">
                        <div class="section">
                            <div class="section-title delivery">
                                DELIVERY ADDRESS
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstName">FIRST NAME</label>
                                    <input
                                        type="text"
                                        id="firstName"
                                        name="firstName" />
                                </div>
                                <div class="form-group">
                                    <label for="lastName">LAST NAME</label>
                                    <input
                                        type="text"
                                        id="lastName"
                                        name="lastName" />
                                </div>
                            </div>

                            <div
                                class="form-group"
                                style="margin-top: -5px">
                                <label for="address">STREET ADDRESS</label>
                                <input
                                    type="text"
                                    id="address"
                                    name="address" />
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="city">CITY</label>
                                    <input
                                        type="text"
                                        id="city"
                                        name="city" />
                                </div>
                                <div class="form-group">
                                    <label for="zipCode">ZIP CODE</label>
                                    <input
                                        type="text"
                                        id="zipCode"
                                        name="zipCode" />
                                </div>
                            </div>
                        </div>

                        <div class="section">
                            <div class="section-title truck">
                                DELIVERY OPTIONS
                            </div>

                            <div class="delivery-options">
                                <div class="delivery-option selected">
                                    <div class="delivery-content">
                                        <div class="delivery-title">
                                            <input
                                                type="radio"
                                                id="home-delivery"
                                                name="delivery"
                                                value="home"
                                                checked />
                                            Home Delivery
                                        </div>
                                        <div class="delivery-description">
                                            Delivered to your address (3-5
                                            business days)<br />Free
                                            shipping
                                        </div>
                                    </div>
                                </div>

                                <div class="delivery-option">
                                    <div class="delivery-content">
                                        <div class="delivery-title">
                                            <input
                                                type="radio"
                                                id="store-pickup"
                                                name="delivery"
                                                value="pickup" />
                                            Store Collection
                                        </div>
                                        <div class="delivery-description">
                                            Collect from our store
                                            (Available next day)<br />12
                                            Tinkune, Kathmandu, Bagmati
                                            10001
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="button-row">
                            <button
                                type="button"
                                class="btn btn-outline btn-back">
                                <a
                                    href="/customer/cart"
                                    style="
                                            text-decoration: none;
                                            color: #4a90e2;
                                        ">Back to cart</a>
                            </button>
                            <button
                                type="button"
                                class="btn btn-primary btn-proceed">
                                <a
                                    href="/customer/payment"
                                    style="
                                            text-decoration: none;
                                            color: #fff;
                                        ">PROCEED TO PAYMENT</a>
                            </button>
                        </div>
                    </div>

                    <?php include VIEW_PATH . '/layout/order-summary.php'; ?>
                </div>
            </div>
        </main>

        <!-- footer section -->
        <?php include VIEW_PATH . '/layout/footer.php'; ?>

    </div>
    <script>
        // Handle delivery option selection
        document
            .querySelectorAll('input[name="delivery"]')
            .forEach((radio) => {
                radio.addEventListener("change", function() {
                    document
                        .querySelectorAll(".delivery-option")
                        .forEach((option) => {
                            option.classList.remove("selected");
                        });
                    this.closest(".delivery-option").classList.add(
                        "selected",
                    );
                });
            });
    </script>
</body>

</html>