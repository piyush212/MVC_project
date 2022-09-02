<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="main">
  <h1>Get password here...</h1>
  <form method="post" action="<?php echo URLROOT . '/pages/sin' ?>">
    <input type="text" name="fuser" id="user" name="one"  placeholder="Enter your User_id">
    <br>
    <input type="number" name="fnum" placeholder="Enter your mobile-no">
    <br>
    <input type="email" name="femail" placeholder="Enter your email-id">
    <br>
   <br>
   <input type="submit" name="submit">
</form>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>