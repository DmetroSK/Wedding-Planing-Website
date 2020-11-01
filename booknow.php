<?php
include 'includes/header.php';
?>

<title>Book Now</title>

<body>

<?php
include 'includes/menu.php';
?>
<div class="container">

<br><br>
<center><h2>Book Now</h2></center>
<br><br>
<center>
<h5><b>Select Service</b></h5>
<br>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Event Planing
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Photography
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="" disabled>Videography
  </label>
</div>

<br>
<h5><b>Event Date</b></h5>
<br><br>
<div class="form-group row">

    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
 
</div>
</center>
</div>

<?php
include 'includes/footer.php';
?>
