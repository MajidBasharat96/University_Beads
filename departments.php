<?php include 'includes/header.php';?>
<!-- page title area end -->
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
                             $query = "SELECT * FROM `universities_dept`";
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