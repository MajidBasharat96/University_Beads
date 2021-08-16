<?php
#!/usr/bin/env python
define("DB_HOST", 'localhost');
define("DB_USER", 'root');
define("DB_PASS", '');
define("DB_TABLE", 'mysql');

$conn = mysqli_connect(DB_HOST , DB_USER , DB_PASS , DB_TABLE);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<table align="center" width="800" border="1" style="border-collapse:collapse; border:1px solid #ddd;" cellpadding="5" cellspacing="0">
	<thead>
		<tr bgcolor="#FFCC00">
			<!--<th>id</th>-->
			<th>Name</th>
		</tr>
	</thead>
	<tbody>


<?php
$filename="ncaprgrms.json";
$data = file_get_contents($filename);
$array = json_decode($data,true);
foreach ($array as $row) {
	// print_r($row);
	$sql = "INSERT INTO ncaprgrms(Name) VALUES (
	'".$row["Name"]."')";

				?>
				<tr>
					<td><?php echo $row["Name"];?></td>
				</tr>
				<?php
	
	mysqli_query($conn , $sql);
}

$conn->close();

?>

<div class="main-content-inner">
    <div class="row">
        <!-- table primary start -->
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">

                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
<table align="center" width="800" border="1" style="border-collapse:collapse; border:1px solid #ddd;" cellpadding="5" cellspacing="0">
    <thead>
        <tr bgcolor="#FFCC00">
            <!--<th>id</th>-->
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
                                 </tr>
                            </thead>
                            <tbody>
                             <?php
                             $query = "SELECT * FROM `ncaprgrms`";
                             $result = mysqli_query($conn, $query);
                             while($row = mysqli_fetch_assoc($result)) :
                                ?>
                                <tr>
                                        <td><?php echo $row["Name"];?> </td>
                                    <td>
                                </tr>
                                <?php 
                            endwhile; 
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

/*		$conn->query('INSERT INTO `giftfee`(`id`,`program_name`, `duration`, `No_of_Regular_Semesters`, `Credit_Hour_Fee`, `Total_Cr_Hr`, `Total_Program_Fee`, `Tuition_Fee`, `Registration_Exam_Activity_Fee`, `Total_Semester_Fee`, `Frst_smstr_Cr_Hrs`) VALUES ("'.$row[1].'","'.$row[2].'","'.$row[3].'","'.$row[4].'","'.$row[5].'","'.$row[6].'","'.$row[7].'","'.$row[8].'","'.$row[9].'","'.$row[10].'","'.$row[11].'")');
		if($n>1){
				?>
				<tr>
					<td><?php echo $row[1];?></td>
					<td><?php echo $row[2];?></td>
					<td><?php echo $row[3];?></td>
					<td><?php echo $row[4];?></td>
					<td><?php echo $row[5];?></td>
					<td><?php echo $row[6];?></td>
					<td><?php echo $row[7];?></td>
					<td><?php echo $row[8];?></td>
					<td><?php echo $row[9];?></td>
					<td><?php echo $row[10];?></td>
					<td><?php echo $row[11];?></td>
				</tr>
				<?php
			}
			$n++;
		}
		fclose($handle);
	}*/
	?>
	</tbody>
</table>


?>
