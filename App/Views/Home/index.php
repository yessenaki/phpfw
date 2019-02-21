<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Output escaping</title>
</head>
<body>
    <h1>Output escaping</h1>
    <?php
        // Display the results of submitting the form
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "Hello, " . htmlspecialchars($_POST['name']);
        }
    ?>
    <form action="" method="post">
        <div>
            <label for="name">Your name</label>
            <input type="text" name="name" id="name" autofocus>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>