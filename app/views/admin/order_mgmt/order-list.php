<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Management - Order List</title>
    <link rel="stylesheet" href="/public/css/admin/styles.css" />
    <link rel="stylesheet" href="/public/css/admin/sidebar.css" />
    <style>
        .content-container {
            overflow-y: auto;
            padding: 8px 20px;
        }

        .content-container-header {
            border-radius: 4px;
        }

        .controls {
            background-color: #fff;
            padding: 12px 20px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .search-section {
            display: flex;
            gap: 10px;
            align-items: center;
            flex-wrap: wrap;
        }

        .search-section input,
        .search-section select {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            background-color: #ddd;
            color: #333;
        }

        .search-section input[type="text"] {
            width: 200px;
        }

        .search-section input[type="date"] {
            color: #333;
        }

        .btn {
            padding: 8px 16px;
            border: 1px solid #ccc;
            border-radius: 10px;
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

        .order-table {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #f8f9fa;
            padding: 12px;
            text-align: left;
            border-bottom: 2px solid #ddd;
            font-weight: 600;
            color: #333;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            color: #333;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        .status {
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
            text-align: center;
            min-width: 80px;
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

        .actions {
            display: flex;
            gap: 8px;
        }

        .btn-sm {
            padding: 4px 8px;
            font-size: 12px;
        }

        .pagination {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .pagination-info {
            color: #666;
            font-size: 14px;
        }

        .pagination-controls {
            display: flex;
            gap: 5px;
        }

        .pagination-controls a {
            padding: 6px 12px;
            border: 1px solid #ddd;
            text-decoration: none;
            color: #333;
            border-radius: 4px;
        }

        .pagination-controls a:hover {
            background-color: #f0f0f0;
        }

        .pagination-controls a.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .summary-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .summary-card {
            background-color: #fff;
            padding: 10px 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-align: center;
        }

        .summary-card h3 {
            font-size: 24px;
            margin-bottom: 5px;
            color: #007bff;
        }

        .summary-card p {
            color: #666;
            font-size: 14px;
        }

        .text-link {
            display: block;
            text-decoration: none;
            color: var(--color-blue-500);
            transition: 0.3s;
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .text-link:hover {
            color: var(--color-blue-800);
        }

        @media (max-width: 768px) {
            .controls {
                flex-direction: column;
                align-items: stretch;
            }

            .search-section {
                flex-direction: column;
            }

            .search-section input[type="text"] {
                width: 100%;
            }

            .order-table {
                overflow-x: auto;
            }

            table {
                min-width: 800px;
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
                    <div class="content-container-header">
                        <h1>Order Lists</h1>
                    </div>

                    <!-- Summary Cards -->
                    <div class="summary-cards">
                        <div class="summary-card">
                            <h3>156</h3>
                            <p>Total Orders</p>
                        </div>
                        <div class="summary-card">
                            <h3>23</h3>
                            <p>Pending Orders</p>
                        </div>
                        <div class="summary-card">
                            <h3>45</h3>
                            <p>Shipped Orders</p>
                        </div>
                        <div class="summary-card">
                            <h3>88</h3>
                            <p>Delivered Orders</p>
                        </div>
                    </div>

                    <!-- Controls -->
                    <div class="controls">
                        <div class="search-section">
                            <input type="text" placeholder="Search by Order ID, Customer..." />
                            <select>
                                <option>All Status</option>
                                <option>Pending</option>
                                <option>Confirmed</option>
                                <option>Shipped</option>
                                <option>Delivered</option>
                                <option>Cancelled</option>
                            </select>
                            <input type="date" />
                            <button class="btn">Search</button>
                            <button class="btn">Reset</button>
                        </div>
                        <div>
                            <button class="btn">Export</button>
                            <button class="btn">Print</button>
                        </div>
                    </div>

                    <!-- Order Table -->
                    <div class="order-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Date</th>
                                    <th>Items</th>
                                    <th>Total Amount</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ORD-2024-001</td>
                                    <td>
                                        John Smith<br /><small>john@email.com</small>
                                    </td>
                                    <td>2024-08-20</td>
                                    <td>3</td>
                                    <td>Rs 12125.99</td>
                                    <td>
                                        <span
                                            class="status status-confirmed">Confirmed</span>
                                    </td>
                                    <td class="actions">
                                        <a href="/admin/order-mgmt/order-detail" class="btn btn-sm">View</a>
                                        <a href="/admin/order-mgmt/order-edit" class="btn btn-sm">Edit</a>
                                        <a href="#" class="btn btn-sm">Dispatch</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#ORD-2024-005</td>
                                    <td> Robert Brown<br /><small>robert@email.com</small> </td>
                                    <td>2024-08-19</td>
                                    <td>2</td>
                                    <td>Rs 17778.25</td>
                                    <td> <span class="status status-cancelled">Cancelled</span> </td>
                                    <td class="actions"> <a href="/admin/order-mgmt/order-detail" class="btn btn-sm">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <a href="/admin/order-mgmt" title="Back to Home" class="text-link">&larr;Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>