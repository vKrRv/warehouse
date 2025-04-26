<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IAU Supplies System</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>

<body>
    <header>
        <img class="logo_img" src="./images/logo.png" alt="IAU Logo" />
        <div class="lang">
            Language:
            <select>
                <option value="english">English</option>
                <option value="arabic">Arabic</option>
            </select>
            <?php if(isset($_SESSION['username'])): ?> 
                <br />
                <form action="logout.php" method="post" style="margin-top: 10px; float: right;"> 
                    <input type="submit" value="Log Out">
                </form>
            <?php endif; ?>
        </div>
        <div class="user-info">
            Hello <span style="color: red;"><?php echo isset($_SESSION['username']) ? '[' . $_SESSION['username'] . ']' : '[Guest]'; ?></span> 
        </div>
    </header>
</body>
</html>