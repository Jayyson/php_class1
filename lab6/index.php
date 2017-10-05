<?php
    require_once('database.php');

    // Get category ID
 
    $query = 'SELECT firstName, lastName from customers order by lastName';
    $customers = $db->query($query);



?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>Customers</h1>
    </div>

    <div id="main">

        <h1>FirstName/LastName</h1>



        <div id="content">
            <!-- display a table of products -->
            <h2><?php echo $lastName; ?></h2>
            <table>
                <tr>
                    <th>firstName</th>
                    <th>lastName</th>
                    
                    
                </tr>
                <?php foreach ($customers as $customers) : ?>
                <tr>
                    <td><?php echo $customers['firstName']; ?></td>
                    <td><?php echo $customers['lastName']; ?></td>

                    
                </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>

    <div id="footer">
        <p>&copy; <?php echo date("Y"); ?> My Shop, Inc.</p>
    </div>

    </div><!-- end page -->
</body>
</html>