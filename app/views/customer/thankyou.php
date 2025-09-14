<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Thank You</title>
    <link rel="stylesheet" href="/public/css/styles.css" />
    <link rel="stylesheet" href="/public/css/thank-you-page.css" />
    <link rel="stylesheet" href="/public/css/check-out-page.css" />
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
                    <p> Your order has been successfully placed and confirmed </p>
                </div>

                <!-- Order Confirmation Card -->
                <div class="card">
                    <div class="card-header">ORDER CONFIRMATION</div>
                    <div class="card-body">
                        <div class="order-details">
                            <div class="detail-item">
                                <div class="detail-label">Order ID:</div>
                                <div class="detail-value"><?= $order_data['order_id']; ?></div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Order Date:</div>
                                <div class="detail-value"> <?= $order_data['order_date']; ?></div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label"> Total Amount: </div>
                                <div class="detail-value"><?= $order_data['total_amount']; ?></div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label"> Payment Method: </div>
                                <div class="detail-value"><?= $order_data['payment_type']; ?></div>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Delivery Address:</span>
                                <div class="detail-value"><?= $order_data['shipping_street'] ?><br /> <?= $order_data['shipping_city'] ?>, <?= $order_data['shipping_state'] ?></div>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Customer Information:</span>
                                <div class="detail-value"> <?= $customer_data['customer_name'] ?><br /> +977 <?= $customer_data['phone'] ?><br /> <?= $customer_data['email'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary Card -->
                <?php include VIEW_PATH . '/layout/order-summary.php'; ?>

                <!-- Action Buttons -->
                <div class="buttons">
                    <a href="/customer/dashboard" class="btn btn-outline">Customer Profile</a>
                    <a href="/product" style="text-decoration: none; color: #fff" class="btn btn-primary">CONTINUE SHOPPING</a>
                </div>
            </div>
        </main>
    </div>
</body>

</html>