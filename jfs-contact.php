<!--Contact page
- about
- names/emails/phone (for the record they're made up)
- support tickets : optional email input & text field & send button -->
<?php include ("jfs-header.php")?>
<!DOCTYPE html>
<html lang="en">
    <title>Contact Page</title>
    <head>
    <link rel="stylesheet" href="jfs-stylesheet.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <h1>Joe's Fruit Stand Contacts</h1>
        <h4>Find contact information for our staff here, or send a support ticket.</h4>
    </head>

    <body>
        <div id="contacts">
        <p>Contact one of us at:</p>
            <ul>
                <li> Skyler Morse | +1 540-210-3393 | smorse@jfs.com </li>
                <li> Ryan London | +1 540-371-8402 | rlondon@jfs.com </li>
                <li> Ash Stanley | +1 545-655-2029 | astanley@jfs.com </li>
            </ul>
        </div>

        <div id="ticket">
            <p> Alternatively, send a support ticket directly:</p>
            <!-- email input / text field / send-->
            <label for="email">Email (optional):</label>
            <input type="email" id="email" size="30" /><br>

            <label for="ticket-text">Describe the problem:</label><br>
            <textarea id="ticket-text" name="ticket-text" rows="5" cols="60"></textarea><br>

            <input type="submit" name="submit" id="submit" value="Submit Ticket">
        </div>
    </body>
</html>
<?php include ("jfs-footer.php")?>
<!-- Developer: Joseph Muszynski - IS 117 - Spring 2024 -->