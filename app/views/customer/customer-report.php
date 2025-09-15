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
                        <h3>24</h3>
                        <p>Total Orders</p>
                    </div>
                    <div class="summary-card">
                        <h3>$1,245.67</h3>
                        <p>Total Spent</p>
                    </div>
                    <div class="summary-card">
                        <h3>3</h3>
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
                                <select>
                                    <option>All Status</option>
                                    <option>Pending</option>
                                    <option>Confirmed</option>
                                    <option>Shipped</option>
                                    <option>Delivered</option>
                                </select>
                                <select>
                                    <option>Last 30 days</option>
                                    <option>Last 3 months</option>
                                    <option>Last 6 months</option>
                                    <option>This year</option>
                                </select>
                                <input
                                    type="search"
                                    placeholder="Search orders..." />
                            </div>

                            <table class="orders-table">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Items</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#ORD-2024-024</td>
                                        <td>Aug 22, 2024</td>
                                        <td>2</td>
                                        <td>$89.99</td>
                                        <td> <span class="status status-shipped">Shipped</span> </td>
                                        <td> <a href="#" class="btn">View</a> </td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-2024-023</td>
                                        <td>Aug 20, 2024</td>
                                        <td>1</td>
                                        <td>$45.50</td>
                                        <td> <span class="status status-delivered">Delivered</span> </td>
                                        <td> <a href="#" class="btn">View</a> </td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-2024-022</td>
                                        <td>Aug 18, 2024</td>
                                        <td>3</td>
                                        <td>$127.25</td>
                                        <td>
                                            <span
                                                class="status status-delivered">delivered</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-2024-021</td>
                                        <td>Aug 15, 2024</td>
                                        <td>1</td>
                                        <td>$65.00</td>
                                        <td>
                                            <span
                                                class="status status-confirmed">Confirmed</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-2024-020</td>
                                        <td>Aug 12, 2024</td>
                                        <td>2</td>
                                        <td>$98.75</td>
                                        <td>
                                            <span
                                                class="status status-pending">Pending</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn">View</a>
                                        </td>
                                    </tr>
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
                                <div class="transaction-amount">3</div>
                            </div>
                            <div class="transaction-item">
                                <div class="transaction-info">
                                    <h4>Confirmed Orders</h4>
                                    <p>Ready for dispatch</p>
                                </div>
                                <div class="transaction-amount">2</div>
                            </div>
                            <div class="transaction-item">
                                <div class="transaction-info">
                                    <h4>Shipped Orders</h4>
                                    <p>On the way</p>
                                </div>
                                <div class="transaction-amount">4</div>
                            </div>
                            <div class="transaction-item">
                                <div class="transaction-info">
                                    <h4>Delivered Orders</h4>
                                    <p>Successfully completed</p>
                                </div>
                                <div class="transaction-amount">15</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>