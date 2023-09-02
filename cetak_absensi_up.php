<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Monthly Report</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
</head>


<body>

<br><br>
<div class="container">
<br><br>
		<center><h2>Cetak Absensi</h2></center>
<br><br>
<table class="table table-bordered">
<thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Tanggal</th>
                                                <th>Jam</th>
                                                <th>Status</th>
                                                <th>Alasan</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                    
                                                <th>Tanggal</th>
                                                <th>Jam</th>
                                                <th>Status</th>
                                                <th>Alasan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            include "db_conn.php";
                                            $no = 1;

                                            $sql = mysqli_query($conn , "SELECT * FROM absensi");
                                            while($data=mysqli_fetch_array($sql)){
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $data['nama']; ?></td>
                                            
                                                <td><?php echo $data['tanggal']; ?></td>
                                                <td><?php echo $data['jam']; ?></td>
                                                <td><?php echo $data['status']; ?></td>
                                                <td><?php echo $data['alasan']; ?></td>
                                            </tr>
                                            <?php
                                        $no++;
                                        }
                                            ?>
                                        </tbody>
		</table>
	</div>

<script>

window.print();

</script>

</body>

</html>