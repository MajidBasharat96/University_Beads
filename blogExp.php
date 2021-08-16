

	$sql="select s.s_name , u.uni_name from student s join university u where s_interests=uni_name";
    $result=mysqli_query($conn , $sql);



    ///both are the snytax of comparing two cloumns of two different table
    $suni="select s_interests from student";
    $u="select uni_name from university";
    if($suni=$u){
    	echo "matched university";
    }




<?php
          $sql="SELECT *,((sign_up.interMarks*50/100)+(sign_up.EnteryTestMarks*50/100)) as 'Your meritc' FROM `sign_up` join university_record on university_record.university_id = sign_up.Interested_uni where university_record.relative_Score<= ((sign_up.interMarks*50/100)+(sign_up.EnteryTestMarks*50/100))";   
        
           echo "Matched University";
      // <img src="img/bg-img/"+$row["uni_pic"]/>



          echo "You can also apply in following universities"; 
          $sql="SELECT *,((sign_up.interMarks*50/100)+(sign_up.EnteryTestMarks*50/100)) as 'Your meritc' FROM `sign_up` join university_record where university_record.relative_Score<= ((sign_up.interMarks*50/100)+(sign_up.EnteryTestMarks*50/100))";

          ?>



          <?php           
         $query = "SELECT * FROM university JOIN category WHERE university.cat_id = category.cat_id;";
         $results = mysqli_query($conn, $query);
         while($row = mysqli_fetch_assoc($results)) :
            ?>
