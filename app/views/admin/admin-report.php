<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Business Reports & Analytics</title>
    <link rel="stylesheet" href="/public/css/admin/styles.css" />
    <link rel="stylesheet" href="/public/css/admin/sidebar.css" />
    <style>
        .content-container {
            overflow-y: auto;
            padding: 10px 20px;
        }

        .content-header {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .content-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .report-card {
            backdrop-filter: blur(15px);
            border-radius: 20px;
            margin-bottom: 30px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .page-title {
            font-size: 2rem;
            margin-bottom: 30px;
            position: relative;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .product-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .product-image {
            width: 48px;
            height: 48px;
            border-radius: 8px;
            background-color: #64748b;
            object-fit: cover;
            flex-shrink: 0;
        }

        .product-id {
            font-size: 12px;
            color: #94a3b8;
        }

        .product-image-placeholder {
            width: 48px;
            height: 48px;
            border-radius: 8px;
            background-color: #64748b;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #cbd5e1;
            font-size: 12px;
            flex-shrink: 0;
        }

        .product-details h3 {
            font-size: 14px;
            font-weight: 500;
            color: #f1f5f9;
            margin-bottom: 2px;
            margin-top: -5px;
        }


        .filters {
            background: linear-gradient(135deg, #f8f9ff 0%, #e8eeff 100%);
            padding: 30px;
            border-radius: 16px;
            margin-bottom: 35px;
            border: 2px solid rgba(102, 126, 234, 0.1);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.08);
        }

        .filter-section {
            margin-bottom: 20px;
        }

        .filter-section:last-child {
            margin-bottom: 0;
        }

        .filter-label {
            font-weight: 700;
            color: #333;
            font-size: 0.95rem;
            margin-bottom: 12px;
            display: block;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .filter-buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .filter-btn {
            background: linear-gradient(135deg, #10b981, #059669);
            border: none;
            border-radius: 8px;
            padding: 8px 10px;
            color: white;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: opacity 0.2s;
        }

        .filter-btn:hover {
            opacity: 0.9;
        }

        .date-range {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .date-input {
            padding: 12px 16px;
            border: 2px solid #e1e5f0;
            border-radius: 10px;
            font-size: 14px;
            outline: none;
            font-weight: 500;
            transition: all 0.3s ease;
            background-color: #ddd;
            color: #333;
        }

        .date-input:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.15);
            transform: translateY(-2px);
        }

        .apply-btn {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            padding: 13px 28px;
            border-radius: 10px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 14px;
        }

        .apply-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: var(--bg-secondary);
            padding: 15px 0;
            border-radius: 16px;
            text-align: center;
            border: 2px solid rgba(102, 126, 234, 0.1);
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .stat-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.15);
            border-color: rgba(102, 126, 234, 0.3);
        }

        .stat-icon {
            margin-top: 10px;
            display: block;
            filter: drop-shadow(0 2px 4px rgba(102, 126, 234, 0.2));
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: #333;
            margin-bottom: 8px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-label {
            font-size: 0.95rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-period {
            font-size: 0.85rem;
            color: #999;
            font-weight: 500;
        }

        .report-section {
            margin-bottom: 45px;
        }

        .section-title {
            font-size: 1.6rem;
            color: #333;
            display: inline-block;
            font-weight: 700;
            color: white;
        }

        /*table styling*/
        .table-container table {
            margin-bottom: 20px;
        }

        /* Table Styling - Add this to your existing CSS file */

        .table-container table {
            width: 100%;
            background-color: #1e293b;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            border-collapse: collapse;
            border: none;
        }

        .table-container table thead {
            background-color: #334155;
        }

        .table-container table th {
            padding: 16px 20px;
            font-weight: 500;
            font-size: 14px;
            color: #cbd5e1;
            text-align: left;
            border: none;
            border-bottom: 1px solid #475569;
        }

        .table-container table tbody tr {
            background-color: #1e293b;
            transition: background-color 0.2s ease;
            border-bottom: 1px solid #334155;
        }

        .table-container table tbody tr:hover {
            background-color: #334155;
        }

        .table-container table tbody tr:last-child {
            border-bottom: none;
        }

        .table-container table td {
            padding: 16px 20px;
            font-size: 14px;
            color: #cbd5e1;
            border: none;
            vertical-align: middle;
        }

        .table-container table td:first-child {
            color: #94a3b8;
            font-weight: 500;
        }

        .table-container table td:nth-child(2) {
            color: #f1f5f9;
            font-weight: 500;
        }

        .table-container table td:nth-child(3) {
            color: #cbd5e1;
        }

        .status {
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: inline-block;
        }

        .status.completed {
            background: linear-gradient(135deg, #d4edda, #c3e6cb);
            color: #155724;
            box-shadow: 0 2px 8px rgba(21, 87, 36, 0.2);
        }

        .status.pending {
            background: linear-gradient(135deg, #fff3cd, #ffeaa7);
            color: #856404;
            box-shadow: 0 2px 8px rgba(133, 100, 4, 0.2);
        }

        .rank-badge {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.8rem;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- sidebar section -->
        <?php include VIEW_PATH . '/layout/admin-sidebar.php'; ?>

        <div class="main-content-container">
            <!-- header section -->
            <?php include VIEW_PATH . '/layout/admin-header.php'; ?>

            <div class="content-container">
                <div class="report-card">
                    <h2 class="page-title">BUSINESS REPORTS & ANALYTICS</h2>

                    <div class="filters">
                        <div class="filter-section">
                            <div class="filter-label">Report Filters</div>
                            <div class="filter-label">TIME PERIOD</div>
                            <div class="filter-buttons">
                                <button class="filter-btn active" onclick="setTimePeriod('daily', this)"> DAILY </button>
                                <button class="filter-btn" onclick="setTimePeriod('weekly', this)"> WEEKLY </button>
                                <button class="filter-btn" onclick="setTimePeriod('monthly', this)"> MONTHLY </button>
                                <button class="filter-btn" onclick="setTimePeriod('custom', this)"> CUSTOM </button>
                            </div>
                        </div>

                        <div class="filter-section">
                            <div class="filter-label">DATE RANGE</div>
                            <div class="date-range">
                                <input type="date" class="date-input" value="2024-01-01" />
                                <span style="color: #666; font-weight: 600">to</span>
                                <input type="date" class="date-input" value="2024-01-31" />
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-indian-rupee-icon lucide-indian-rupee">
                                    <path d="M6 3h12" />
                                    <path d="M6 8h12" />
                                    <path d="m6 13 8.5 8" />
                                    <path d="M6 13h3" />
                                    <path d="M9 13c6.667 0 6.667-10 0-10" />
                                </svg>
                            </span>
                            <div class="stat-number">$12,450</div>
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
                                            <td><?= $product['category_name'] ?></td>
                                            <td><strong><?= $product['review_count'] ?></strong></td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
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
                                    <?php foreach ($transcationsReport as $transaction): ?>
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
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function setTimePeriod(period, element) {
            // Remove active class from all buttons
            document.querySelectorAll(".filter-btn").forEach((btn) => {
                btn.classList.remove("active");
            });

            // Add active class to clicked button
            element.classList.add("active");

            // Update date inputs based on period
            const today = new Date();
            const startDate = document.querySelector(
                ".date-input:first-of-type",
            );
            const endDate = document.querySelector(
                ".date-input:last-of-type",
            );

            switch (period) {
                case "daily":
                    startDate.value = today.toISOString().split("T")[0];
                    endDate.value = today.toISOString().split("T")[0];
                    break;
                case "weekly":
                    const weekAgo = new Date(
                        today.getTime() - 7 * 24 * 60 * 60 * 1000,
                    );
                    startDate.value = weekAgo.toISOString().split("T")[0];
                    endDate.value = today.toISOString().split("T")[0];
                    break;
                case "monthly":
                    const monthAgo = new Date(
                        today.getFullYear(),
                        today.getMonth() - 1,
                        today.getDate(),
                    );
                    startDate.value = monthAgo.toISOString().split("T")[0];
                    endDate.value = today.toISOString().split("T")[0];
                    break;
                case "custom":
                    // Let user select custom dates
                    break;
            }

            console.log(`Time period set to: ${period}`);
        }

        function applyFilters() {
            const startDate = document.querySelector(
                ".date-input:first-of-type",
            ).value;
            const endDate = document.querySelector(
                ".date-input:last-of-type",
            ).value;
            const activePeriod =
                document.querySelector(".filter-btn.active").textContent;

            console.log(
                `Applying filters - Period: ${activePeriod}, From: ${startDate}, To: ${endDate}`,
            );

            // Add loading animation
            const applyBtn = document.querySelector(".apply-btn");
            const originalText = applyBtn.textContent;
            applyBtn.textContent = "LOADING...";
            applyBtn.disabled = true;

            // Simulate API call
            setTimeout(() => {
                applyBtn.textContent = originalText;
                applyBtn.disabled = false;

                // Show success message
                const successMsg = document.createElement("div");
                successMsg.textContent = "Filters applied successfully!";
                successMsg.style.cssText = `
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    background: linear-gradient(135deg, #28a745, #20c997);
                    color: white;
                    padding: 15px 25px;
                    border-radius: 10px;
                    font-weight: 600;
                    box-shadow: 0 5px 15px rgba(40,167,69,0.3);
                    z-index: 1000;
                    animation: fadeInUp 0.3s ease-out;
                `;
                document.body.appendChild(successMsg);

                setTimeout(() => {
                    successMsg.remove();
                }, 3000);
            }, 1000);
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