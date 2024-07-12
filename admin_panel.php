<?php
include ('apis/user_login.php');
require 'config.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/admin_panel.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Admin Panel</title>
</head>

<body>
    <!-- List of Contact Us Form -->
    <div class="heading">
        Welcome Admin
    </div>
    <div class="logout">
        <a href="logout_admin.php" class="btn btn-primary">Logout</a>
    </div>
    <div class="table-container">
        <table class="table table-bordered table-hover border-primary ">
            <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>username</th>
                    <th>city</th>
                    <th>address</th>
                    <th>message</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $sql = "SELECT * FROM tbl_contact";
                $query_run = mysqli_query($conn, $sql);

                if ($query_run) {
                    while ($row = mysqli_fetch_array($query_run)) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                            <td>
                                <form action="delete_contact.php" method="post" style="display:inline;">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="submit" name="delete_contact" class="btn btn-danger" value="Delete">
                                </form>
                                <form action="edit_contact.php" method="post" style="display:inline;">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="submit" class="btn btn-primary" value="EDIT">
                                </form>
                            </td>
                        </tr>
                        <?php
                        $i++;
                    }
                } else {
                    echo "<tr><td colspan='6'>Record  not found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>