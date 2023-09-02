<?php include 'db_conn.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monthly Report</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
</head>


<body>
	<div class="container">
        <br><br>
		<center><h2>Cetak User</h2></center>
		<br>
    
    <div class="float-right">
    
            <a href="cetak_user_up.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> &nbsp PRINT</a>
			<br>
			<br>
		

</div>


		<table class="table table-bordered">
			<thead>				
				<tr>
                    <th>No</th>
                    <th>username</th>
                    <th>Jenis Kelamin</th>
                    <th>Bidang</th>
                    <th>Password</th>
				</tr>				
			</thead>
			<tbody>
            <?php
                                            include "db_conn.php";
                                            $no = 1;

                                            $sql = mysqli_query($conn , "SELECT * FROM login where status=1");
                                            while($data=mysqli_fetch_array($sql)){
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $data['username']; ?></td> 
                                                <td><?php echo $data['JK']; ?></td>
                                                <td><?php echo $data['bidang']; ?></td>
                                                <td><?php echo $data['password']; ?></td>
                                            </tr>
                                            <?php
                                        $no++;
                                        }
                                            ?>				
			</tbody>
		</table>
	</div>
	
	
</body>
</html>