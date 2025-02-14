<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LL_1</title>

    <style>
        body {
        font-family: Arial, sans-serif;
        line-height: 1.5;
        margin: 0;
        padding: 20px;
        background-color: #a9c3dd; 
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 90vh;
    }

    .container {
        background: rgb(214, 238, 254);
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        display: inline-block;
        max-width: 400px;
        width: 100%;
        text-align: justify;
    }

    strong {
        color: #333;
    }

    h1 {
        font-size: 22px;
        color: #222;
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
    <div class="container">
        <?php echo "Привет, мир!"; ?><br>
        <?php echo "Hello, World with echo!"; ?><br>
        <?php print "Hello, World with print!"; ?><br><br>

    <?php 
            $days = 288;
            $message = "Все возвращаются на работу!";
    ?>

        <strong>Using concatenation:</strong><br>
        <?php echo "Days: " . $days . ", Message is: " . $message; ?><br><br>

        <strong>Using {}:</strong><br>
        <?php echo "Days: {$days}, Message is: {$message}"; ?><br>    
    </div>

</body>
</html>