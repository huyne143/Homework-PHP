<?php
// Import the Product class
require_once('entities/product.class.php');
?>
<?php
// Include the header file
include_once('header.php');

// Retrieve a list of products from the database
$prods = Product::list_product();
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table border="1" class="table">
                <tr>
                    <td>Picture</td>
                    <td>Product Name</td>
                    <td>CateID</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Description</td>
                </tr>
                <?php
                // Loop through each product and display its details in a table row
                foreach ($prods as $item) {
                ?>
                <tr>
                    <td><?php echo $item['Picture']?></td>
                    <td><?php echo $item['ProductName']?></td>
                    <td><?php echo $item['CateID']?></td>
                    <td><?php echo $item['Price']?></td>
                    <td><?php echo $item['Quantity']?></td>
                    <td><?php echo $item['Description']?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<?php
// Include the footer file
include_once('footer.php');
?>
