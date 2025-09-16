<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | Contact Us</title>
    <link rel="stylesheet" href="/public/css/styles.css" />
    <style>
        .main-container {
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .notfound-container {
            max-width: 1200px;
            text-align: center;
            padding: 3rem 2rem;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 3rem;
        }

        .error-code {
            font-size: 6rem;
            font-weight: 700;
            color: #64748b;
            margin-bottom: 1rem;
        }

        .notfound-container h1 {
            font-size: 2rem;
            font-weight: 600;
            color: white;
            margin-bottom: 1rem;
        }

        .description {
            font-size: 1.1rem;
            color: #64748b;
            margin-bottom: 2rem;
            max-width: 480px;
            margin-left: auto;
            margin-right: auto;
        }

        .actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border-radius: 6px;
            font-weight: 500;
            text-decoration: none;
            border: 1px solid transparent;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.2s ease;
        }

        .btn-primary {
            background-color: #3b82f6;
            color: white;
            border-color: #3b82f6;
        }

        .btn-primary:hover {
            background-color: #2563eb;
            border-color: #2563eb;
        }

        .btn-secondary {
            background-color: transparent;
            color: #64748b;
            border-color: #d1d5db;
        }

        .btn-secondary:hover {
            background-color: #f1f5f9;
            border-color: #94a3b8;
        }

        .help-section {
            text-align: left;
        }

        .help-section h2 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .help-list {
            list-style: none;
            padding: 0;
        }

        .help-list li {
            padding: 0.5rem 0;
        }

        .help-list li:before {
            content: "•";
            font-weight: bold;
            display: inline-block;
            width: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- header section -->
        <?php include VIEW_PATH . '/layout/header.php' ?>

        <!-- main section -->
        <main class="main-container">
            <div class="notfound-container">
                <div>
                    <div class="error-code">404</div>
                    <h1>Page Not Found</h1>
                    <p class="description">
                        Sorry, we couldn't find the page you're looking for.
                        The page may have been moved, deleted, or the URL might be incorrect.
                    </p>

                    <div class="actions">
                        <a href="/" class="btn btn-primary">Go to Homepage</a>
                    </div>
                </div>

                <div class="help-section">
                    <h2>What you can do:</h2>
                    <ul class="help-list">
                        <li>Check the URL for any typos or errors</li>
                        <li>Use the navigation menu to find what you're looking for</li>
                        <li>Visit our homepage to start over</li>
                        <li>Contact us if you think this is a mistake</li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
</body>

</html>