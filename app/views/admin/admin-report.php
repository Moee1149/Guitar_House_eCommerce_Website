<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Business Reports & Analytics</title>
    <link rel="stylesheet" href="/public/css/admin/styles.css" />
    <link rel="stylesheet" href="/public/css/admin/sidebar.css" />
    <link rel="stylesheet" href="/public/css/admin/admin-report.css" />
</head>

<body>
    <div class="container">
        <!-- sidebar section -->
        <?php include VIEW_PATH . '/layout/admin-sidebar.php'; ?>

        <div class="main-content-container">
            <!-- header section -->
            <?php include VIEW_PATH . '/layout/admin-header.php'; ?>

            <div class="content-container">
                <h3 class="filter-label"> <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-minus-icon lucide-clipboard-minus">
                        <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                        <path d="M9 14h6" />
                    </svg> Admin Report</h3>
                <div class="report-card">
                    <div class="filters">
                        <div class="filter-section">
                            <select id="date-select">
                                <option value="daily">Today</option>
                                <option value="weekly">This Week</option>
                                <option value="monthly">This Month</option>
                                <option value="yearly">This Year</option>
                            </select>
                            <div class="date-range">
                                <input type="date" class="date-input" value="<?= $dateFrom ?>" />
                                <span style="color: #666; font-weight: 600">to</span>
                                <input type="date" class="date-input" value="<?= $dateTo ?>" />
                                <button class="apply-btn" onclick="applyFilters()"> APPLY </button>
                            </div>
                        </div>
                    </div>

                    <div class="stats-grid">
                        <div class="stat-card">
                            <span class="stat-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package-open-icon lucide-package-open">
                                    <path d="M12 22v-9" />
                                    <path d="M15.17 2.21a1.67 1.67 0 0 1 1.63 0L21 4.57a1.93 1.93 0 0 1 0 3.36L8.82 14.79a1.655 1.655 0 0 1-1.64 0L3 12.43a1.93 1.93 0 0 1 0-3.36z" />
                                    <path d="M20 13v3.87a2.06 2.06 0 0 1-1.11 1.83l-6 3.08a1.93 1.93 0 0 1-1.78 0l-6-3.08A2.06 2.06 0 0 1 4 16.87V13" />
                                    <path d="M21 12.43a1.93 1.93 0 0 0 0-3.36L8.83 2.2a1.64 1.64 0 0 0-1.63 0L3 4.57a1.93 1.93 0 0 0 0 3.36l12.18 6.86a1.636 1.636 0 0 0 1.63 0z" />
                                </svg></span>
                            <div class="stat-number"><?= $productcount ?></div>
                            <div class="stat-label">Products Added</div>
                            <div class="stat-period"> +15% from last month </div>
                        </div>
                        <div class="stat-card">
                            <span class="stat-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                                    <circle cx="8" cy="21" r="1" />
                                    <circle cx="19" cy="21" r="1" />
                                    <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                                </svg>
                            </span>
                            <div class="stat-number"><?= $product_sold ?></div>
                            <div class="stat-label">Products Sold</div>
                            <div class="stat-period"> +15% from last month </div>
                        </div>

                        <div class="stat-card">
                            <span class="stat-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign-icon lucide-dollar-sign">
                                    <line x1="12" x2="12" y1="2" y2="22" />
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                                </svg>
                            </span>
                            <div class="stat-number"><?= $totalRevenue ?></div>
                            <div class="stat-label">Total Revenue</div>
                            <div class="stat-period"> +22% from last month </div>
                        </div>
                    </div>

                    <div class="report-section">
                        <h3 class="section-title"> 🔥 Most Viewed Products </h3>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Rank</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($mostViewedProducts)): ?>
                                        <?php $i = 1;
                                        foreach ($mostViewedProducts as $product) : ?>
                                            <tr>
                                                <td> <span class="rank-badge">#<?= $i ?></span> </td>
                                                <td>
                                                    <div class="product-info">
                                                        <?php if (!empty($product['image'])): ?>
                                                            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['product_name']; ?>" class="product-image">
                                                        <?php else: ?>
                                                            <div class="product-image-placeholder">IMG</div>
                                                        <?php endif; ?>
                                                        <div class="product-details">
                                                            <h3><?php echo htmlspecialchars($product['product_name']); ?></h3>
                                                            <div class="product-id">prod<?php echo str_pad($product['product_id'], 3, '0', STR_PAD_LEFT); ?></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?= $product['name'] ?></td>
                                                <td><strong><?= $product['review_count'] ?></strong></td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="4" style="text-align: center;">No data available.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="report-section">
                        <h3 class="section-title">
                            💼 Recent Transactions
                        </h3>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Date</th>
                                        <th>Customer</th>
                                        <th>Product</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($transactionsReport)): ?>
                                        <?php foreach ($transactionsReport as $transaction): ?>
                                            <tr>
                                                <td><strong><?= $transaction['order_id'] ?></strong></td>
                                                <td><?= $transaction['order_date'] ?></td>
                                                <td><?= $transaction['customer_name'] ?></td>
                                                <td><?= $transaction['product_name'] ?></td>
                                                <td><strong>$<?= $transaction['total_amount'] ?></strong></td>
                                                <td>
                                                    <span class="status <?= $transaction['status'] == 'delivered' ? 'completed' : 'pending' ?>"><?= $transaction['status'] ?></span>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="6" style="text-align: center;">No data available.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dateSelect = document.getElementById('date-select');
            const params = new URLSearchParams(window.location.search);

            // Set selected value from URL params
            if (params.has('period')) {
                dateSelect.value = params.get('period');
            }

            function updateReport() {
                const date = dateSelect.value;
                const newParams = new URLSearchParams(window.location.search);

                newParams.set('period', date);
                newParams.delete('startDate');
                newParams.delete('endDate');

                window.location.search = newParams.toString();
            }

            dateSelect.addEventListener('change', updateReport);
        });

        function applyFilters() {
            const startDate = document.querySelector(".date-input:first-of-type", ).value;
            const endDate = document.querySelector(".date-input:last-of-type", ).value;
            console.log(`Start Date: ${startDate}, End Date: ${endDate}`)
            const newParams = new URLSearchParams(window.location.search);
            newParams.set('startDate', startDate);
            newParams.set('endDate', endDate);
            window.location.search = newParams.toString();
        }

        // Add smooth scrolling to sections
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener("click", function(e) {
                e.preventDefault();
                const target = document.querySelector(
                    this.getAttribute("href"),
                );
                if (target) {
                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start",
                    });
                }
            });
        });
    </script>
</body>

</html>