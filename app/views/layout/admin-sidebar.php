<div class="sidebar" id="sidebar">
    <!-- Header -->
    <div class="sidebar-header">
        <div class="logo-section">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-guitar-icon lucide-guitar">
                    <path d="m11.9 12.1 4.514-4.514" />
                    <path
                        d="M20.1 2.3a1 1 0 0 0-1.4 0l-1.114 1.114A2 2 0 0 0 17 4.828v1.344a2 2 0 0 1-.586 1.414A2 2 0 0 1 17.828 7h1.344a2 2 0 0 0 1.414-.586L21.7 5.3a1 1 0 0 0 0-1.4z" />
                    <path d="m6 16 2 2" />
                    <path
                        d="M8.23 9.85A3 3 0 0 1 11 8a5 5 0 0 1 5 5 3 3 0 0 1-1.85 2.77l-.92.38A2 2 0 0 0 12 18a4 4 0 0 1-4 4 6 6 0 0 1-6-6 4 4 0 0 1 4-4 2 2 0 0 0 1.85-1.23z" />
                </svg>
            </div>
            <div class="brand-info">
                <h2>Guitar House</h2>
                <p>Admin Panel</p>
            </div>
        </div>
        <button class="collapse-btn" id="toogle-btn">
            <svg viewBox="0 0 24 24">
                <path
                    d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
            </svg>
        </button>
    </div>

    <!-- Navigation Menu -->
    <nav class="nav-menu">
        <div class="nav-item">
            <a href="/admin/dashboard" class="nav-link <?php echo (basename(dirname($_SERVER['PHP_SELF'])) == 'admin') ? 'active' : ''; ?>">
                <div class="nav-link-content">
                    <svg class="nav-icon" viewBox="0 0 24 24">
                        <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                    </svg>
                    <span>Dashboard</span>
                </div>
            </a>
        </div>

        <div class="nav-item">
            <a
                href="/admin/order-mgmt"
                class="nav-link <?php echo (basename(dirname($_SERVER['PHP_SELF'])) == 'order_mgmt') ? 'active' : ''; ?>">
                <div class="nav-link-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-notepad-text-icon lucide-notepad-text">
                        <path d="M8 2v4" />
                        <path d="M12 2v4" />
                        <path d="M16 2v4" />
                        <rect width="16" height="18" x="4" y="4" rx="2" />
                        <path d="M8 10h6" />
                        <path d="M8 14h8" />
                        <path d="M8 18h5" />
                    </svg>
                    <span>Orders Management</span>
                </div>
            </a>
        </div>

        <div class="nav-item">
            <a
                href="/admin/product-mgmt"
                class="nav-link <?php echo (basename(dirname($_SERVER['PHP_SELF'])) == 'product_mgmt') ? 'active' : ''; ?>">
                <div class="nav-link-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package-open-icon lucide-package-open">
                        <path d="M12 22v-9" />
                        <path d="M15.17 2.21a1.67 1.67 0 0 1 1.63 0L21 4.57a1.93 1.93 0 0 1 0 3.36L8.82 14.79a1.655 1.655 0 0 1-1.64 0L3 12.43a1.93 1.93 0 0 1 0-3.36z" />
                        <path d="M20 13v3.87a2.06 2.06 0 0 1-1.11 1.83l-6 3.08a1.93 1.93 0 0 1-1.78 0l-6-3.08A2.06 2.06 0 0 1 4 16.87V13" />
                        <path d="M21 12.43a1.93 1.93 0 0 0 0-3.36L8.83 2.2a1.64 1.64 0 0 0-1.63 0L3 4.57a1.93 1.93 0 0 0 0 3.36l12.18 6.86a1.636 1.636 0 0 0 1.63 0z" />
                    </svg>
                    <span>Products Management</span>
                </div>
            </a>
        </div>

        <div class="nav-item">
            <a
                href="/admin/customer-mgmt"
                class="nav-link <?php echo (basename(dirname($_SERVER['PHP_SELF'])) == 'customer_mgmt') ? 'active' : ''; ?>">
                <div class="nav-link-content">
                    <svg class="nav-icon" viewBox="0 0 24 24">
                        <path
                            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                    </svg>
                    <span>Customers Management</span>
                </div>
            </a>
        </div>

        <div class="nav-item">
            <a href="/admin/user-mgmt" class="nav-link <?php echo (basename(dirname($_SERVER['PHP_SELF'])) == 'user_mgmt') ? 'active' : ''; ?>">
                <div class="nav-link-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-star-icon lucide-user-star">
                        <path
                            d="M16.051 12.616a1 1 0 0 1 1.909.024l.737 1.452a1 1 0 0 0 .737.535l1.634.256a1 1 0 0 1 .588 1.806l-1.172 1.168a1 1 0 0 0-.282.866l.259 1.613a1 1 0 0 1-1.541 1.134l-1.465-.75a1 1 0 0 0-.912 0l-1.465.75a1 1 0 0 1-1.539-1.133l.258-1.613a1 1 0 0 0-.282-.866l-1.156-1.153a1 1 0 0 1 .572-1.822l1.633-.256a1 1 0 0 0 .737-.535z" />
                        <path d="M8 15H7a4 4 0 0 0-4 4v2" />
                        <circle cx="10" cy="7" r="4" />
                    </svg>
                    <span>Admins Management</span>
                </div>
            </a>
        </div>

        <div class="nav-item">
            <a
                href="/admin/report"
                class="nav-link <?php echo ($current_page == 'reports.php') ? 'active' : ''; ?>">
                <div class="nav-link-content">
                    <svg class="nav-icon" viewBox="0 0 24 24">
                        <path
                            d="M3.5 18.49l6-6.01 4 4L22 6.92l-1.41-1.41-7.09 7.97-4-4L2 16.99z" />
                    </svg>
                    <span>Analytics</span>
                </div>
            </a>
        </div>

        <div class="nav-item">
            <a href="/admin/profile" class="nav-link <?php echo (basename(dirname($_SERVER['PHP_SELF'])) == 'admin_profile') ? 'active' : ''; ?>">
                <div class="nav-link-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings-icon lucide-settings">
                        <path
                            d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                    <span>Settings</span>
                </div>
            </a>
        </div>
    </nav>
</div>