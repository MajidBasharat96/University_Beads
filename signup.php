<?php 
include_once('includes/header.php');
?>

<br><br><br><br><br><br><br>
<!-- Default form login -->
<form class="text-center border border-light p-5 col-md-4" method="POST" action="signupAction.php" style="margin-left: 450px;">

    <p class="h4 mb-4">Register Here!</p>

    <!-- Email -->
    <input type="text"  class="form-control mb-4" placeholder="First Name" name="fname">
    <input type="text"  class="form-control mb-4" placeholder="Last Name" name="lname">
    <input type="text"  class="form-control mb-4" placeholder="Phone Number" name="phone">
    <input type="text"  class="form-control mb-4" placeholder="Matric Marks in Percentage (%)" name="matricMarks">
    <input type="text"  class="form-control mb-4" placeholder="Inter Marks in Percentage (%)" name="interMarks">
    <select class="form-control mb-4" name="gender">
        <option value="">Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <input type="text"  class="form-control mb-4" placeholder="City" name="city">
    <input type="email"  class="form-control mb-4" placeholder="email" name="email" autocomplete="off">
    <input type="password" id="passwd" class="form-control mb-4" placeholder="Password" name="passwd" autocomplete="off">
    <input type="password" id="cpasswd" class="form-control mb-4" placeholder="Confirm Password" name="cpasswd" autocomplete="off">

    <input type="submit" name="signup_submit" value="Register">
</form>
<!-- Default form login -->

<?php 
include_once('includes/footer.php');
?>
