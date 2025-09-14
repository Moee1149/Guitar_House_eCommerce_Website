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
                    <div class="header-actions">
                        <a href="./customer-dashboard-page.html" class="btn">← Back to Dashboard</a>
                        <a href="#" class="btn">View Public Profile</a>
                    </div>
                </div>

                <!-- Success Alert -->
                <div class="alert">
                    <span class="alert-icon">✓</span>
                    <strong>Profile updated successfully!</strong> Your
                    changes have been saved.
                </div>

                <div class="form-container">
                    <!-- Profile Picture -->
                    <div class="card">
                        <div class="card-header">
                            <h2>Profile Picture</h2>
                            <p>
                                Upload a new profile picture to personalize
                                your account
                            </p>
                        </div>
                        <div class="profile-picture-section">
                            <div class="profile-picture">Profile Photo</div>
                            <div class="picture-actions">
                                <input
                                    type="file"
                                    id="profile-pic"
                                    accept="image/*"
                                    style="display: none" />
                                <button
                                    class="btn btn-primary"
                                    onclick="document.getElementById('profile-pic').click()">
                                    Upload New Photo
                                </button>
                                <button class="btn">Remove Photo</button>
                                <p class="help-text">
                                    JPG, PNG or GIF. Max size 2MB.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Personal Information -->
                    <div class="card">
                        <div class="card-header">
                            <h2>Personal Information</h2>
                            <p>
                                Update your personal details and contact
                                information
                            </p>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first-name">First Name *</label>
                                <input
                                    type="text"
                                    id="first-name"
                                    value="John"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="last-name">Last Name *</label>
                                <input
                                    type="text"
                                    id="last-name"
                                    value="Smith"
                                    required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input
                                    type="email"
                                    id="email"
                                    value="john@email.com"
                                    required />
                                <span class="help-text">We'll send account updates to this
                                    email</span>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input
                                    type="tel"
                                    id="phone"
                                    value="+1 (555) 123-4567" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="birth-date">Date of Birth</label>
                                <input
                                    type="date"
                                    id="birth-date"
                                    value="1990-01-15" />
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select id="gender">
                                    <option value="">
                                        Prefer not to say
                                    </option>
                                    <option value="male" selected>
                                        Male
                                    </option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row single">
                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <textarea
                                    id="bio"
                                    placeholder="Tell us about yourself...">
 Tech enthusiast and coffee lover. Always looking for the latest gadgets and innovations.</textarea>
                                <span class="help-text">Brief description for your profile
                                    (optional)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Address Information -->
                    <div class="card">
                        <div class="card-header">
                            <h2>Address Information</h2>
                            <p>Your default shipping and billing address</p>
                        </div>
                        <div class="form-row single">
                            <div class="form-group">
                                <label for="address">Street Address *</label>
                                <input
                                    type="text"
                                    id="address"
                                    value="123 Main Street"
                                    required />
                            </div>
                        </div>
                        <div class="form-row single">
                            <div class="form-group">
                                <label for="address2">Apartment, suite, etc.</label>
                                <input
                                    type="text"
                                    id="address2"
                                    value="Apartment 4B" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="city">City *</label>
                                <input
                                    type="text"
                                    id="city"
                                    value="New York"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="state">State/Province *</label>
                                <input
                                    type="text"
                                    id="state"
                                    value="NY"
                                    required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="zip">ZIP/Postal Code *</label>
                                <input
                                    type="text"
                                    id="zip"
                                    value="10001"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="country">Country *</label>
                                <select id="country" required>
                                    <option value="US" selected>
                                        United States
                                    </option>
                                    <option value="CA">Canada</option>
                                    <option value="UK">
                                        United Kingdom
                                    </option>
                                    <option value="AU">Australia</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Change Password -->
                    <div class="card">
                        <div class="card-header">
                            <h2>Change Password</h2>
                            <p>
                                Update your password to keep your account
                                secure
                            </p>
                        </div>
                        <div class="form-row single">
                            <div class="form-group">
                                <label for="current-password">Current Password *</label>
                                <input
                                    type="password"
                                    id="current-password"
                                    required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="new-password">New Password *</label>
                                <input
                                    type="password"
                                    id="new-password"
                                    required />
                                <div class="password-strength">
                                    <div class="strength-bar">
                                        <div
                                            class="strength-fill strength-good"></div>
                                    </div>
                                    <div class="strength-text">
                                        Password strength: Good
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">Confirm New Password *</label>
                                <input
                                    type="password"
                                    id="confirm-password"
                                    required />
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
                            <strong>Warning:</strong> These actions cannot
                            be undone. Please proceed with caution.
                        </div>
                        <div class="form-row">
                            <div>
                                <h4>Deactivate Account</h4>
                                <p>
                                    Temporarily disable your account. You
                                    can reactivate it later.
                                </p>
                            </div>
                            <div style="display: flex; align-items: center">
                                <button class="btn">
                                    Deactivate Account
                                </button>
                            </div>
                        </div>
                        <hr
                            style="
                                    margin: 20px 0;
                                    border: none;
                                    border-top: 1px solid #eee;
                                " />
                        <div class="form-row">
                            <div>
                                <h4>Delete Account</h4>
                                <p>
                                    Permanently delete your account and all
                                    associated data.
                                </p>
                            </div>
                            <div style="display: flex; align-items: center">
                                <button class="btn btn-danger">
                                    Delete Account
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="form-actions">
                    <button class="btn">Cancel Changes</button>
                    <button class="btn">Save Draft</button>
                    <button class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </main>
    </div>
</body>

</html>