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
            background: linear-gradient(135deg, #fff 0%, #f8f9ff 100%);
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
            font-size: 3rem;
            margin-bottom: 15px;
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
            margin-bottom: 25px;
            padding-bottom: 12px;
            display: inline-block;
            font-weight: 700;
            color: white;
        }

        .table-container {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(102, 126, 234, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #eee;
            color: #333;
        }

        thead {
            background-color: #fff;
            color: #333;
        }

        th,
        td {
            padding: 18px 16px;
            text-align: left;
            border-bottom: 1px solid rgba(102, 126, 234, 0.1);
        }

        th {
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 0.85rem;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        tbody tr {
            transition: all 0.3s ease;
        }

        tbody tr:hover {
            background: linear-gradient(135deg, #f8f9ff 0%, #e8eeff 100%);
            transform: scale(1.01);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.1);
        }

        tbody tr:nth-child(even) {
            background: rgba(102, 126, 234, 0.03);
        }

        tbody tr:nth-child(even):hover {
            background: linear-gradient(135deg, #f8f9ff 0%, #e8eeff 100%);
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

        .export-section {
            background: linear-gradient(135deg, #f8f9ff 0%, #e8eeff 100%);
            padding: 35px;
            border-radius: 16px;
            text-align: center;
            border: 2px solid rgba(102, 126, 234, 0.1);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.08);
        }

        .export-title {
            font-size: 1.4rem;
            color: #333;
            margin-bottom: 25px;
            font-weight: 700;
        }

        .export-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .export-btn {
            background: white;
            border: 2px solid #667eea;
            color: #667eea;
            padding: 15px 30px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 700;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 14px;
        }

        .export-btn:hover {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
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

        @media (max-width: 768px) {
            .container {
                padding: 0 10px;
            }

            .report-card {
                padding: 25px;
            }

            .page-title {
                font-size: 1.8rem;
            }

            .filters {
                padding: 20px;
            }

            .filter-buttons {
                flex-direction: column;
                gap: 8px;
            }

            .filter-btn {
                text-align: center;
            }

            .date-range {
                flex-direction: column;
                align-items: stretch;
            }

            .stats-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .export-buttons {
                flex-direction: column;
                align-items: center;
            }

            table {
                font-size: 0.85rem;
            }

            th,
            td {
                padding: 12px 8px;
            }

            .section-title {
                font-size: 1.3rem;
            }
        }

        /* Animation for loading */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .report-card {
            animation: fadeInUp 0.6s ease-out;
        }

        .stat-card:nth-child(1) {
            animation: fadeInUp 0.7s ease-out;
        }

        .stat-card:nth-child(2) {
            animation: fadeInUp 0.8s ease-out;
        }

        .stat-card:nth-child(3) {
            animation: fadeInUp 0.9s ease-out;
        }

        .stat-card:nth-child(4) {
            animation: fadeInUp 1s ease-out;
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
                            <span class="stat-icon">📦</span>
                            <div class="stat-number">89</div>
                            <div class="stat-label">Products Sold</div>
                            <div class="stat-period"> +15% from last month </div>
                        </div>

                        <div class="stat-card">
                            <span class="stat-icon">💳</span>
                            <div class="stat-number">156</div>
                            <div class="stat-label">Transactions</div>
                            <div class="stat-period"> +12% from last month </div>
                        </div>

                        <div class="stat-card">
                            <span class="stat-icon">💰</span>
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
                                        <th>Conversion Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="rank-badge">#1</span>
                                        </td>
                                        <td>
                                            <strong>
                                                Vault RG1 Soloist Premium
                                                Electric Guitar</strong>
                                        </td>
                                        <td>Hollow Body</td>
                                        <td><strong>458</strong></td>
                                        <td>
                                            <span
                                                style="
                                                        color: #28a745;
                                                        font-weight: 600;
                                                    ">17%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="rank-badge">#2</span>
                                        </td>
                                        <td>
                                            <strong>Fender Squier Sonic
                                                Stratocaster Electric
                                                Guitar</strong>
                                        </td>
                                        <td>Gaming</td>
                                        <td><strong>408</strong></td>
                                        <td>
                                            <span
                                                style="
                                                        color: #28a745;
                                                        font-weight: 600;
                                                    ">15%</span>
                                        </td>
                                    </tr>
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
                                    <tr>
                                        <td><strong>FTN-002567</strong></td>
                                        <td>2024-01-18</td>
                                        <td>Aayusha Aadhikari</td>
                                        <td>
                                            Vault RG1 Soloist Premium
                                            Electric Guitar
                                        </td>
                                        <td><strong>$249</strong></td>
                                        <td>
                                            <span class="status completed">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>FTN-002568</strong></td>
                                        <td>2024-01-17</td>
                                        <td>Anima Dahal</td>
                                        <td>
                                            Vault RG1 Soloist Premium
                                            Electric Guitar
                                        </td>
                                        <td><strong>$299</strong></td>
                                        <td>
                                            <span class="status completed">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>FTN-002569</strong></td>
                                        <td>2024-01-16</td>
                                        <td>Bibash Basnet</td>
                                        <td>
                                            Vault RG1 Soloist Premium
                                            Electric Guitar
                                        </td>
                                        <td><strong>$349</strong></td>
                                        <td>
                                            <span class="status completed">Completed</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="export-section">
                        <h3 class="export-title">📄 Export Reports</h3>
                        <div class="export-buttons">
                            <a href="#" class="export-btn" onclick="exportReport('excel')"> 📊 <span>Excel</span> </a>
                            <a href="#" class="export-btn" onclick="exportReport('pdf')"> 📋 <span>PDF</span> </a>
                            <a href="#" class="export-btn" onclick="exportReport('csv')"> 📄 <span>CSV</span> </a>
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

        function exportReport(format) {
            console.log(`Exporting report in ${format} format`);

            // Simulate export
            const exportMsg = document.createElement("div");
            exportMsg.textContent = `Exporting to ${format.toUpperCase()}...`;
            exportMsg.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: linear-gradient(135deg, #667eea, #764ba2);
                color: white;
                padding: 15px 25px;
                border-radius: 10px;
                font-weight: 600;
                box-shadow: 0 5px 15px rgba(102,126,234,0.3);
                z-index: 1000;
                animation: fadeInUp 0.3s ease-out;
            `;
            document.body.appendChild(exportMsg);

            setTimeout(() => {
                exportMsg.textContent = `Report exported successfully!`;
                setTimeout(() => {
                    exportMsg.remove();
                }, 2000);
            }, 1500);
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

        // Add hover effects to table rows
        document.querySelectorAll("tbody tr").forEach((row) => {
            row.addEventListener("mouseenter", function() {
                this.style.transform = "scale(1.02)";
            });

            row.addEventListener("mouseleave", function() {
                this.style.transform = "scale(1)";
            });
        });

        // Initialize with daily period
        document.addEventListener("DOMContentLoaded", function() {
            console.log("Admin Reports Dashboard loaded successfully");
        });
    </script>
</body>

</html>