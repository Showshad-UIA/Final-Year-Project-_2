<div class="box"><!-- box Starts -->

<?php

$session_email = $_SESSION['customer_email'];

$select_customer = "select * from customers where customer_email='$session_email'";

$run_customer = mysqli_query($con,$select_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];


?>

<h1 class="text-center">Make Payment here !</h1>

<p class="lead text-center">

<a href="order.php?c_id=<?php echo $customer_id; ?>">Pay Off line</a>

</p>

<center><!-- center Starts -->

<p class="lead">

<a href="customer/confirm.php?">

Pay Online With VISA/Master Card

<img src="images/797185_orig.jpg" width="400" height="150" class="img-responsive">

</a>

</p>

</center><!-- center Ends -->

</div><!-- box Ends -->