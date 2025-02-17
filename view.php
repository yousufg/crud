<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
include("auth.php");
require('db.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>View Records</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="form">
        <p><a href="index.php">Home</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a>
        </p>
        <h2>View Records</h2>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th><strong>S.No</strong></th>
                    <th><strong>Name</strong></th>
                    <th><strong>Age</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 1;
                $sel_query = "Select * from new_record ORDER BY id desc;";
                $result = mysqli_query($con, $sel_query);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td align="center"><?php echo $count; ?></td>
                        <td align="center"><?php echo $row["name"]; ?></td>
                        <td align="center"><?php echo $row["age"]; ?></td>
                        <td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                        <td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                    </tr>
                    <?php $count++;
                } ?>
            </tbody>
        </table>

        <br /><br /><br /><br />
        <a href="https://www.allphptricks.com/insert-view-edit-and-delete-record-from-database-using-php-and-mysqli/">Tutorial
            Link</a> <br /><br />
        For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/">AllPHPTricks.com</a>

        <p>I spent several hours to create this tutorial, if you want to say thanks so like my pages on <a
                href="https://www.facebook.com/allphptricks/" target="_blank">Facebook</a> &amp; <a
                href="https://www.twitter.com/allphptricks/" target="_blank">Twitter</a> and leave your <a
                href="https://www.facebook.com/pg/allphptricks/reviews/" target="_blank">reviews here on Facebook</a>.
        </p>

    </div>
</body>

</html>