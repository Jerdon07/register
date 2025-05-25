<?php include '../../database/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/style.css">
    <title>Users</title>
</head>
<body>
    <div>
        <header>
            <h2>Users</h2>
            <button class="btn-add" onclick="window.location.href='./create.php';">Add</button>
            <button class="btn-logout">Logout</button>
        </header>

        <main>
            <table>
                <?php
                $result = $conn->query("SELECT * FROM users");
                while($row = $result->fetch_assoc()):
                ?>

                <tr class="row">
                    <td class="gmail"><?= $row['gmail']; ?></td>
                    <td style="width: 20px;"></td>
                    <td>
                        <button class="btn-edit" onclick="window.location.href='./update.php';">Edit</button>
                        <button class="btn-delete" onclick="window.location.href='./delete.php';">Delete</button>
                    </td>
                </tr>
                <?php endwhile; ?>
            </table>
        </main>
    </div>
</body>
</html>