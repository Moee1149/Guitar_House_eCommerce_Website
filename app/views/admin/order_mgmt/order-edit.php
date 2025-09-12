<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Management - Edit Order</title>
    <link rel="stylesheet" href="/public/css/admin/styles.css" />
    <link rel="stylesheet" href="/public/css/admin/sidebar.css" />
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

        .btn-primary {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #545b62;
        }

        .form-container {
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
            color: #555;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            background-color: #ddd;
            color: #333;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
        }

        .form-group textarea {
            min-height: 80px;
            resize: vertical;
        }

        .status-badge {
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
            text-align: center;
            display: inline-block;
            margin-left: 10px;
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

        .items-section {
            margin-top: 20px;
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

        .items-table input {
            width: 100%;
            padding: 6px 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            background-color: #ccc;
            color: #333;
        }

        .items-table .qty-input {
            width: 60px;
            text-align: center;
        }

        .items-table .price-input {
            width: 80px;
        }

        .remove-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 4px 8px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
        }

        .remove-btn:hover {
            background-color: #c82333;
        }

        .add-item-btn {
            margin-top: 15px;
            background-color: #28a745;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .add-item-btn:hover {
            background-color: #218838;
        }

        .total-section {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 4px;
            margin-top: 20px;
            color: #333;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #ddd;
        }

        .total-row:last-child {
            border-bottom: none;
            font-weight: 600;
            font-size: 16px;
            border-top: 2px solid #ddd;
            padding-top: 15px;
            margin-top: 10px;
        }

        .total-row input {
            width: 100px;
            padding: 4px 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            text-align: right;
            color: #333;
            background-color: #ccc;
        }

        .form-actions {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            position: sticky;
            bottom: 20px;
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

        @media (max-width: 768px) {
            .form-row {
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

            .items-table {
                font-size: 12px;
            }

            .items-table th,
            .items-table td {
                padding: 8px 4px;
            }

            .form-actions {
                position: static;
                margin-top: 20px;
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
                            <h1>Edit Order - #ORD-2024-001</h1>
                            <div class="breadcrumb">
                                <a href="#">Dashboard</a> >
                                <a href="#">Order Management</a> >
                                <a href="#">Order List</a> >
                                <a href="#">Order Detail</a> > Edit Order
                            </div>
                        </div>
                        <div class="header-actions">
                            <a href="/admin/order-mgmt/order-detail" class="btn">← Back to Detail</a>
                            <a href="/admin/order-mgmt/order-list" class="btn" style=" background-color: red; border: 0; color: white; ">Cancel</a>
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
                                    <input type="text" id="order-id" value="#ORD-2024-001" readonly />
                                </div>
                                <div class="form-group">
                                    <label for="order-date">Order Date</label>
                                    <input type="date" id="order-date" value="2024-08-20" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="order-status">Order Status</label>
                                    <select id="order-status">
                                        <option value="pending"> Pending </option>
                                        <option value="confirmed" selected> Confirmed </option>
                                        <option value="shipped"> Shipped </option>
                                        <option value="delivered"> Delivered </option>
                                        <option value="cancelled"> Cancelled </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="payment-status">Payment Status</label>
                                    <select id="payment-status">
                                        <option value="pending"> Pending </option>
                                        <option value="paid" selected> Paid </option>
                                        <option value="failed"> Failed </option>
                                        <option value="refunded"> Refunded </option>
                                    </select>
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
                                    <input type="text" id="customer-name" value="John Smith" />
                                </div>
                                <div class="form-group">
                                    <label for="customer-email">Email</label>
                                    <input type="email" id="customer-email" value="john@email.com" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="customer-phone">Phone</label>
                                    <input type="tel" id="customer-phone" value="+1 (555) 123-4567" />
                                </div>
                                <div class="form-group">
                                    <label for="customer-type">Customer Type</label>
                                    <select id="customer-type">
                                        <option value="regular" selected> Regular Customer </option>
                                        <option value="vip"> VIP Customer </option>
                                        <option value="wholesale"> Wholesale Customer </option>
                                    </select>
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
                                    <textarea id="shipping-address"> 123 Main Street Apartment 4B New York, NY 10001 United States</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="shipping-method">Shipping Method</label>
                                    <select id="shipping-method">
                                        <option value="standard" selected> Standard Shipping (3-5 days) </option>
                                        <option value="express"> Express Shipping (1-2 days) </option>
                                        <option value="overnight"> Overnight Shipping </option>
                                        <option value="pickup"> Store Pickup </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tracking-number">Tracking Number</label>
                                    <input type="text" id="tracking-number" placeholder="Enter tracking number" />
                                </div>
                            </div>
                        </div>

                        <!-- Order Items -->
                        <div class="card">
                            <div class="card-header">
                                <h2>Order Items</h2>
                            </div>
                            <div class="items-section">
                                <table class="items-table">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>SKU</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="text" value="Wireless Headphones" placeholder="Product name" />
                                            </td>
                                            <td>
                                                <input type="text" value="WH-001-BLK" placeholder="SKU" />
                                            </td>
                                            <td>
                                                <input type="number" class="price-input" value="79.99" step="0.01" />
                                            </td>
                                            <td>
                                                <input type="number" class="qty-input" value="1" min="1" />
                                            </td>
                                            <td>$79.99</td>
                                            <td>
                                                <button class="remove-btn"> Remove </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" value="Phone Case" placeholder="Product name" />
                                            </td>
                                            <td>
                                                <input type="text" value="PC-014-CLR" placeholder="SKU" />
                                            </td>
                                            <td>
                                                <input type="number" class="price-input" value="19.99" step="0.01" />
                                            </td>
                                            <td>
                                                <input type="number" class="qty-input" value="2" min="1" />
                                            </td>
                                            <td>$39.98</td>
                                            <td>
                                                <button class="remove-btn"> Remove </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" value="USB Cable" placeholder="Product name" />
                                            </td>
                                            <td>
                                                <input type="text" value="USB-CL-6FT" placeholder="SKU" />
                                            </td>
                                            <td>
                                                <input type="number" class="price-input" value="12.99" step="0.01" />
                                            </td>
                                            <td>
                                                <input type="number" class="qty-input" value="1" min="1" />
                                            </td>
                                            <td>$12.99</td>
                                            <td>
                                                <button class="remove-btn"> Remove </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="add-item-btn">
                                    + Add New Item
                                </button>
                            </div>

                            <!-- Order Total -->
                            <div class="total-section">
                                <div class="total-row">
                                    <span>Subtotal:</span>
                                    <span>$132.96</span>
                                </div>
                                <div class="total-row">
                                    <span>Shipping:</span>
                                    <input type="number" step="0.01" value="8.99" />
                                </div>
                                <div class="total-row">
                                    <span>Tax:</span>
                                    <input type="number" step="0.01" value="11.30" />
                                </div>
                                <div class="total-row">
                                    <span>Discount:</span>
                                    <input type="number" step="0.01" value="7.26" />
                                </div>
                                <div class="total-row">
                                    <span>Total:</span>
                                    <span>$145.99</span>
                                </div>
                            </div>
                        </div>

                        <!-- Order Notes -->
                        <div class="card">
                            <div class="card-header">
                                <h2>Order Notes</h2>
                            </div>
                            <div class="form-row single">
                                <div class="form-group">
                                    <label for="order-notes">Internal Notes</label>
                                    <textarea id="order-notes" placeholder="Add internal notes about this order..."> Customer requested expedited processing. Priority handling applied.</textarea>
                                </div>
                            </div>
                            <div class="form-row single">
                                <div class="form-group">
                                    <label for="customer-notes">Customer Notes</label>
                                    <textarea id="customer-notes" placeholder="Customer's special instructions..."> Please deliver between 2-5 PM. Leave at front door if no answer.</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="form-actions">
                        <button class="btn btn-primary add-item-btn"> Update Order </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>