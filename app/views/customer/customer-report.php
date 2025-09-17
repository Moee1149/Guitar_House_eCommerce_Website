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
                    <h1>Welcome back, <?= $_SESSION['customer_name'] ?>!</h1>
                    <p class="welcome-text">
                        Here's your account overview and recent activity
                    </p>
                </div>

                <div class="stats-grid">
                    <div class="stat-card">
                        <span class="stat-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                <circle cx="8" cy="21" r="1" />
                                <circle cx="19" cy="21" r="1" />
                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                            </svg>
                        </span>
                        <div class="stat-number"><?php echo $totalOrders; ?></div>
                        <div class="stat-label">Total Orders</div>
                        <div class="stat-period"> +15% from last month </div>
                    </div>
                    <div class="stat-card">
                        <span class="stat-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign-icon lucide-dollar-sign">
                                <line x1="12" x2="12" y1="2" y2="22" />
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                            </svg>
                        </span>
                        <div class="stat-number">$<?php echo $totalSpend; ?></div>
                        <div class="stat-label">Total Spent</div>
                        <div class="stat-period"> +15% from last month </div>
                    </div>

                    <div class="stat-card">
                        <span class="stat-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-clock-icon lucide-clipboard-clock">
                                <path d="M16 14v2.2l1.6 1" />
                                <path d="M16 4h2a2 2 0 0 1 2 2v.832" />
                                <path d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2" />
                                <circle cx="16" cy="16" r="6" />
                                <rect x="8" y="2" width="8" height="4" rx="1" />
                            </svg>
                        </span>
                        <div class="stat-number"><?= $orderStatusCounts['pending'] ?? 0 ?></div>
                        <div class="stat-label">Total Pending Orders</div>
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