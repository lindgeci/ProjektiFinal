<?php
include "database.php";
include_once "CRUDAT_PER_USER.php";

$strep = new CRUDAT_PER_USER();
$Users = $strep->getallUsers();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

          table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        } 

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #4CAF50;
            color: white;
        } 
        /* @media (max-width: 700px) {
            table {
                width: 100%;
            }
        }

        .goback {
            margin-top: 20px;
        } */
    </style>
    <title>User List</title>
    
</head>

<body>
        
    <table>
        <thead>
            <tr>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Users as $User) { ?>
                <tr>
                    <td><?php echo $User["Name"]; ?></td>
                    <td><?php echo $User["Surname"]; ?></td>
                    <td><?php echo $User["Email"]; ?></td>
                    <td><?php echo $User["Password"]; ?></td>
                    <td><a href='editUser.php?id=<?= $User["id"] ?>'>Edit</a></td>
                    <td><a href='deleteuser.php?id=<?= $User["id"] ?>'>Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="goback">
        <a href="index.php">GO BACK</a>
    </div>

</body>

</html>
