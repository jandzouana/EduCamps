<!DOCTYPE html>
<html>
    <head>
        <title>Your Camp Order</title>
        <?php
            $cost = $_REQUEST[duration]*50;
        ?>
        <script src=pay.js type="text/javascript"></script>
    </head>
    <body>
        <p>Your Camp Order: $<?= $cost ?>
        </p>
        <button id=pay>Pay With (PayPal)</button>
    </body>
</html>