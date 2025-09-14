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
                        <span class="trend up">+3 this month</span>
                    </div>
                    <div class="summary-card">
                        <h3>$1,245.67</h3>
                        <p>Total Spent</p>
                        <span class="trend up">+$156.23</span>
                    </div>
                    <div class="summary-card">
                        <h3>3</h3>
                        <p>Pending Orders</p>
                        <span class="trend neutral">Same as last month</span>
                    </div>
                    <div class="summary-card">
                        <h3>$87.45</h3>
                        <p>Average Order Value</p>
                        <span class="trend down">-$12.33</span>
                    </div>
                </div>

                <div class="dashboard-content">
                    <!-- Main Content -->
                    <div class="main-content">
                        <!-- Recent Orders -->
                        <div class="card">
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
                                        <td>
                                            <span
                                                class="status status-shipped">Shipped</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-2024-023</td>
                                        <td>Aug 20, 2024</td>
                                        <td>1</td>
                                        <td>$45.50</td>
                                        <td>
                                            <span
                                                class="status status-delivered">Delivered</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn">View</a>
                                        </td>
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

                            <div class="pagination">
                                <a href="#">Previous</a>
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">Next</a>
                            </div>
                        </div>

                        <!-- Transaction History -->
                        <div class="card">
                            <div class="card-header">
                                <h2>Recent Transactions</h2>
                                <a href="#" class="btn btn-primary">View All</a>
                            </div>

                            <div class="filter-section">
                                <select>
                                    <option>All Transactions</option>
                                    <option>Payments</option>
                                    <option>Refunds</option>
                                    <option>Credits</option>
                                </select>
                                <input type="month" value="2024-08" />
                            </div>

                            <div class="transaction-item">
                                <div class="transaction-info">
                                    <h4>Order Payment - #ORD-2024-024</h4>
                                    <p>
                                        Aug 22, 2024 • Credit Card ending in
                                        4567
                                    </p>
                                </div>
                                <div
                                    class="transaction-amount amount-negative">
                                    -$89.99
                                </div>
                            </div>
                            <div class="transaction-item">
                                <div class="transaction-info">
                                    <h4>Refund - #ORD-2024-019</h4>
                                    <p>
                                        Aug 21, 2024 • Refunded to original
                                        payment method
                                    </p>
                                </div>
                                <div
                                    class="transaction-amount amount-positive">
                                    +$34.50
                                </div>
                            </div>
                            <div class="transaction-item">
                                <div class="transaction-info">
                                    <h4>Order Payment - #ORD-2024-023</h4>
                                    <p>Aug 20, 2024 • PayPal</p>
                                </div>
                                <div
                                    class="transaction-amount amount-negative">
                                    -$45.50
                                </div>
                            </div>
                            <div class="transaction-item">
                                <div class="transaction-info">
                                    <h4>Store Credit Applied</h4>
                                    <p>
                                        Aug 18, 2024 • Applied to order
                                        #ORD-2024-022
                                    </p>
                                </div>
                                <div
                                    class="transaction-amount amount-positive">
                                    +$15.00
                                </div>
                            </div>
                            <div class="transaction-item">
                                <div class="transaction-info">
                                    <h4>Order Payment - #ORD-2024-022</h4>
                                    <p>
                                        Aug 18, 2024 • Credit Card ending in
                                        4567
                                    </p>
                                </div>
                                <div
                                    class="transaction-amount amount-negative">
                                    -$127.25
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Quick Stats -->
                        <div class="card">
                            <div class="card-header">
                                <h2>Quick Stats</h2>
                            </div>
                            <div class="quick-stats">
                                <div class="stat-item">
                                    <h4>5</h4>
                                    <p>Orders This Month</p>
                                </div>
                                <div class="stat-item">
                                    <h4>$245.67</h4>
                                    <p>Spent This Month</p>
                                </div>
                                <div class="stat-item">
                                    <h4>92%</h4>
                                    <p>On-Time Delivery</p>
                                </div>
                                <div class="stat-item">
                                    <h4>15</h4>
                                    <p>Loyalty Points</p>
                                </div>
                            </div>
                        </div>

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