<?php
define("DB_HOST", 'localhost');
define("DB_USER", 'root');
define("DB_PASS", '');
define("DB_TABLE", 'mysql');

$conn = mysqli_connect(DB_HOST , DB_USER , DB_PASS , DB_TABLE);

if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
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

/*foreach ($array as $row) {
	// print_r($row);
	$sql = "INSERT INTO universities(id, program_name, duration, No_of_Regular_Semesters, Credit_Hour_Fee, Total_Cr_Hr, Total_Program_Fee, Tuition_Fee, Registration_Exam_Activity_Fee, Total_Semester_Fee, Frst_smstr_Cr_Hrs) VALUES (
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

	mysqli_query($conn , $sql);
}

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/



if(($handle		=	fopen("table_list_fee_2021-03-12-114744.csv", "r")) !== FALSE){
	$n			=	1;
	while(($row	=	fgetcsv($handle)) !== FALSE){
		$conn->query('INSERT INTO `universities`(`program_name`, `duration`, `No_of_Regular_Semesters`, `Credit_Hour_Fee`, `Total_Cr_Hr`, `Total_Program_Fee`, `Tuition_Fee`, `Registration_Exam_Activity_Fee`, `Total_Semester_Fee`, `Frst_smstr_Cr_Hrs`) VALUES ("'.$row[1].'","'.$row[2].'","'.$row[3].'","'.$row[4].'","'.$row[5].'","'.$row[6].'","'.$row[7].'","'.$row[8].'","'.$row[9].'","'.$row[10].'")');
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
				</tr>
				<?php
			}
			$n++;
		}
		fclose($handle);
	}
	?>
	</tbody>
</table>