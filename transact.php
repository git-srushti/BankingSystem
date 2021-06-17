<?php
        include "connection.php";
        include 'header.php';        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking-System</title>
    <script src="sweetalert.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
    background: linear-gradient(45deg,rgb(37, 7, 88),rgb(1, 77, 5),rgb(6, 59, 8),rgb(1, 24, 1),rgb(47, 8, 73));
    min-height: 100vh;
    width:100%;
    position: relative;
    background-size:cover;
    z-index: 1;
    overflow: hidden;
} 
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- <h2> Transaction Details</h2> -->
    <div class="form-container">
    <form action="transact.php" method="POST">
        <div class="input-name">
        <label for="Sender" class="Sender1">Sender:</label>
<select name="Sender" class="Sender" required>
    <option></option>
        <?php
            //include "connection.php";
            $new="Select * from customer;";
            $qwry=mysqli_query($con,$new);
            while($row1=mysqli_fetch_array($qwry))
            {
        ?>
        
        <option value="<?php echo $row1[2]?>"><?php echo $row1[2] ?></option>
        
    <?php
    }
    ?>
</select>

<span>
<label for="Reciever" class="Sender1">Reciever:</label>
<select name="Reciever" class="Sender" required>
    <option></option>
        <?php
            //include "connection.php";
            $new="Select * from customer;";
            $qwry=mysqli_query($con,$new);
            while($row1=mysqli_fetch_array($qwry))
            {
        ?>
        
        <option value="<?php echo $row1[2]?>"><?php echo $row1[2] ?></option>
        
    <?php
    }
    ?>

</select>
</span>
</div>
<div class="input-name">
<label for="SAC_no" class="SAC_no1">Sender Account No:</label>
<select name="SAC_no" class="SAC_no" required>
    <option></option>
        <?php
            //include "connection.php";
            $new="Select * from customer;";
            $qwry=mysqli_query($con,$new);
            while($row1=mysqli_fetch_array($qwry))
            {
        ?>
        
        <option value="<?php echo $row1[1]?>"><?php echo $row1[1] ?></option>
        
    <?php
    }
    ?>
    
</select>
<span>
<label for="RAC_No" class="SAC_no1">Reciever Account No:</label>
<select name="RAC_No" class="SAC_no" required>
    <option></option>
        <?php
            //include "connection.php";
            $new="Select * from customer;";
            $qwry=mysqli_query($con,$new);
            while($row1=mysqli_fetch_array($qwry))
            {
        ?>
        
        <option value="<?php echo $row1[1]?>" required><?php echo $row1[1] ?></option>
        
    <?php
    }
    ?>

</select>
</span>
</div>
<div class="input-name">
    <label for="Amount" class="Amount">Amount:</label>
         <input type="number" name="Amount" class="Amount1" required>
</div>
<div class="input-name">
    <input type="checkbox" id="cb1" class="check-button" required>
    <label for="cb1" class="check"> Confirm your transaction</label>
</div>
<div class="input-name">
        <input  class="button" type="submit" name="submit" value="Pay">
</div>




</div>
    </form>
    
    </div>
    </div>
    <?php 
            if(isset($_POST['submit']))
            {
                
            include 'connection.php';
                
            $Sender=$_POST['Sender'];
            $Reciever=$_POST['Reciever'];
            $SAC_no=$_POST['SAC_no'];
            $RAC_No=$_POST['RAC_No'];
            $Amount=$_POST['Amount'];

            $s1='SELECT * FROM `customer` where Ac_No="'.$SAC_no.'"';
            $q1=mysqli_query($con,$s1);
            echo $con->error;
            $re1=mysqli_fetch_array($q1);
            
            $r1='SELECT * FROM `customer` where Ac_No="'.$RAC_No.'"';
            $q2=mysqli_query($con,$r1);

            
            $re2=mysqli_fetch_array($q2);
            //echo $re1['Balance'];
            if($Amount<=0)
            {
                ?>
                <script>
                    swal({
                                    title: "Plz check the Amount you enter!!",
                                    
                                    icon: "error",
                                    button: "OK!",
                                    
                                    });
                </script>
                    <?php
            }
            elseif($Amount>$re1['Balance'])
            {
                ?>
                <script>
                         swal({
                                title: " Not Enough Balance to Transact!!",
                                icon: "error",
                                button: "OK!",
                                
                                });
               </script>
                <?php
            }
            else
            {
                $new=$re1['Balance']-$Amount;
                $u1='UPDATE `customer` SET Balance="'.$new.'" where Ac_No="'.$SAC_no.'"';
                $t1=mysqli_query($con,$u1);

                $new1=$re2['Balance']+$Amount;
                $u2='UPDATE `customer` SET Balance="'.$new1.'" where Ac_No="'.$RAC_No.'"';
                $t1=mysqli_query($con,$u2);

                $sli="INSERT INTO `transact` (`Sender-Name`, `Sender Ac-No`, `Reciever-Name`, `Reciever Ac-No`, `Money-transfer`, `Date`) VALUES ('$Sender', '$SAC_no' ,'$Reciever', '$RAC_No', '$Amount', current_timestamp());";
                if($con->query($sli)==true)
             {?>

                
                 <script>
                 const tsound = new Audio("google_pay.mp3");
                    tsound.play();
                 swal({
                                    title: "Transaction successfully completed!!",
                                    text: "Good day",
                                    icon: "success",
                                    button: "OK!",
                                    
                                    });
                    
                                    </script>
                 <?php  
             }
            else{
                echo "Error: $sli<br> $con->error";
            }
                //echo $i2;
            
            }
            
                    
            
                }
                    
            ?> 
            
<?php
    include 'footer.php'; 
?>






</body>
</html>