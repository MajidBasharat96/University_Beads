<?php include 'includes/header.php';?>
<?php include 'connection.php';?>
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(projectpics/p1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">University</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

   <!-- <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                      
                        <div class="search-title">
                            <p>Search Your University</p>
                        </div>
                       
                        <form action="#" method="post" id="advanceSearch">
                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="input" class="form-control" name="input" placeholder="Keyword">
                                    </div>
                                </div>

                             

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="catagories">
                                            <option>All Catagories</option>
                                            <option value="Governement">Government</option>
                                            <option value="Private">Private</option>
                                           
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="offers">
                                            <option>All Offers</option>
                                            <option>100% OFF</option>
                                            <option>75% OFF</option>
                                            <option>50% OFF</option>
                                            <option>25% OFF</option>
                                            <option>10% OFF</option>
                                        </select>
                                    </div>
                                </div>

                               

                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" id="bathrooms">
                                            <option>Interests</option>
                                            <option>CS</option>
                                            <option>BBA</option>
                                            <option>Psychology</option>
                                            <option>Data Science</option>
                                            <option>Accounting</option>
                                        </select>
                                    </div>
                                </div>

                              

                                <div class="col-12 d-flex justify-content-between align-items-end">
                        
                                    <div class="form-group mb-0" style="margin-left: 420px;">
                                        <button type="submit" class="btn south-btn">Search</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- ##### Listings Content Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">

             <?php 
            $unid = $_GET['uniId'];
            $query = "SELECT * FROM `university` WHERE Uni_Id='$unid'";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) :
                ?>

            <div class="row">

                <div class="col-12">
                    <!-- Single Listings Slides -->
                    <div class="">
                        <!-- Single Slide -->
                       <img style="width: 1200px; height: 500px;" src="img/bg-img/<?php echo $row['uni_pic'];?>" alt="University Image">
                       
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="listings-content">
                        <!-- Price -->
                        <h5><?php echo $row['Uni_Name'];?></h5>
                        <p class="location"><img src="img/icons/location.png" alt=""><?php echo $row['Uni_City'];?></p>
                        <p><a href="https://<?php $row['Uni_URL'];?>"></p><br>
                    </div>
                </div>
              
            </div>
            <!-- Listing Maps -->
           
             <?php endwhile; ?>
        </div>
    </section>
    <!-- ##### Listings Content Area End ##### -->

   <?php include 'includes/footer.php';?>