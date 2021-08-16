<?php 
require_once('connection.php');
require_once('includes/header.php');
?>

<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img" style="background-image: url(projectpics/p1.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">Recommended Institutes</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ##### Advance Search Area End ##### -->
<div class="south-search-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="advanced-search-form">

                    <div class="search-title">
                        <p>Search Your University</p>
                    </div>
                    <?php
                    if (isset($_POST ["submit"]))
                    {
                        $cityOfDropDown = $_POST ["city"];
                        $deptOfDropDown = $_POST ["course"];
                    }
                    else
                    {
                        $cityOfDropDown = "Select City";
                        $deptOfDropDown = "Select Department";
                    }
                    ?>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" name="city">
                                      <label>City</label>
                                      <option value="<?php echo $cityOfDropDown;?>"><?php echo $cityOfDropDown;?></option>
                                      <option value="gujranwala">Gujranwala</option>
                                      <option value="lahore">Lahore</option>
                                      <option value="islamabad">Islambad</option>
                                      <option value="sialkot">Gujrat</option>
                                      <option value="sialkot">Sialkot</option>

                                  </select>
                              </div>
                          </div>

                          <div style="z-index: 1000;" class="col-12 col-md-6 col-xl-6">
                            <div class="form-group">
                                <select class="form-control" name="course">
                                    <option value="<?php echo $deptOfDropDown;?>"><?php echo $deptOfDropDown;?></option>
                                    <?php
                                    $dropDown = "SELECT DISTINCT Dept_Name FROM department";
                                    $dropDownResult = mysqli_query ($conn, $dropDown);
                                    while ($row = mysqli_fetch_assoc ($dropDownResult))
                                    {
                                        echo '<option value="'.$row ["Dept_Name"].'">'.$row ["Dept_Name"].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>



                        <div class="col-12 d-flex justify-content-between align-items-end">

                            <div class="form-group mb-0" style="margin-left: 420px;">
                                <button type="submit" name="submit" class="btn south-btn">Search</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<section class="listings-content-wrapper section-padding-100">
    <div class="container">
      <div class="row">
        <?php
        if (isset($_POST['submit']))
        {
            $city = $_POST['city'];
            $course = $_POST['course'];

            $uni_query = "SELECT * FROM university WHERE Uni_City='$city'";
            $run_uni = mysqli_query(mysqli_connect('localhost','root','','mysql'),$uni_query);

            while ($roww = mysqli_fetch_array($run_uni))
            {    
                $uID = $roww["Uni_Id"];

                $findDepartment = "SELECT * FROM department WHERE Uni_ID='$uID' AND Last_Merit<='".$_SESSION ["studentMerit"]."' AND Dept_Name LIKE'%".$_POST["course"]."%' ORDER BY PHD_Faculty desc LIMIT 4";

                $departmentResults = mysqli_query ($conn, $findDepartment);

                $departmentsAfterMerit = array ();

                while ($departmentsRow = mysqli_fetch_assoc ($departmentResults))
                {                        
                    $recommendations = "SELECT * FROM university WHERE Uni_Id='".$departmentsRow["Uni_ID"]."'";
                    $finalResult = mysqli_query ($conn, $recommendations);

                    while ($finalRow = mysqli_fetch_assoc ($finalResult))
                    {
                        $name = $finalRow['Uni_Name'];

                        if($finalRow['Uni_Category']==0){
                            $cat="Private";
                        }
                        else {
                            $cat="Govt";
                        } ?>

                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                                <div class="property-thumb">
                                    <img style="width: 350px; height: 200px;" src="./img/bg-img/<?php echo $roww['uni_pic'];?>" alt="University Image">

                                    <div class="tag">
                                        <span><?php echo $cat; ?></span>
                                    </div>
                                </div>
                                <div class="property-content">
                                    <h5><a href="single-listings.php?uniId=<?php echo $finalRow['Uni_Id']; ?>"><?php echo $name; ?></a></h5>
                                    <p class="location"><img src="img/icons/location.png" alt="Address"><?php echo $city; ?></p>

                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
        }//while-2
}//isset
/*else
{
    $allUni = "SELECT * FROM university";
    $allResult = mysqli_query ($conn, $allUni);

    while ($finalRow = mysqli_fetch_assoc ($allResult))
    {
        $name = $finalRow['Uni_Name'];
        $city = $finalRow['Uni_City'];

        if($finalRow['Uni_Category']==0){
            $cat="Private";
        }
        else {
            $cat="Govt";
        } ?>

        <div class="col-12 col-md-6 col-xl-4">
            <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                <div class="property-thumb">
                    <img style="width: 350px; height: 200px;" src="./img/bg-img/<?php echo $finalRow['uni_pic'];?>" alt="University Image">

                    <div class="tag">
                        <span><?php echo $cat; ?></span>
                    </div>
                </div>
                <div class="property-content">
                    <h5><a href="single-listings.php?uniId=<?php echo $finalRow['Uni_Id']; ?>"><?php echo $name; ?></a></h5>
                    <p class="location"><img src="img/icons/location.png" alt="Address"><?php echo $city; ?></p>

                </div>
            </div>
        </div>
        <?php
    }
}*/
?>

</div>


</div>
</section>

<!-- ##### Listing Content Wrapper Area End ##### -->

<?php include 'includes/footer.php';?>