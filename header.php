<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Online Bank</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a5a34a8276.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <section class="header">
        <nav>
            <a href="home.php" class="logo"><img src="logo2.jpg"></a>
            <div class="nav-links" id="navLinks">
                <i class="fas fa-times-circle" onclick="hidemenu()"></i>
            <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="customer.php">VIEW CUSTOMER</a></li>
            <li><a href="transact.php">TRANSACT</a></li>
            <li><a href="history.php">HISTORY</a></li>
            </ul>
        </div>
        <i class="fas fa-bars" onclick="showmenu()"></i>
        </nav>
        </section>

    <script>
        var navlinks=document.getElementById("navLinks");
        function showmenu(){
            navlinks.style.right="0";
        }
        function hidemenu(){
            navlinks.style.right="-200px";
        }
        
    </script>
    
</body>
</html>