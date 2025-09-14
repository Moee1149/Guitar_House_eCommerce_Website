<!-- header section -->
<header class="header" id="header">
    <div class="header-items-container">
        <div class="site-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-guitar-icon lucide-guitar">
                <path d="m11.9 12.1 4.514-4.514" />
                <path d="M20.1 2.3a1 1 0 0 0-1.4 0l-1.114 1.114A2 2 0 0 0 17 4.828v1.344a2 2 0 0 1-.586 1.414A2 2 0 0 1 17.828 7h1.344a2 2 0 0 0 1.414-.586L21.7 5.3a1 1 0 0 0 0-1.4z" />
                <path d="m6 16 2 2" />
                <path d="M8.23 9.85A3 3 0 0 1 11 8a5 5 0 0 1 5 5 3 3 0 0 1-1.85 2.77l-.92.38A2 2 0 0 0 12 18a4 4 0 0 1-4 4 6 6 0 0 1-6-6 4 4 0 0 1 4-4 2 2 0 0 0 1.85-1.23z" />
            </svg>
            <h1>Guitar House</h1>
        </div>
        <div class="navigation">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/product">Products</a></li>
                <li> <a href="/contact">Contact Us</a> </li>
            </ul>
        </div>
        <div class="header-right">
            <div class="cart-btn">
                <a href="/customer/cart" style="text-decoration: none; color: #3b82f6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                        <circle cx="8" cy="21" r="1" />
                        <circle cx="19" cy="21" r="1" />
                        <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                    </svg>
                </a>
            </div>
            <?php if (isset($_SESSION['login_status']) && $_SESSION['login_status'] === true): ?>
                <div class="customer-profile">
                    <!-- rounded profile -->
                    <button popovertarget="profile" class="customer-rounded-profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                    </button>
                    <div class="customer-information">
                        <p><?php echo $_SESSION['customer_name']; ?></p>
                    </div>
                    <div popover id="profile" class="popover">
                        <div class="popover-items">
                            <p class="items view-profile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-user-icon lucide-circle-user">
                                    <circle cx="12" cy="12" r="10" />
                                    <circle cx="12" cy="10" r="3" />
                                    <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662" />
                                </svg>
                                <a href="/customer/dashboard" style="text-decoration: none; color: white;">View Profile</a>
                            </p>
                            <p class="items logout">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out-icon lucide-log-out">
                                    <path d="m16 17 5-5-5-5" />
                                    <path d="M21 12H9" />
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                </svg>
                                <a href="/customer/logout" style="text-decoration: none; color: white;">Logout</a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="button-container">
                    <button class="btn btn-primary">
                        <a href="/login" style="text-decoration: none; color: #fff">Sign in</a>
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>