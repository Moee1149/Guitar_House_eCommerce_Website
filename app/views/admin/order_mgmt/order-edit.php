<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Management - Edit Order</title>
    <link rel="stylesheet" href="/public/css/admin/styles.css" />
    <link rel="stylesheet" href="/public/css/admin/sidebar.css" />
    <link rel="stylesheet" href="/public/css/admin/admin-user-mgmt.css" />
    <style>
        .content-container {
            padding: 20px;
            overflow-y: auto;
        }

        .content-header {
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .header-left h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .breadcrumb {
            color: #666;
            font-size: 14px;
        }

        .breadcrumb a {
            color: #666;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .header-actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            color: #333;
            display: inline-block;
        }

        .btn:hover {
            background-color: #f0f0f0;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .card {
            background-color: var(--bg-secondary);
            border: none;
            padding: 20px;
        }

        .card-header {
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .card-header h2 {
            font-size: 18px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-row.single {
            grid-template-columns: 1fr;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .product-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .product-image {
            width: 48px;
            height: 48px;
            border-radius: 8px;
            background-color: #64748b;
            object-fit: cover;
            flex-shrink: 0;
        }

        .product-image-placeholder {
            width: 48px;
            height: 48px;
            border-radius: 8px;
            background-color: #64748b;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #cbd5e1;
            font-size: 12px;
            flex-shrink: 0;
        }

        .product-details h3 {
            font-size: 14px;
            font-weight: 500;
            color: #f1f5f9;
            margin-bottom: 2px;
        }

        .product-id {
            font-size: 12px;
            color: #94a3b8;
        }

        .alert {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            color: #856404;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .alert-icon {
            font-weight: 600;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- sidebar section -->
        <?php include VIEW_PATH . '/layout/admin-sidebar.php'; ?>
        <div class="main-content-container">
            <!-- header section -->
            <?php include VIEW_PATH . '/layout/admin-header.php'; ?>
            <div style="overflow-y: auto">
                <div class="content-container">
                    <!-- Header -->
                    <div class="content-header">
                        <div class="header-left">
                            <h1>Edit Order - #ORD-<?php echo htmlspecialchars($order_id); ?></h1>
                            <div class="breadcrumb">
                                <a href="#">Dashboard</a> >
                                <a href="#">Order Management</a> >
                                <a href="#">Order List</a> >
                                <a href="#">Order Detail</a> > Edit Order
                            </div>
                        </div>
                        <div class="header-actions">
                            <a href="/admin/order-mgmt/order-list" class="btn">← Back to List</a>
                        </div>
                    </div>

                    <!-- Alert -->
                    <div class="alert">
                        <span class="alert-icon">⚠</span>
                        <strong>Note:</strong> Changes made to confirmed orders may require customer notification and approval.
                    </div>

                    <div class="form-container">
                        <!-- Order Information -->
                        <div class="card">
                            <div class="card-header">
                                <h2>Order Information</h2>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="order-id">Order ID</label>
                                    <input type="text" id="order-id" value="<?php echo htmlspecialchars($order_id); ?>" readonly />
                                </div>
                                <div class="form-group">
                                    <label for="order-date">Order Date</label>
                                    <input type="date" id="order-date" value="<?php echo htmlspecialchars($order_date); ?>" readonly />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="order-status">Order Status</label>
                                    <select id="order-status">
                                        <option value="pending" <?php echo ($status == 'pending') ? 'selected' : ''; ?>> Pending </option>
                                        <option value="confirmed" <?php echo ($status == 'confirmed') ? 'selected' : ''; ?>> Confirmed </option>
                                        <option value="shipped" <?php echo ($status == 'shipped') ? 'selected' : ''; ?>> Shipped </option>
                                        <option value="delivered" <?php echo ($status == 'delivered') ? 'selected' : ''; ?>> Delivered </option>
                                        <option value="cancelled" <?php echo ($status == 'cancelled') ? 'selected' : ''; ?>> Cancelled </option>
                                    </select>
                                </div>
                                <!-- Payment status/type are not in your model, so keep hardcoded or add if available -->
                                <div class="form-group">
                                    <label for="payment-status">Payment Status</label>
                                    <select id="payment-status">
                                        <option value="pending"> Pending </option>
                                        <option value="paid" selected> Paid </option>
                                        <option value="failed"> Failed </option>
                                        <option value="refunded"> Refunded </option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="payment-type">Payment Type</label>
                                        <select id="payment-type">
                                            <option value="e-sewa"> Cash on Delivery </option>
                                            <option value="cod" selected> E-sewa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Customer Information -->
                        <div class="card">
                            <div class="card-header">
                                <h2>Customer Information</h2>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="customer-name">Customer Name</label>
                                    <input type="text" id="customer-name" value="<?php echo htmlspecialchars($customer_name); ?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="customer-email">Email</label>
                                    <input type="email" id="customer-email" value="<?php echo htmlspecialchars($customer_email); ?>" disabled />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="customer-phone">Phone</label>
                                    <input type="tel" id="customer-phone" value="<?php echo htmlspecialchars($customer_phone); ?>" disabled />
                                </div>
                            </div>
                        </div>

                        <!-- Shipping Information -->
                        <div class="card">
                            <div class="card-header">
                                <h2>Shipping Information</h2>
                            </div>
                            <div class="form-row single">
                                <div class="form-group">
                                    <label for="shipping-address">Shipping Address</label>
                                    <textarea id="shipping-address" disabled><?php
                                                                                echo htmlspecialchars(
                                                                                    trim($shipping_street . ' ' . $shipping_city . ' ' . $shipping_state)
                                                                                );
                                                                                ?></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Order Items -->
                        <div class="card">
                            <div class="product_mgmt customer_mgmt">
                                <?php echo isset($_SESSION['msg']) ? "<p class='msg-box'>" . $_SESSION['msg'] . "</p>" : '';  ?>
                                <h1 class="page-title">Order Items</h1>
                                <?php if ($order_items): ?>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php if ($order_items_count > 0): ?>
                                            <tbody>
                                                <?php while ($row = mysqli_fetch_assoc($order_items)): ?>
                                                    <tr>
                                                        <td>
                                                            <div class="product-info">
                                                                <?php if (!empty($row['image'])): ?>
                                                                    <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['product_name']; ?>" class="product-image">
                                                                <?php else: ?>
                                                                    <div class="product-image-placeholder">IMG</div>
                                                                <?php endif; ?>
                                                                <div class="product-details">
                                                                    <h3><?php echo htmlspecialchars($row['product_name']); ?></h3>
                                                                    <div class="product-id">prod<?php echo str_pad($row['product_id'], 3, '0', STR_PAD_LEFT); ?></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo $row['price']; ?></td>
                                                        <td>$<?php echo number_format($row['quantity'], 2); ?></td>
                                                        <td><?php echo $row['total_amount']; ?></td>
                                                        <td style="margin-top: 5px;">
                                                            <a href="/admin/order-mgmt/order-edit?order_id=<?php echo $row['product_id']; ?>" title="Delete">Remove</a>
                                                        </td>
                                                    </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                        <?php else: ?>
                                            <tr>
                                                <p class="msg-box">No order items found.</p>
                                            </tr>
                                        <?php endif; ?>
                                    </table>
                                <?php else: ?>
                                    <p class="msg-box">Error getting Order Items</p>
                                <?php endif; ?>
                                <div>
                                    <table>
                                        <tr>
                                            <td>Subtotal</th>
                                            <td style="text-align: right;">$<?php echo htmlspecialchars($total_amount); ?></td>
                                        </tr>
                                        <td>Total</th>
                                        <td style="text-align: right;">$<?php echo htmlspecialchars($total_amount); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Form Actions -->
                    <button class="btn"> Update Order </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>