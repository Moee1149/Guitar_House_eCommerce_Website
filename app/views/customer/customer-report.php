<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Dashboard - Orders & Transactions</title>
    <link rel="stylesheet" href="/public/css/admin/sidebar.css" />
    <link rel="stylesheet" href="/public/css/styles.css" />
    <link rel="stylesheet" href="/public/css/customer/customer-report-page.css" />
</head>

<body>
    <div class="container">
        <!-- header section -->
        <?php include VIEW_PATH . '/layout/header.php'; ?>

        <!-- main section -->
        <main class="main-container">
            <!-- sidebar section -->
            <?php include VIEW_PATH . '/layout/customer-sidebar.php' ?>

            <div class="content-container">
                <!-- Header -->
                <div class="content-header">
                    <h1>Welcome back, Aayusha!</h1>
                    <p class="welcome-text">
                        Here's your account overview and recent activity
                    </p>
                </div>

                <!-- Summary Cards -->
                <div class="summary-cards">
                    <div class="summary-card">
                        <h3><?php echo $totalOrders; ?></h3>
                        <p>Total Orders</p>
                    </div>
                    <div class="summary-card">
                        <h3>$<?php echo $totalSpend; ?></h3>
                        <p>Total Spent</p>
                    </div>
                    <div class="summary-card">
                        <h3><?= $orderStatusCounts['pending'] ?? 0 ?></h3>
                        <p>Pending Orders</p>
                    </div>
                </div>

                <div class="dashboard-content">
                    <!-- Main Content -->
                    <div class="main-content">
                        <!-- Recent Orders -->
                        <div class="card recent-orders">
                            <div class="card-header">
                                <h2>Recent Orders</h2>
                                <a href="#" class="btn btn-primary">View All Orders</a>
                            </div>

                            <div class="filter-section">
                                <select id="status-select">
                                    <option value="">All Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="confirmed">Confirmed</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="delivered">Delivered</option>
                                </select>

                                <select id="date-select">
                                    <option value="daily">Today</option>
                                    <option value="monthly">This Month</option>
                                    <option value="yearly">This Year</option>
                                </select>
                            </div>

                            <table class="orders-table">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Items</th>
                                        <th>Total Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($orderReport as $report) { ?>
                                        <tr>
                                            <td><?= $report['order_id'] ?></td>
                                            <td><?= $report['order_date'] ?></td>
                                            <td><?= $report['items'] ?></td>
                                            <td><?= $report['total_amount'] ?></td>
                                            <td><span class="status status-shipped"><?= $report['status'] ?></span> </td>
                                        </tr>
                                    <?php }; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Order Status Breakdown -->
                        <div class="card">
                            <div class="card-header">
                                <h2>Order Status</h2>
                            </div>
                            <div class="transaction-item">
                                <div class="transaction-info">
                                    <h4>Pending Orders</h4>
                                    <p>Awaiting confirmation</p>
                                </div>
                                <div class="transaction-amount"><?= $orderStatusCounts['pending'] ?? 0 ?></div>
                            </div>
                            <div class="transaction-item">
                                <div class="transaction-info">
                                    <h4>Confirmed Orders</h4>
                                    <p>Ready for dispatch</p>
                                </div>
                                <div class="transaction-amount"><?= $orderStatusCounts['processing'] ?? 0 ?></div>
                            </div>
                            <div class="transaction-item">
                                <div class="transaction-info">
                                    <h4>Shipped Orders</h4>
                                    <p>On the way</p>
                                </div>
                                <div class="transaction-amount"><?= $orderStatusCounts['shipped'] ?? 0 ?></div>
                            </div>
                            <div class="transaction-item">
                                <div class="transaction-info">
                                    <h4>Delivered Orders</h4>
                                    <p>Successfully completed</p>
                                </div>
                                <div class="transaction-amount"><?= $orderStatusCounts['delivered'] ?? 0 ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const statusSelect = document.getElementById('status-select');
            const dateSelect = document.getElementById('date-select');
            const params = new URLSearchParams(window.location.search);

            // Set selected value from URL params
            if (params.has('status')) {
                statusSelect.value = params.get('status');
            }
            if (params.has('date')) {
                dateSelect.value = params.get('date');
            }

            function updateReport() {
                const status = statusSelect.value;
                const date = dateSelect.value;
                const newParams = new URLSearchParams(window.location.search);

                newParams.set('status', status);
                newParams.set('date', date);

                window.location.search = newParams.toString();
            }

            statusSelect.addEventListener('change', updateReport);
            dateSelect.addEventListener('change', updateReport);
        });
    </script>
</body>

</html>