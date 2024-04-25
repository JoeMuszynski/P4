<!--Order placing page-->
<?php
 include ("jfs-header.php");
 if (!isset($quantity1lb)) {$quantity1lb = 0;}
 if (!isset($quantity1oz)) {$quantity1oz = 0;}
 if (!isset($quantity2lb)) {$quantity2lb = 0;}
 if (!isset($quantity2oz)) {$quantity2oz = 0;}
 if (!isset($quantity3lb)) {$quantity3lb = 0;}
 if (!isset($quantity3oz)) {$quantity3oz = 0;}
 if (!isset($quantity4lb)) {$quantity4lb = 0;}
 if (!isset($quantity4oz)) {$quantity4oz = 0;}
 if (!isset($quantity5)) {$quantity5 = 0;}
 if (!isset($quantity6)) {$quantity6 = 0;}
 if (!isset($quantity7)) {$quantity7 = 0;}
 if (!isset($quantity8)) {$quantity8 = 0;}
 if (!isset($quantity9)) {$quantity9 = 0;}
 if (!isset($quantity10)) {$quantity10 = 0;}
 if (!isset($quantity11)) {$quantity11 = 0;}
 if (!isset($quantity12lb)) {$quantity12lb = 0;}
 if (!isset($quantity12oz)) {$quantity12oz = 0;}
 if (!isset($quantity13)) {$quantity13 = 0;}
 if (!isset($quantity14)) {$quantity14 = 0;}
 if (!isset($quantity15)) {$quantity15 = 0;}?>
<!-- more or less the products page with prices and inputs for quantities
Number type inputs, integers for units and lb/oz. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ordering Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="jfs-stylesheet.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <h1>Place an Order</h1>
    <h4>Weighted products are limited to 10 lb. 15 oz. per order, quantified products are limited to 10 per order.</h4>
