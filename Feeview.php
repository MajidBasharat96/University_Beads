<?php

 include_once ('includes/header.php');

#!/usr/bin/env python
define("DB_HOST", 'localhost');
define("DB_USER", 'root');
define("DB_PASS", '');
define("DB_TABLE", 'mysql');

$conn = mysqli_connect(DB_HOST , DB_USER , DB_PASS , DB_TABLE);
?>

<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img" style="background-image: url(projectpics/df9fa5f3f840222b91afa78ff16edf2cf0b89a68.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">Fee Structure</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<!-- ##### Listing Content Wrapper Area Start ##### -->

            <div class="row">

         <?php           
         $query = "SELECT * FROM universities where id=1;";
       
$filename="universities.json";
$data = file_get_contents($filename);
$array = json_decode($data,true);
foreach ($array as $row){
   
        echo $row['id'];  echo $row['program_name']; echo $row['duration'];  echo $row['No_of_Regular_Semesters']; echo $row['Credit_Hour_Fee']; echo $row['Total_Credit_Hrs'];  echo $row['Total_Program_Fee']; echo $row['Tuition_Fee']; echo $row['"Registration_Exam_Activity_Fee'];  echo $row['Total_Semester_Fee'];  echo $row['Frst_smstr_Cr_Hrs']; 
                        }
?>

                          

    </section>
<?php //include 'includes/footer.php';?>