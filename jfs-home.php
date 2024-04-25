<!--Home page-->
<?php include ("jfs-header.php")?>
<!-- Images, yapping, bigger buttons with links-->
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="jfs-stylesheet.css">
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <h1>Home Page</h1>
    <h4>Some background information about our business and site.</h4>
</head>

<body>
    <div id="about-us">
        <p style="width:40%;" >Established in May 2022, Joe's Fruit Stand is a business dedicated to gathering and selling fruit-based products.
    This site is targeted towards a general audience - however, those who want to expand their diet and those who want to eat healthier may find use in this site as well.
    <br>
    Below, you can see a list of available products, and place an order if anything here interests you - or contact support if you experience a problem.</p>
    </div>

    <div id="buttons">
        <a href="jfs-products.php">
            <button style="width:15%; height:7%; background-color:#ff5533;">View Our Products</button>
        </a><br>

        <a href="jfs-ordering.php">
            <button style="width:15%; height:7%; background-color:#d7dd44;">Place an Order</button>
        </a><br>

        <a href="jfs-contact.php">
            <button style="width:15%; height:7%; background-color:#77ee44">Contact Staff</button>
        </a><br>
    </div>

    <div id="popular-products">
        <p style="width:40%;">Below are some of our most commonly purchased items:</p>
        <img src="https://mediaproxy.salon.com/width/1200/https://media2.salon.com/2023/08/red_delicious_apples_1197003466.jpg" alt="product 1" width="15%">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJOHHnkzzUwe7g0poi9oXDaaThxuJu3VgY8Q&s" alt="product 2" width="15%">
        <img src="https://target.scene7.com/is/image/Target/GUEST_c41fa28e-d7bb-4c51-b75f-532c0d11a12b?wid=600&hei=600&qlt=80&fmt=webp" alt="product 3" width="15%">
        <img src="https://m.media-amazon.com/images/I/91lopoXejhL.jpg" alt="product 4" width="15%">
        <img src="https://target.scene7.com/is/image/Target/GUEST_1ee852d8-d618-4196-becc-8da26c8902c9?wid=488&hei=488&fmt=pjpeg" alt="product 5" width="15%">
        <img src="https://m.media-amazon.com/images/I/71UujWeGuaL.jpg" alt="product 6" width="15%">
    </div>
</body>
</html>
<?php include ("jfs-footer.php")?>
<!-- Developer: Joseph Muszynski - IS 117 - Spring 2024 -->