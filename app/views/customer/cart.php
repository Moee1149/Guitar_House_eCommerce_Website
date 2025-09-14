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
            <?php echo isset($_SESSION['msg']) ? "<p class='msg-box'>" . $_SESSION['msg'] . "</p>" : '';  ?>
            <div class="content-container">
                <!-- cart section -->
                <div class="cart-section">
                    <?php if (empty($cartItems)): ?>
                        <p class="msg-box">Your cart is empty.</p>
                    <?php else: ?>
                        <div class="cart-items">
                            <!-- Cart Item 1 -->
                            <?php foreach ($cartItems as $cartItem): ?>
                                <div class="cart-item">
                                    <div class="item-image">
                                        <img src="<?= $cartItem['image'] ?>" alt="" />
                                    </div>
                                    <div class="item-details">
                                        <h3 class="item-name"><?= $cartItem['product_name'] ?></h3>
                                        <p class="item-price">Rs <?= $cartItem['price'] ?></p>
                                    </div>
                                    <div class="item-controls">
                                        <div class="quantity-controls">
                                            <button class="btn btn-primary qty-btn decrease"> - </button>
                                            <span class="quantity"><?= $cartItem['quantity'] ?></span>
                                            <button class="btn btn-primary qty-btn increase"> + </button>
                                        </div>
                                        <a href="/customer/cart?delete=true&cart_id=<?= $cartItem['cart_id'] ?>" style="text-decoration: none;" class="remove-btn">×</a>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    <?php endif; ?>
                    <div class="cart-actions">
                        <a href="/product" class="btn btn-primary continue-shopping-btn">CONTINUE SHOPPING</a>
                        <?php if (!empty($cartItems)): ?>
                            <a href="/customer/cart?clear=true?>" class="btn btn-outline clear-cart-btn">CLEAR CART</a>
                        <?php endif; ?>
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
                        <div class="summary-row total">
                            <span class="summary-label">Total</span>
                            <span class="summary-value">Rs 1,241.95</span>
                        </div>
                    </div>

                    <?php if (!empty($cartItems)): ?>
                        <button class="btn btn-primary checkout-btn">
                            <a href="/customer/checkout" style="text-decoration: none; color: #fff">PROCEED TO CHECKOUT</a>
                        </button>
                    <?php endif; ?>

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
            </div>
        </main>

        <!-- footer section -->
        <?php include VIEW_PATH . '/layout/footer.php'; ?>
    </div>
</body>

</html>
<?php unset($_SESSION['msg']);
