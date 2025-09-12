<div class="main-container-sidebar" id="sidebar">
    <!-- Navigation Menu -->
    <nav class="nav-menu">
        <div class="nav-item">
            <a
                href="/customer/dashboard"
                class="nav-link <?php echo (basename(dirname($_SERVER['PHP_SELF'])) == 'admin') ? 'active' : ''; ?>">
                <div class="nav-link-content">
                    <svg class="nav-icon" viewBox="0 0 24 24">
                        <path
                            d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                    </svg>
                    <span>Dashboard</span>
                </div>
            </a>
        </div>

        <div class="nav-item">
            <a
                href="/customer/report"
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
            <a
                href="/customer/profile"
                class="nav-link <?php echo (basename(dirname($_SERVER['PHP_SELF'])) == 'admin_profile') ? 'active' : ''; ?>">
                <div class="nav-link-content">
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
                        class="lucide lucide-settings-icon lucide-settings">
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