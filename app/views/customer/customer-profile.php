<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Customer Profile Settings</title>
    <link rel="stylesheet" href="/public/css/admin/sidebar.css" />
    <link rel="stylesheet" href="/public/css/styles.css" />
    <link rel="stylesheet" href="/public/css/customer/customer-profile-page.css" />
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
                    <div class="header-left">
                        <h1>Profile Settings</h1>
                        <div class="breadcrumb">
                            <a href="#">Dashboard</a> > Profile Settings
                        </div>
                    </div>
                </div>

                <!-- Success Alert -->
                <?php if (isset($_SESSION['msg'])): ?>
                    <div class="alert">
                        <span class="alert-icon">✓</span>
                        <strong>Profile updated successfully!</strong> Your changes have been saved.
                    </div>
                <?php endif; ?>
                <form action="/customer/profile" method="POST">
                    <div class="form-container">
                        <!-- Personal Information -->
                        <div class="card">
                            <div class="card-header">
                                <h2>Personal Information</h2>
                                <p> Update your personal details and contact information </p>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="first-name">Customer Name *</label>
                                    <input type="text" name="name" id="first-name" value="<?= $customer_data['customer_name'] ?>" required />
                                </div>
                                <div class="form-group">
                                    <label for="address">Street Address *</label>
                                    <input type="text" name="address" id="address" value="<?= $customer_data['address'] ?>" required />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="email" id="email" value="<?= $customer_data['email'] ?>" disabled /> <span class="help-text">We'll send account updates to this email</span>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" name="phone" id="phone" value="<?= $customer_data['phone'] ?>" />
                                </div>
                            </div>
                        </div>

                        <!-- Change Password -->
                        <div class="card">
                            <div class="card-header">
                                <h2>Change Password</h2>
                                <p> Update your password to keep your account secure </p>
                            </div>
                            <div class="form-row ">
                                <div class="form-group">
                                    <label for="current-password">Current Password *</label>
                                    <input type="password" name="currentPassword" id="current-password" />
                                </div>
                                <div class="form-group">
                                    <label for="new-password">New Password *</label>
                                    <input type="password" name="newPassword" id="new-password" />
                                </div>
                            </div>
                        </div>

                        <!-- Danger Zone -->
                        <div class="card danger-zone">
                            <div class="card-header">
                                <h2>Danger Zone</h2>
                                <p>Irreversible and destructive actions</p>
                            </div>
                            <div class="alert danger">
                                <span class="alert-icon">⚠</span>
                                <strong>Warning:</strong> These actions cannot be undone. Please proceed with caution.
                            </div>
                            <hr style=" margin: 20px 0; border: none; border-top: 1px solid #eee; " />
                            <div class="form-row">
                                <div>
                                    <h4>Delete Account</h4>
                                    <p> Permanently delete your account and all associated data. </p>
                                </div>
                                <div style="display: flex; align-items: center">
                                    <button class="btn btn-danger"> <a href="/customer/profile?delete=1&customer_id=<?= $customerId ?>" style="text-decoration: none; color: inherit;">Delete Account</a> </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="form-actions">
                        <button class="btn btn-primary" type="submit" name="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>
<?php unset($_SESSION['msg']);
