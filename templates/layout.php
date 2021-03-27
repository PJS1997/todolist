<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <h1>To Do List</h1>
    </div>
    <div class="container">
        <div class="menu">
            <li>
                <a href="/">Lista notatek</a>
            </li>
            <li>
                <a href="/?action=create">Nowa notatka</a>

            </li>
        </div>
    </div>
    <div>
        <?php
        
            require_once('templates/pages/'.$page.'.php');
        
        ?>
    </div>
    <div class="footer">
    </div>
</body>

</html>