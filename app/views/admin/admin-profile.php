<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Admin Profile Setting</title>
    <link rel="stylesheet" href="/public/css/admin/styles.css" />
    <link rel="stylesheet" href="/public/css/admin/sidebar.css" />
    <link rel="stylesheet" href="/public/css/admin/admin-profile-page.css" />
</head>

<body>
    <div class="container">
        <!-- sidebar section -->
        <?php include VIEW_PATH . '/layout/admin-sidebar.php'; ?>

        <div class="main-content-container">
            <!-- header section -->
            <?php include VIEW_PATH . '/layout/admin-header.php'; ?>

            <!-- main-conten-->
            <main class="main-content">
                <!-- Header Section -->
                <div class="store-setting-header">
                    <div class="header-left">
                        <div class="settings-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings-icon lucide-settings">
                                <path d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </div>
                        <div class="header-text">
                            <h1>Store Settings</h1>
                            <p> Manage your store profile and team members </p>
                        </div>
                    </div>
                    <div class="header-right">
                        <div class="stats-container">
                            <div class="stat-card">
                                <div class="label">
                                    <svg class="icon revenue" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
                                    </svg>
                                    <span class="stat-label text-green">Revenue</span>
                                </div>
                                <div class="value">$45.2K</div>
                                <span>This Month</span>
                            </div>
                            <div class="stat-card">
                                <div class="label">
                                    <svg class="icon orders" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z" />
                                    </svg>
                                    <span class="stat-label text-blue">Orders</span>
                                </div>
                                <div class="value">1,234</div>
                                <span>Total Orders</span>
                            </div>
                            <div class="stat-card">
                                <div class="label">
                                    <svg class="icon products" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                    <span class="stat-label text-purple">Products</span>
                                </div>
                                <div class="value">567</div>
                                <span>In catalog</span>
                            </div>
                        </div>
                        <button class="premium-badge">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            Premium Store
                        </button>
                    </div>
                </div>

                <!-- Tab Navigation -->
                <div class="tab-navigation">
                    <button class="tab-button active" data-tab="store-profile">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg> Store Profile
                    </button>
                    <button class="tab-button" data-tab="security">
                        <svg viewBox="0 0 24 24">
                            <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11C15.4,11 16,11.4 16,12V16C16,16.6 15.6,17 15,17H9C8.4,17 8,16.6 8,16V12C8,11.4 8.4,11 9,11V10C9,8.6 10.6,7 12,7M12,8.2C11.2,8.2 10.2,9.2 10.2,10V11H13.8V10C13.8,9.2 12.8,8.2 12,8.2Z" />
                        </svg>
                        Update Password
                    </button>
                </div>

                <!-- Tab Content-->
                <div id="security" class="tab-content">
                    <div class="content-card">
                        <div class="content-header">
                            <h3>Change Password</h3>
                            <p>Update your account password</p>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div>
                                    <label class="form-label">Current Password</label>
                                    <input type="password" class="form-input" placeholder="Enter current password" />
                                </div>
                                <div>
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-input" placeholder="Enter new password" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Confirm New Password</label>
                            <input
                                type="password" class="form-input" placeholder="Confirm new password" />
                        </div>
                        <button class="save-button">Update Password</button>
                    </div>
                </div>

                <div id="store-profile" class="tab-content active">
                    <div class="vendor-page-container">
                        <!-- Store Logo Card -->
                        <div class="card logo-card">
                            <div class="logo-container">
                                <div class="logo-circle"></div>
                                <div class="camera-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-camera-icon lucide-camera">
                                        <path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z" />
                                        <circle cx="12" cy="13" r="3" />
                                    </svg>
                                </div>
                            </div>
                            <h3 class="logo-title">Store Logo</h3>
                            <p class="logo-subtitle"> Upload your brand logo (recommended: 512x512px) </p>
                            <button class="upload-btn"> Upload New Logo </button>
                        </div>

                        <!-- Store Information Card -->
                        <div class="card">
                            <div class="card-header">
                                <div class="card-icon purple">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-store-icon lucide-store">
                                        <path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7" />
                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                                        <path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4" />
                                        <path d="M2 7h20" />
                                        <path d="M22 7v3a2 2 0 0 1-2 2a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 12a2 2 0 0 1-2-2V7" />
                                    </svg>
                                </div>
                                <h3 class="card-title"> Store Information </h3>
                            </div>
                            <p class="card-subtitle"> Manage your store details and business information </p>

                            <div class="form-group">
                                <div class="form-row">
                                    <div>
                                        <label class="form-label">Store Name</label>
                                        <input type="text" class="form-input" placeholder="TechVendor Solutions" />
                                    </div>
                                    <div>
                                        <label class="form-label">Store Category</label>
                                        <select class="form-input custom-select">
                                            <option>Guitar</option>
                                            <option>Electric Guitar</option>
                                            <option>Home & Garden</option>
                                            <option>Sports</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div>
                                        <label class="form-label">Store Email</label>
                                        <div class="input-with-icon">
                                            <svg class="input-icon" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                            </svg>
                                            <input type="email" class="form-input" placeholder="contact@techvendor.com" />
                                        </div>
                                    </div>
                                    <div>
                                        <label class="form-label">Phone Number</label>
                                        <div class="input-with-icon">
                                            <svg class="input-icon" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                            </svg>
                                            <input type="tel" class="form-input" placeholder="+1 (555) 123-4567" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="store-additional-information">
                        <div class="card address-card">
                            <div class="card-header">
                                <div class="card-icon blue">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin">
                                        <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                </div>
                                <h3 class="card-title">Business Address</h3>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Street Address</label>
                                <input type="text" class="form-input" placeholder="456 Commerce Avenue" />
                            </div>

                            <div class="form-group">
                                <div class="address-row">
                                    <div>
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-input" placeholder="San Francisco" />
                                    </div>
                                    <div>
                                        <label class="form-label">State</label>
                                        <input type="text" class="form-input" placeholder="California" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Notification Settings Card -->
                        <div class="card">
                            <div
                                class="card-header"
                                style="margin-bottom: 30px">
                                <div class="card-icon green">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell-icon lucide-bell">
                                        <path d="M10.268 21a2 2 0 0 0 3.464 0" />
                                        <path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326" />
                                    </svg>
                                </div>
                                <h3 class="card-title"> Notification Settings </h3>
                            </div>

                            <div class="card-body">
                                <div class="notification-item">
                                    <div class="notification-info">
                                        <h4>Email Notifications</h4>
                                        <p> Receive order updates via email </p>
                                    </div>
                                    <label class="toggle">
                                        <input type="checkbox" checked />
                                        <span class="toggle-slider"></span>
                                    </label>
                                </div>

                                <div class="notification-item">
                                    <div class="notification-info">
                                        <h4>SMS Notifications</h4>
                                        <p>Urgent alerts via SMS</p>
                                    </div>
                                    <label class="toggle">
                                        <input type="checkbox" checked />
                                        <span class="toggle-slider"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="button-div">
                        <button
                            class="btn btn-primary"
                            style="padding: 0.5rem 0.8rem; width: 120px">
                            Save Setting
                        </button>
                        <a href="../index.html" class="btn" style=" background-color: #ef4444; color: white; text-decoration: none; padding: 0.5rem 0.8rem; width: 100px; font-size: 14px; ">
                            Log out
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script type="module" src="/public/js/index.js"></script>
</body>

</html>