<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Customer Dashboard</title>
    <link rel="stylesheet" href="/public/css/admin/sidebar.css" />
    <link rel="stylesheet" href="/public/css/styles.css" />
    <link rel="stylesheet" href="/public/css/customer/customer-dashboard-page.css" />
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
                <header class="content-header">
                    <div class="header-content">
                        <div class="header-text">
                            <h1>Welcome Back, Aayusha</h1>
                            <p>
                                Discover amazing guitars and gear at Guitar
                                House
                            </p>
                        </div>
                    </div>
                    <div class="customer-badge">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-shield-check-icon lucide-shield-check">
                            <path
                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                            <path d="m9 12 2 2 4-4" />
                        </svg>
                        Valued Customer
                    </div>
                </header>

                <div class="dashboard-grid">
                    <div class="main-content">
                        <div class="welcome-card">
                            <h2 class="welcome-title">
                                Your Musical Journey Continues
                            </h2>
                            <p class="welcome-text">
                                Welcome to your personal dashboard at Guitar
                                House! Here you can track your orders,
                                manage your wishlist, and discover new
                                instruments that match your style. Whether
                                you're a beginner or a seasoned musician,
                                we're here to help you find the perfect
                                guitar for your musical journey.
                            </p>
                            <div class="stats-grid">
                                <div class="stat-item">
                                    <div class="stat-value">3</div>
                                    <div class="stat-label">
                                        Orders Placed
                                    </div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">12</div>
                                    <div class="stat-label">
                                        Wishlist Items
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="recent-activity">
                            <h3 class="section-title">
                                <i class="fas fa-clock"></i>
                                Recent Activity
                            </h3>
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="activity-content">
                                    <h4>Added to Wishlist</h4>
                                    <p>
                                        Fender Player Stratocaster - 2 days
                                        ago
                                    </p>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="activity-content">
                                    <h4>Order Placed</h4>
                                    <p>Guitar Pick Set - 1 week ago</p>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="activity-content">
                                    <h4>Review Submitted</h4>
                                    <p>
                                        Acoustic Guitar Strings - 2 weeks
                                        ago
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-sidebar">
                        <div class="stats-card">
                            <h3 class="section-title">
                                <i class="fas fa-chart-pie"></i>
                                Your Stats
                            </h3>
                            <div class="stats-grid">
                                <div class="stat-item">
                                    <div class="stat-value">$1,247</div>
                                    <div class="stat-label">
                                        Total Spent
                                    </div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">4.9</div>
                                    <div class="stat-label">
                                        Avg Rating Given
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="quick-links">
                            <h3 class="section-title">
                                <i class="fas fa-bolt"></i>
                                Quick Links
                            </h3>
                            <a href="#" class="link-item">
                                <div class="link-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                                <span class="link-text">Browse Guitars</span>
                            </a>
                            <a href="#" class="link-item">
                                <div class="link-icon">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <span class="link-text">My Wishlist</span>
                            </a>
                            <a href="#" class="link-item">
                                <div class="link-icon">
                                    <i class="fas fa-box"></i>
                                </div>
                                <span class="link-text">Order History</span>
                            </a>
                            <a href="#" class="link-item">
                                <div class="link-icon">
                                    <i class="fas fa-user-cog"></i>
                                </div>
                                <span class="link-text">Account Settings</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>