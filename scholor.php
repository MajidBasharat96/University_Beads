    <?php include 'includes/header.php';?>
    <?php include 'includes/db.php';?>

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(projectpics/p1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your Scholarships</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(projectpics/p2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">See Recommendations</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(projectpics/UET.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your perfect Scholarships</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
  <!--   <div class="south-search-area">
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
                                        <button type="submit" class="btn south-btn"><a >Search</a></button>
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

    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>List of Universities which Offers Scholorships</h2>
                        <p>Here are some new universities in your division which offer scholorships</p>
                    </div>
                </div>
            </div>

            <div class="row">

         <?php           
         $query = "SELECT * FROM university ORDER BY Uni_PHD DESC;";
         $results = mysqli_query(mysqli_connect('localhost','root','','mysql'), $query);
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
                            <h5><a href="https://<?php echo $row['Uni_URL']; ?>" target="_blank"><?php echo $row['Uni_Name']; ?></a></h5>
                            <p class="location"><img src="img/icons/location.png" alt="Address"><?php echo $row['Uni_City']; ?></p>

                        </div>
                    </div>
                </div>

                
            <?php endwhile; ?>

        </div>
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(img/bg-img/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a "Best University" ?</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">Wait is over!</h6>
                        <a href="blog.php" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Recomendations</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

   
<?php include 'includes/footer.php';?>