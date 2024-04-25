<!--Order confirmation / shipping-->
<?php include ("jfs-header.php")?>
<!-- Calculate the total of all products + tax
gather the user's address/location info, payment, etc
First/last name | shipping address | ZIP code | city | state
-->
<?php
$zipcode = filter_input(INPUT_POST, "zipcode", FILTER_VALIDATE_INT);
$state = filter_input(INPUT_POST, "state");
$to_address = filter_input(INPUT_POST, "to_address");
$name = filter_input(INPUT_POST, "name");
$city = filter_input(INPUT_POST, "city");

$quantity1lb = filter_input(INPUT_POST, "quantity1lb", FILTER_VALIDATE_INT); //1.10
$quantity1oz = filter_input(INPUT_POST, "quantity1oz", FILTER_VALIDATE_INT); 
$quantity2lb = filter_input(INPUT_POST, "quantity2lb", FILTER_VALIDATE_INT); //2.20
$quantity2oz = filter_input(INPUT_POST, "quantity2oz", FILTER_VALIDATE_INT); 
$quantity3lb = filter_input(INPUT_POST, "quantity3lb", FILTER_VALIDATE_INT); //0.32
$quantity3oz = filter_input(INPUT_POST, "quantity3oz", FILTER_VALIDATE_INT);
$quantity4lb = filter_input(INPUT_POST, "quantity4lb", FILTER_VALIDATE_INT); //1.28
$quantity4oz = filter_input(INPUT_POST, "quantity4oz", FILTER_VALIDATE_INT);
$quantity5 = filter_input(INPUT_POST, "quantity5", FILTER_VALIDATE_INT); //2.99
$quantity6 = filter_input(INPUT_POST, "quantity6", FILTER_VALIDATE_INT); //2.99
$quantity7 = filter_input(INPUT_POST, "quantity7", FILTER_VALIDATE_INT); //1.69
$quantity8 = filter_input(INPUT_POST, "quantity8", FILTER_VALIDATE_INT); //1.45
$quantity9 = filter_input(INPUT_POST, "quantity9", FILTER_VALIDATE_INT); //1.45
$quantity10 = filter_input(INPUT_POST, "quantity10", FILTER_VALIDATE_INT); //8.50
$quantity11 = filter_input(INPUT_POST, "quantity11", FILTER_VALIDATE_INT); //6.10
$quantity12lb = filter_input(INPUT_POST, "quantity12lb", FILTER_VALIDATE_INT); //12.00
$quantity12oz = filter_input(INPUT_POST, "quantity12oz", FILTER_VALIDATE_INT); 
$quantity13 = filter_input(INPUT_POST, "quantity13", FILTER_VALIDATE_INT); //12.40
$quantity14 = filter_input(INPUT_POST, "quantity14", FILTER_VALIDATE_INT); //7.80
$quantity15 = filter_input(INPUT_POST, "quantity15", FILTER_VALIDATE_INT); //2.20

$subtotal = $quantity1lb*1.10 + $quantity1oz*1.10/16 + $quantity2lb*2.20 + $quantity2oz*2.20/16 + $quantity3lb*0.32 + $quantity3oz*0.02 + $quantity4lb*1.28 + $quantity4oz*0.08 + $quantity5*2.99 + $quantity6*2.99 + $quantity7*1.69 + $quantity8*1.45 + $quantity9*1.45 + $quantity10*8.50 + $quantity11*6.10 + $quantity12lb*12.00 + $quantity12oz*12.00/16 + $quantity13*12.40 + $quantity14*7.80 + $quantity15*2.20;
$tax = $subtotal * 0.06625;
$total = $subtotal + $tax;

$subtotal_f = "$" . number_format($subtotal, 2);
$tax_f = "$" . number_format($tax, 2);
$total_f = "$" . number_format($total, 2);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Confirm Your Order</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="jfs-stylesheet.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <h1>Confirm Your Order</h1>
        <h4>Input your information and have your order shipped.</h4>
    </head>
    <body>
        <div id="receipt">
        <p>Subtotal: <?php echo $subtotal_f; ?></p>
        <p>Tax: <?php echo $tax_f; ?></p>
        <p>Total: <?php echo $total_f; ?></p>

        <form action="jfs-home.php" method="post">
            <label for="zipcode">ZIP Code:</label>
            <input type="text" name="zipcode" id="zipcode" required/><br>

            <label for="state">State:</label>
            <input type="text" name="state" id="state" required/><br>

            <label for="city">City:</label>
            <input type="text" name="city" id="city" required/><br>

            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required/><br>

            <label for="recipient">Customer's Name:</label>
            <input type="text" name="recipient" id="recipient" required/><br>

            <input type="submit" value="Confirm and Ship"/>
        </form>
        <div>
    </body>
</html>
<?php include ("jfs-footer.php")?>
<!-- Developer: Joseph Muszynski - IS 117 - Spring 2024 -->
