<?php
 include 'header.php';
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table,th,td{
            /* border: 1px solid black; */
            border-collapse: collapse;
            padding: 15px;
            justify-content: center;
            align-items: center;
            margin: auto;
        }
        .table-responsive thead{
    background-color: rgb(28, 172, 230);
}
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #32312f;
        }
        .table-responsive tbody tr td .nbtn{
            width: 130px;
            text-decoration: none;
            line-height: 35px;
            display: inline-block;
            background-color: rgb(41, 184, 228);
            font-weight: 400;
            text-align: center;
            color: white;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            font-size: 14px;
            opacity: 1;


        }
    </style>
</head>
<body>
    <div class="main-div">
        <center>
            <h2 class="heading"> OUR CUSTOMERS </h2>
        </center>
        
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>  Sr_no</th>
                            <th>  Ac_No</th>
                            <th>  Name</th>
                            <!-- <th>  Balance</th>
                            <th>  Phone</th>
                            <th>  email</th> -->
                            <th> View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                include 'connection.php';

                                $sel="Select * from customer;";
                                $query=mysqli_query($con,$sel);
                                //$num=mysqli_num_rows($query);

                                //echo $num;

                                //$res=mysqli_fetch_array($query);

                                //$res[no of column want to fetch always first value]
                                //echo $res[3];
                                while ($res=mysqli_fetch_array($query)) {
                                    
                                    ?>
                                     <tr>
                                            <td data-label="Sr_no"><?php echo $res['Sr_no'];?></td>
                                            <td data-label="Ac_No"><?php echo $res['Ac_No'];?></td>
                                            <td data-label="Name"><?php echo $res['Name'];?></td>
                                            <!-- <td data-label="Balance"><?php echo $res['Balance'];?></td>
                                            <td data-label="Phone"><?php echo $res['Phone'];?></td>
                                            <td data-label="email"><?php echo $res['email'];?></td> -->
                                            <td data-label="View" ><a href="View.php?id=<?php echo $res['Ac_No'];?>" class="nbtn">View</a></td>

                                    </tr>
                            <?php
                                }
                            ?>

                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<?php
                                
                                include 'footer.php'; 
                            ?>
</html>