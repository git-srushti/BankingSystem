<?php
    include 'connection.php';
    include 'header.php';
    ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customer</title>
    <style>
         table,th,td{ 
            /* border: 1px solid black; */
            border-collapse: collapse;
            padding: 15px;
            /* padding: 5px 0.5px; */
            justify-content: center;
            align-items: center;
            margin: auto;
            
        } 
        
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }
        .fa-user-circle{
            display: block;
            color: rgb(27, 19, 19);
            margin:10px;
            font-size: 150px;
            cursor: pointer;
        }
        body{
            background-color:#27bd6b;
        }
    </style>
</head>
<body>
<?php
$Ac_No=$_GET['id'];
$querys='SELECT * FROM `customer` where Ac_No="'.$Ac_No.'"';
$k1=mysqli_query($con,$querys);
?>

<div class="main-div">
    <center>
        <i class="fas fa-user-circle"></i><br>
    </center>
    
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>  Sr_no</th>
                        <th>  Ac_No</th>
                        <th>  Name</th>
                        <th>  Balance</th>
                        <th>  Phone</th>
                        <th>  email</th>
                        
                    </tr>
                </thead>
                <tbody>
<?php
while ($resh=mysqli_fetch_array($k1)) {
                                
    ?>
     <tr>
            <td data-label="Sr.no"><?php echo $resh['Sr_no'];?></td>
            <td data-label="Ac_No"><?php echo $resh['Ac_No'];?></td>
            <td data-label="Name"><?php echo $resh['Name'];?></td>
            <td data-label="Balance"><?php echo $resh['Balance'];?></td>
            <td data-label="Phone"><?php echo $resh['Phone'];?></td>
            <td data-label="email"><?php echo $resh['email'];?></td>    

    </tr>
</tbody>
</table>
<?php
}
echo $con->error;
?>
</div>
</div>
</body>
<br>
<?php
    include 'footer.php';
?>
</html>