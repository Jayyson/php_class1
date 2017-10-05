<?php
    require_once('database.php');

    // Get category ID
    if(!isset($category_id)) {
        $category_id = $_GET['category_id'];
        if (!isset($category_id)) {
            $category_id = 1;
        }
    }

    // Get name for current category
    $query = 'SELECT firstName, lastName from customers orde by lastName';
    $customers = $db->query($customers);
    
    $query = "SELECT * FROM categories
              WHERE categoryID = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];

    // Get all categories
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $categories = $db->query($query);

    // Get products for selected category
    $query = "SELECT * FROM products
              WHERE categoryID = $category_id
              ORDER BY productID";
    $products = $db->query($query);
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>Product Manager</h1>
    </div>

    <div id="main">

        <h1>Product List</h1>


        <div id="content">
            <!-- display a table of products -->
            <h2><?php echo $category_name; ?></h2>
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Full Name</th>
                    
                </tr>
                <?php foreach ($customers as $customers) : ?>
                <tr>
                    <td><?php echo $product['firstName']; ?></td>
                    <td><?php echo $product['lastName']; ?></td>
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