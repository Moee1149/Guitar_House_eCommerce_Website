<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar House | User Mgmt</title>
    <link rel="stylesheet" href="/public/css/admin/styles.css" />
    <link rel="stylesheet" href="/public/css/admin/sidebar.css" />
    <link rel="stylesheet" href="/public/css/admin/admin-user-mgmt.css" />
</head>

<body>
    <div class="container">
        <!-- sidebar section -->
        <?php include VIEW_PATH . '/layout/admin-sidebar.php'; ?>

        <div class="main-content-container">
            <!-- header section -->
            <?php include VIEW_PATH . '/layout/admin-header.php'; ?>

            <div class="customer-page-container">
                <?php echo isset($_SESSION['msg']) ? "<p class='msg-box'>" . $_SESSION['msg'] . "</p>" : '';  ?>
                <div class="customer_mgmt">
                    <h1 class="page-title">Admin Users List</h1>
                    <?php if ($users): ?>
                        <table border="1" cellspacing="0" cellpadding="6">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>user_id</th>
                                    <th>Fullname</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>E-Mail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                while ($row = mysqli_fetch_assoc($users)): ?>
                                    <tr>
                                        <td><?php echo $i; ?>. </td>
                                        <td><?= $row['user_id'] ?></td>
                                        <td><?php echo $row['user_name']; ?></td>
                                        <td><?= $row['phone'] ?></td>
                                        <td><?= $row['address'] ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td>
                                            <a href="/admin/user-mgmt/user-edit?user_id=<?php echo $row['user_id']; ?>" title="Edit">Edit</a>
                                            <a href="/admin/user-mgmt/user-delete?user_id=<?php echo $row['user_id']; ?>" title="Delete">Delete</a>
                                        </td>
                                    </tr>
                                <?php $i++;
                                endwhile; ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <p class="msg-box">Oops! data not found.</p>
                    <?php endif; ?>
                    <a href="/admin/user-mgmt" title="Back to Home" class="text-link">&larr;Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script links -->
    <script src="./public/scripts.js" type="text/javascript"></script>
</body>

</html>
<?php unset($_SESSION["msg"]) ?>