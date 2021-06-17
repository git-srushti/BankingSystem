<?php
 include 'header.php';
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction history</title>
    <link rel="stylesheet" href="style.css">
    <style>
         table,th,td{ 
            /* border: 1px solid black; */
            border-collapse: collapse;
            padding: 5px 0.5px;
            justify-content: center;
            align-items: center;
            margin: auto;
            
        } 
        
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #32312f;
        }
    </style>
    <!-- <style type="text/css">
    <s -->
</head>
<body>
    <div class="main-div">
        <center>
            <h2 class="heading"> TRANSACTION HISTORY </h2>
        </center>
        
        <!-- <div class="center"> -->
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Sr-no</th>
                            <th>Sender-Name</th>
                            <th>Sender Ac-no</th>
                            <th>Reciever-Name</th>
                            <th>Reciever Ac-no</th>
                            <th>Money-Transfer</th>
                            <th>Date And Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                include 'connection.php';

                                $sel="Select * from transact;";
                                $query=mysqli_query($con,$sel);
                                //$num=mysqli_num_rows($query);

                                //echo $num;

                               // $res=mysqli_fetch_array($query);

                                //$res[no of column want to fetch always first value]
                                //echo $res[3];
                                while ($res=mysqli_fetch_array($query)) {
                                    
                                    ?>
                                     <tr>
                                            <td data-label="Sr.no"><?php echo $res['Sr.no'];?></td>
                                            <td data-label="Sender-Name"><?php echo $res['Sender-Name'];?></td>
                                            <td data-label="Sender Ac-No"><?php echo $res['Sender Ac-No'];?></td>
                                            <td data-label="Reciever-Name"><?php echo $res['Reciever-Name'];?></td>
                                            <td data-label="Reciever Ac-No"><?php echo $res['Reciever Ac-No'];?></td>
                                            <td data-label="Money-transfer"><?php echo $res['Money-transfer'];?></td>
                                            <td data-label="Date"><?php echo $res['Date'];?></td>

                                    </tr>
                            <?php
                                }
                                
                            ?>

                       
                    </tbody>
                </table>
            <!-- </div> -->
        </div>
    </div>
</body>
<?php
                                
                                include 'footer.php'; 
                            ?>

</html>