</head>
<body>
    <div id="buying-list">
    <form action="jfs-confirm.php" method="post">
    <ul style="list-style-type:none;">
        <input type="submit" value="Submit and Confirm"/>
        <!--Weight inputs for 1, 2, 3, 4, 12 - Quantity inputs for products 5, 6, 7, 8, 9, 10, 11, 13, 14, 15-->
        <li><p> <img src="https://mediaproxy.salon.com/width/1200/https://media2.salon.com/2023/08/red_delicious_apples_1197003466.jpg" alt="product 1" height="20%"><br>Red Delicious Apples - $1.10/lb
        <br><input type="number" id="quantity1lb" name="quantity1lb" min="0" max="10" value="<?php echo htmlspecialchars($quantity1lb);?>"> lb. 
        <br><input type="number" id="quantity1oz" name="quantity1oz" min="0" max="15" value="<?php echo htmlspecialchars($quantity1oz);?>"> oz. </p></li>

        <li><p> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRU8bqVtRb-WOnAU33mAv2ltyqAXUBdeETgow&s" alt="product 2" height="20%"><br>Blood Oranges - $2.20/lb
        <br><input type="number" id="quantity2lb" name="quantity2lb" min="0" max="10" value="<?php echo htmlspecialchars($quantity2lb);?>"> lb. 
        <br><input type="number" id="quantity2oz" name="quantity2oz" min="0" max="15" value="<?php echo htmlspecialchars($quantity2oz);?>"> oz. </p></li>

        <li><p> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjfAymaiGCqfrHYeU5fw1pgZzcB2NPw4WbhA&s" alt="product 3" height="20%"><br>Watermelon - $0.32/lb
        <br><input type="number" id="quantity3lb" name="quantity3lb" min="0" max="10" value="<?php echo htmlspecialchars($quantity3lb);?>"> lb. 
        <br><input type="number" id="quantity3oz" name="quantity3oz" min="0" max="15" value="<?php echo htmlspecialchars($quantity3oz);?>"> oz. </p></li>

        <li><p> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJOHHnkzzUwe7g0poi9oXDaaThxuJu3VgY8Q&s" alt="product 4" height="20%"><br>Blueberries - $1.28/lb
        <br><input type="number" id="quantity4lb" name="quantity4lb" min="0" max="10" value="<?php echo htmlspecialchars($quantity4lb);?>"> lb. 
        <br><input type="number" id="quantity4oz" name="quantity4oz" min="0" max="15" value="<?php echo htmlspecialchars($quantity4oz);?>"> oz. </p></li>

        <li><p> <img src="https://target.scene7.com/is/image/Target/GUEST_c41fa28e-d7bb-4c51-b75f-532c0d11a12b?wid=600&hei=600&qlt=80&fmt=webp" alt="product 5" height="20%"><br>Welch's Mixed Fruit Snacks - 10 pack - $2.99
        <br><input type="number" id="quantity5" name="quantity5" min="0" max="10" value="<?php echo htmlspecialchars($quantity5);?>">

        <li><p> <img src="https://target.scene7.com/is/image/Target/GUEST_ae33af15-7baf-4dd3-a48c-8a005b6cc829?wid=1200&hei=1200&qlt=80&fmt=webp" alt="product 6" height="20%"><br>Mott's Assorted Fruit Snacks - 10 pack - $2.99
        <br><input type="number" id="quantity6" name="quantity6" min="0" max="10" value="<?php echo htmlspecialchars($quantity6);?>">

        <li><p> <img src="https://target.scene7.com/is/image/Target/GUEST_a99d0f27-a426-4276-bfbf-bbcda275c9cb?wid=1200&hei=1200&qlt=80&fmt=webp" alt="product 7" height="20%"><br>Del Monte's Sliced Pineapples - 15 oz. -  $1.69
        <br><input type="number" id="quantity7" name="quantity7" min="0" max="10" value="<?php echo htmlspecialchars($quantity7);?>">

        <li><p> <img src="https://m.media-amazon.com/images/I/71sl3JcbBvL._AC_UF894,1000_QL80_.jpg" alt="product 8" height="20%"><br>Amazon Fresh Sliced Peaches - 15 oz. - $1.45
        <br><input type="number" id="quantity8" name="quantity8" min="0" max="10" value="<?php echo htmlspecialchars($quantity8);?>">

        <li><p> <img src="https://m.media-amazon.com/images/I/71UujWeGuaL.jpg" alt="product 9" height="20%"><br>Amazon Fresh Sliced Pears - 15 oz. - $1.45
        <br><input type="number" id="quantity9" name="quantity9" min="0" max="10" value="<?php echo htmlspecialchars($quantity9);?>">

        <li><p> <img src="https://m.media-amazon.com/images/I/71WGJEbM6UL._AC_UF894,1000_QL80_.jpg" alt="product 10" height="20%"><br>Strawberry Spread - 10 oz. - $8.50
        <br><input type="number" id="quantity10" name="quantity10" min="0" max="10" value="<?php echo htmlspecialchars($quantity10);?>">

        <li><p> <img src="https://m.media-amazon.com/images/I/51UPloLADTL.jpg" alt="product 11" height="20%"><br>Acai Superfruit Spread - 6.5 oz. - $6.10
        <br><input type="number" id="quantity11" name="quantity11" min="0" max="10" value="<?php echo htmlspecialchars($quantity11);?>">

        <li><p> <img src="https://m.media-amazon.com/images/I/91lopoXejhL.jpg" alt="product 12" height="20%"><br>Sun-Dried Baker's Fruit Medley Mix - $12.00/lb
        <br><input type="number" id="quantity12lb" name="quantity12lb" min="0" max="10" value="<?php echo htmlspecialchars($quantity12lb);?>"> lb. 
        <br><input type="number" id="quantity12oz" name="quantity12oz" min="0" max="15" value="<?php echo htmlspecialchars($quantity12lb);?>"> oz. </p></li>

        <li><p> <img src="https://i5.walmartimages.com/asr/becbadb4-c095-42ae-afae-f790dced98ae.89f55fc0edc611546c225905998dae07.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" alt="product 13" height="20%"><br>Fruit and Berry Mixed Puree - 15 oz. - $12.40
        <br><input type="number" id="quantity13" name="quantity13" min="0" max="10" value="<?php echo htmlspecialchars($quantity13);?>">

        <li><p> <img src="https://target.scene7.com/is/image/Target/GUEST_722e7d6a-81ec-4def-9093-d67f80a67c39?wid=488&hei=488&fmt=pjpeg" alt="product 14" height="20%"><br>Del Monte Fruit Cup Snacks - 12 pack - $7.80
        <br><input type="number" id="quantity14" name="quantity14" min="0" max="10" value="<?php echo htmlspecialchars($quantity14);?>">

        <li><p> <img src="https://target.scene7.com/is/image/Target/GUEST_1ee852d8-d618-4196-becc-8da26c8902c9?wid=488&hei=488&fmt=pjpeg" alt="product 15" height="20%"><br>Mott's Applesauce - 3 pack - $2.20
        <br><input type="number" id="quantity15" name="quantity15" min="0" max="10" value="<?php echo htmlspecialchars($quantity15);?>"> 
        <br>
        <br>
        <input type="submit" value="Submit and Confirm"/>
    </ul>
    </form>
    </div>
</body>
</html>
<?php include ("jfs-footer.php")?>
<!-- Developer: Joseph Muszynski - IS 117 - Spring 2024 -->