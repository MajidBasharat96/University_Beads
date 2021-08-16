<?php
 include_once ('connection.php');
 include_once ('includes/header.php');
 ?>

<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img" style="background-image: url(projectpics/p1.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">University List</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Advance Search Area Start ##### -->
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
                                            <option value="Governement">First Tier</option>
                                            <option value="Governement">Second Tier</option>
                                            <option value="Governement">Third Tier</option>
                                           
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="offers">
                                            <option>All Offers</option>
                                            <option>100% OFF</option>
                                            <option>90% OFF</option>
                                            <option>80% OFF</option>
                                            <option>60% OFF</option>
                                            <option>50% OFF</option>
                                            <option>40% OFF</option>
                                            <option>30% OFF</option>
                                            <option>20% OFF</option>
                                            <option>10% OFF</option>
                                        </select>
                                    </div>
                                </div>

                               

                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" id="bathrooms">
                                            <option>Interests</option>
                                            <option>Electrical Engineering</option>
                                            <option>Civil Engineering</option>
                                            <option>Mechanical Engineering</option>
                                            <option>Software Engineering</option>
                                            <option>Data Scienc</option>
                                            <option>Data Scienc</option>
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
<!-- ##### Advance Search Area End ##### -->
<br>
<!-- ##### Listing Content Wrapper Area Start ##### -->

<section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>New Universities</h2>
                        <p>Here are some featured and new universities in your division</p>
                    </div>
                </div>
            </div>

            <div class="row">

         <?php           
         $query = "SELECT * FROM university ORDER BY Uni_PHD DESC;";
         $results = mysqli_query($conn, $query);
         while($row = mysqli_fetch_assoc($results)) :
            ?>

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <img style="width: 350px; height: 200px;" src="img/bg-img/<?php echo $row['uni_pic'];?>" alt="University Image">

                        <div class="tag">

                            <?php 
                                if($row['Uni_Category']==0){
                                    $cat="Private";
                                }
                                else {
                                      $cat="Govt";
                                }

                            ?>
                            <span><?php echo $cat; ?></span>
                        </div>
                           <!--  <div class="list-price">
                                <p>$945 679</p>
                            </div> -->
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5><a href="https://<?php echo $row['Uni_URL']; ?>"><?php echo $row['Uni_Name']; ?></a></h5>
                            <p class="location"><img src="img/icons/location.png" alt="Address"><?php echo $row['Uni_City']; ?></p>
                            <p><a href="giftfee.php">more info</p></a>
                            

                        </div>
                    </div>
                </div>

                
            <?php endwhile; ?>

        </div>
        </div>
    </section>





<!-- ##### Listing Content Wrapper Area End ##### -->

<?php include 'includes/footer.php';?>