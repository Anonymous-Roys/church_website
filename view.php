<?php
    require_once("conn.php");
    $query = "SELECT * FROM sender";
    $result = mysqli_query($conn, $query);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senders</title>
    <!-- Link the custom CSS file -->
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="bg_img.jpeg">
</head>

<body>
<nav>
            <img src="images/fresh_logo.png" alt="UMaT_logo">
            <ul>
                <li><a href="benedict.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="view.php">View_Message</a></li>
            </ul>
        </nav>
    <div class="container">
        <h1>Senders</h1>
        <h2><a href="contact.php">+ Send another message</a></h2>
        <table>
            <thead>
                <tr>
                    <th>Sender Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $message = $row['message'];
                ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $message ?></td>
                        <td> 
                            <a class="delete" href="delete.php?Del=<?php echo $id ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
