<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Management - Order Detail</title>
    <link rel="stylesheet" href="/public/css/admin/styles.css" />
    <link rel="stylesheet" href="/public/css/admin/sidebar.css" />
    <style>
        .content-container {
            padding: 20px;
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

        .btn-primary {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            padding: 0px 20px;
            gap: 20px;
        }

        .order-sidebar {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 20px;
        }

        .card-header {
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .card-header h2 {
            font-size: 18px;
            color: #333;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
            color: #333;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #666;
            flex: 1;
        }

        .info-value {
            flex: 2;
            text-align: right;
        }

        .status {
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
            text-align: center;
            display: inline-block;
        }

        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }

        .status-confirmed {
            background-color: #d4edda;
            color: #155724;
        }

        .status-shipped {
            background-color: #cce7ff;
            color: #004085;
        }

        .status-delivered {
            background-color: #d1ecf1;
            color: #0c5460;
        }

        .status-cancelled {
            background-color: #f8d7da;
            color: #721c24;
        }

        .items-table {
            width: 100%;
            border-collapse: collapse;
        }

        .items-table th {
            background-color: #f8f9fa;
            padding: 12px;
            text-align: left;
            border-bottom: 2px solid #ddd;
            font-weight: 600;
            color: #333;
        }

        .items-table td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            color: #333;
        }

        .items-table tr:last-child td {
            border-bottom: none;
        }

        .product-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .product-image {
            width: 50px;
            height: 50px;
            background-color: #f0f0f0;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #666;
        }

        .product-details h4 {
            font-size: 14px;
            margin-bottom: 2px;
        }

        .product-details p {
            font-size: 12px;
            color: #666;
        }

        .total-section {
            border-top: 2px solid #ddd;
            padding-top: 15px;
            margin-top: 15px;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
            color: #333;
        }

        .total-row.final {
            font-weight: 600;
            font-size: 16px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
            margin-top: 10px;
        }

        .timeline {
            position: relative;
            padding-left: 30px;
        }

        .timeline::before {
            content: "";
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: #ddd;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 20px;
        }

        .timeline-item::before {
            content: "";
            position: absolute;
            left: -22px;
            top: 5px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #007bff;
            border: 2px solid #fff;
            box-shadow: 0 0 0 2px #007bff;
        }

        .timeline-item.completed::before {
            background-color: #28a745;
            box-shadow: 0 0 0 2px #28a745;
        }

        .timeline-content {
            background-color: #f8f9fa;
            padding: 10px 15px;
            border-radius: 4px;
            border-left: 3px solid #007bff;
        }

        .timeline-item.completed .timeline-content {
            border-left-color: #28a745;
        }

        .timeline-date {
            font-size: 12px;
            color: #666;
            margin-bottom: 5px;
        }

        .timeline-title {
            font-weight: 600;
            margin-bottom: 3px;
        }

        .timeline-desc {
            font-size: 14px;
            color: #666;
        }

        .notes-section {
            margin-top: 15px;
        }

        .note-item {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
            border-left: 3px solid #007bff;
        }

        .note-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
            color: #333;
        }

        .note-author {
            font-weight: 600;
            font-size: 12px;
        }

        .note-date {
            font-size: 12px;
            color: #666;
        }

        .note-text {
            font-size: 14px;
            color: #333;
        }

        @media (max-width: 768px) {
            .content-grid {
                grid-template-columns: 1fr;
            }

            .header {
                flex-direction: column;
                align-items: stretch;
            }

            .header-actions {
                justify-content: stretch;
            }

            .header-actions .btn {
                flex: 1;
                text-align: center;
            }

            .info-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
            }

            .info-value {
                text-align: left;
            }
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
                            <h1>Order Detail - #ORD-2024-001</h1>
                            <div class="breadcrumb">
                                <a href="admin-dashboard.html">Dashboard</a> >
                                <a href="./order-mgmt-page.html">Order Management</a> >
                                <a href="./order-list-page.html">Order List</a> > Order Detail
                            </div>
                        </div>
                        <div class="header-actions">
                            <a href="/admin/order-mgmt/order-list" class="btn">← Back to List</a>
                            <a href="/admin/order-mgmt/order-edit" class="btn">Edit Order</a>
                            <a href="#" class="btn">Print</a>
                            <a href="#" class="btn btn-success">Dispatch</a>
                        </div>
                    </div>

                    <div class="content-grid">
                        <!-- Main Content -->
                        <div class="main-content">
                            <!-- Order Information -->
                            <div class="card">
                                <div class="card-header">
                                    <h2>Order Information</h2>
                                </div>
                                <div class="info-row">
                                    <span class="info-label">Order ID:</span>
                                    <span class="info-value">#ORD-2024-001</span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label">Order Date:</span>
                                    <span class="info-value">August 20, 2024</span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label">Status:</span>
                                    <span class="info-value"><span
                                            class="status status-confirmed">Confirmed</span></span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label">Payment Method:</span>
                                    <span class="info-value">Credit Card (**** 4567)</span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label">Payment Status:</span>
                                    <span class="info-value">Paid</span>
                                </div>
                            </div>

                            <!-- Customer Information -->
                            <div class="card">
                                <div class="card-header">
                                    <h2>Customer Information</h2>
                                </div>
                                <div class="info-row">
                                    <span class="info-label">Customer Name:</span>
                                    <span class="info-value">John Smith</span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label">Email:</span>
                                    <span class="info-value">john@email.com</span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label">Phone:</span>
                                    <span class="info-value">+1 (555) 123-4567</span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label">Customer Type:</span>
                                    <span class="info-value">Regular Customer</span>
                                </div>
                            </div>

                            <!-- Shipping Information -->
                            <div class="card">
                                <div class="card-header">
                                    <h2>Shipping Information</h2>
                                </div>
                                <div class="info-row">
                                    <span class="info-label">Shipping Address:</span>
                                    <span class="info-value"> 123 Main Street<br /> Apartment 4B<br /> New York, NY 10001<br /> United States </span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label">Billing Address:</span>
                                    <span class="info-value">Same as shipping address</span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label">Shipping Method:</span>
                                    <span class="info-value">Standard Shipping (3-5 days)</span>
                                </div>
                            </div>

                            <!-- Order Items -->
                            <div class="card">
                                <div class="card-header">
                                    <h2>Order Items</h2>
                                </div>
                                <table class="items-table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>SKU</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-info">
                                                    <div class="product-image"> IMG </div>
                                                    <div
                                                        class="product-details">
                                                        <h4> Wireless Headphones </h4>
                                                        <p> Black, Noise Canceling </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>WH-001-BLK</td>
                                            <td>$79.99</td>
                                            <td>1</td>
                                            <td>$79.99</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="product-info">
                                                    <div class="product-image"> IMG </div>
                                                    <div class="product-details">
                                                        <h4>Phone Case</h4>
                                                        <p> Clear, iPhone 14 Pro </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>PC-014-CLR</td>
                                            <td>$19.99</td>
                                            <td>2</td>
                                            <td>$39.98</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="product-info">
                                                    <div class="product-image"> IMG </div>
                                                    <div class="product-details">
                                                        <h4>USB Cable</h4>
                                                        <p> USB-C to Lightning, 6ft </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>USB-CL-6FT</td>
                                            <td>$12.99</td>
                                            <td>1</td>
                                            <td>$12.99</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="total-section">
                                    <div class="total-row">
                                        <span>Subtotal:</span>
                                        <span>$132.96</span>
                                    </div>
                                    <div class="total-row">
                                        <span>Shipping:</span>
                                        <span>$8.99</span>
                                    </div>
                                    <div class="total-row">
                                        <span>Tax:</span>
                                        <span>$11.30</span>
                                    </div>
                                    <div class="total-row">
                                        <span>Discount:</span>
                                        <span>-$7.26</span>
                                    </div>
                                    <div class="total-row final">
                                        <span>Total:</span>
                                        <span>$145.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="order-sidebar">
                            <!-- Order Timeline -->
                            <div class="card">
                                <div class="card-header">
                                    <h2>Order Timeline</h2>
                                </div>
                                <div class="timeline">
                                    <div class="timeline-item completed">
                                        <div class="timeline-content">
                                            <div class="timeline-date">
                                                Aug 20, 2024 - 2:30 PM
                                            </div>
                                            <div class="timeline-title">
                                                Order Placed
                                            </div>
                                            <div class="timeline-desc">
                                                Order was successfully
                                                placed by customer
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item completed">
                                        <div class="timeline-content">
                                            <div class="timeline-date"> Aug 20, 2024 - 3:15 PM </div>
                                            <div class="timeline-title"> Payment Confirmed </div>
                                            <div class="timeline-desc"> Payment processed successfully </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item completed">
                                        <div class="timeline-content">
                                            <div class="timeline-date"> Aug 21, 2024 - 9:00 AM </div>
                                            <div class="timeline-title"> Order Confirmed </div>
                                            <div class="timeline-desc"> Order confirmed and ready for processing </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-content">
                                            <div class="timeline-date"> Pending </div>
                                            <div class="timeline-title"> Order Dispatched </div>
                                            <div class="timeline-desc"> Waiting for dispatch </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-content">
                                            <div class="timeline-date"> Pending </div>
                                            <div class="timeline-title"> Out for Delivery </div>
                                            <div class="timeline-desc"> Order out for delivery </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-content">
                                            <div class="timeline-date"> Pending </div>
                                            <div class="timeline-title"> Delivered </div>
                                            <div class="timeline-desc"> Order delivered to customer </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Order Notes -->
                            <div class="card">
                                <div class="card-header">
                                    <h2>Order Notes</h2>
                                </div>
                                <div class="notes-section">
                                    <div class="note-item">
                                        <div class="note-header">
                                            <span class="note-author">Admin</span>
                                            <span class="note-date">Aug 21, 2024</span>
                                        </div>
                                        <div class="note-text"> Customer requested expedited processing. Priority handling applied. </div>
                                    </div>
                                    <div class="note-item">
                                        <div class="note-header">
                                            <span class="note-author">System</span>
                                            <span class="note-date">Aug 20, 2024</span>
                                        </div>
                                        <div class="note-text"> Discount code "SUMMER10" applied successfully. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>