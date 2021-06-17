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
    <section class="sub-header">
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
    <div class="text-box">
        <h1>  Welcome to the Modern Bank  </h1>
        <p>200+ Banking services available<br>Every Bankinkg transactions only on one single click</p>
        <a href="transact.php" class="hero-btn">Transact Now</a>
    </div>


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
    <section class="services">
        <h1>Our Services</h1>
        <p>Services that make the customer happy and satisfied</p>
        <div class="row">
            <div class="services-col">
            <img src="hc1.png">
            <h3> Fund Transfer </h3>
            <p>You can transfer any amount from one account to another of the same or any another bank.<br>
                 Customers can send money anywhere in India.</p>
            </div>
            <div class="services-col">
                <img src="hc2.jpg">
                <h3> Online Shopping </h3>
                <p>With a range of all kind of products, you can shop online and the payment is also made conveniently through your account.<br>
                     You can also buy railway and air tickets through Internet banking.</p>
                </div>
                <div class="services-col">
                    <img src="hc3.jpg">
                    <h3> Credit Card Customer </h3>
                    <p>With Internet banking, customers can not only pay their credit card bills online but also get a loan on their cards.<br>
                         If you lose your credit card, you can report lost card online. </p>
                    </div>
        </div>
        <hr>
    </section>
    <section class="footer">
        <h4>About Us</h4>
        <p>Satisfied customers are our best ads.</p>
        <div class="icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin"></i>
        </div>
        <p class="cp-text">
            © Copyright All rights reserved by <span style="color:rgb(248, 78, 48);font-weight: bold;font-size: 15px;"> Srushti </span></p>
    </section>
</body>
</html>
