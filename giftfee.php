
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
			<th>program_name</th>
			<th>duration</th>
			<th>No_of_Regular_Semesters</th>
			<th>Credit_Hour_Fee</th>
			<th>Total_Cr_Hr</th>
			<th>Total_Program_Fee</th>
			<th>Tuition_Fee</th>
			<th>Registration_Exam_Activity_Fee</th>
			<th>Total_Semester_Fee</th>
			<th>Frst_smstr_Cr_Hrs</th>
		</tr>
	</thead>
	<tbody>


<?php
$filename="giftfee.json";
$data = file_get_contents($filename);
$array = json_decode($data,true);
foreach ($array as $row) {
	// print_r($row);
	$sql = "INSERT INTO giftfee(id, program_name, duration, No_of_Regular_Semesters, Credit_Hour_Fee, Total_Credit_Hrs, Total_Program_Fee, Tuition_Fee, Registration_Exam_Activity_Fee, Total_Semester_Fee, Frst_smstr_Cr_Hrs) VALUES (
	'".$row["id"]."', 
	'".$row["program_name"]."' , 
	'".$row["duration"]."', 
	'".$row["No_of_Regular_Semesters"]."', 
	'".$row["Credit_Hour_Fee"]."', 
	'".$row["Total_Credit_Hrs"]."', 
	'".$row["Total_Program_Fee"]."',
	'".$row["Tuition_Fee"]."',
	'".$row["Registration_Exam_Activity_Fee"]."',
	'".$row["Total_Semester_Fee"]."', 
	'".$row["Frst_smstr_Cr_Hrs"]."')";

				?>
				<tr>
					<td><?php echo $row["id"];?></td>
					<td><?php echo $row["program_name"];?></td>
					<td><?php echo $row["duration"];?></td>
					<td><?php echo $row["No_of_Regular_Semesters"];?></td>
					<td><?php echo $row["Credit_Hour_Fee"];?></td>
					<td><?php echo $row["Total_Credit_Hrs"];?></td>
					<td><?php echo $row["Total_Program_Fee"];?></td>
					<td><?php echo $row["Tuition_Fee"];?></td>
					<td><?php echo $row["Registration_Exam_Activity_Fee"];?></td>
					<td><?php echo $row["Total_Semester_Fee"];?></td>
					<td><?php echo $row["Frst_smstr_Cr_Hrs"];?></td>
				</tr>
				<?php
	
	mysqli_query($conn , $sql);
}

$conn->close();


?>
