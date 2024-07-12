<?php
include 'config.php';
include ("apis/user_login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/account.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Contact Us</title>
</head>

<body>
    <div class="contact-container">
        <h1>My Account</h1>
        <form method="post" enctype="multipart/form-data">
            <label for="name">Name <span class="required">*</span></label>
            <input type="text" id="name" name="name" required>

            <label for="image">Image <span class="required">*</span></label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <button type="submit">Submit</button>

            <input type="hidden" name="page_action" value="my_account">
        </form>
    </div>

    <div class="second-container">
        <table class="table table-bordered table-hover border-primary ">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>image</th>
                    <th>delete</th>
                    <th>update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $query = "SELECT * FROM tbl_account";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    ?>
                    <td><?php echo $i; ?> </td>
                    <td><?php echo $row['name']; ?></td>
                    <td><img width='50px' height='30px' src='img/<?php echo $row['image']; ?>' alt=''></td>
                    <td>
                        <form action="delete_user.php" method="post" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                    <td>
                        <form action="edit_user.php" method="post" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="submit" class="btn btn-primary" value="Edit">
                        </form>
                    </td>
                    <?php
                    $i++;
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>