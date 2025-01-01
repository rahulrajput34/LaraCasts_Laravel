<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
    <h1>

        <?php  
        // echo $slot 
        ?>

        <!-- because we are using blade syntax, we can use the following syntax to display the slot -->
        {{$slot}}
        
    </h1>
</body>
</html>