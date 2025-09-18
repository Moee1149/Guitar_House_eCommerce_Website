<div class="order-summary">
    <div class="summary-title">ORDER SUMMARY</div>

    <?php foreach ($cartItems as $cartItem): ?>
        <div class="order-item">
            <div class="item-image">
                <img src="<?= $cartItem['image'] ?>" alt="<?= $cartItem['product_name'] ?>" />
            </div>
            <div class="item-details">
                <div class="item-name"><?= $cartItem['product_name'] ?></div>
                <div class="item-qty">Qty: <?= $cartItem['quantity'] ?></div>
            </div>
            <div class="item-price">$ <?= $cartItem['price'] * $cartItem['quantity'] ?></div>
        </div>
    <?php endforeach ?>

    <div class="summary-calculations">
        <div class="summary-row">
            <span>Subtotal</span>
            <span>$
                <?php
                $subtotal = 0;
                foreach ($cartItems as $item) {
                    $subtotal += $item['price'] * $item['quantity'];
                }
                echo number_format($subtotal, 2);
                ?></span>
        </div>
        <div class="summary-row">
            <span>Shipping</span>
            <span>Free</span>
        </div>
        <div class="summary-row total">
            <span>Total</span>
            <span>$ <?= number_format($subtotal, 2) ?></span>
        </div>
    </div>

    <div class="summary-features">
        <div>Secure checkout</div>
        <div>30-day return policy</div>
        <div>2-year warranty included</div>
    </div>
</div>