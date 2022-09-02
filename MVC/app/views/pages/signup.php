<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="main">
  <h1>Signup Here...</h1>
  <form method="post" action="<?php echo URLROOT . '/pages/save' ?>">
    <input type="text" name="user" id="user" name="user"  placeholder="Enter your User_id">
    <br>
    <input type="number" name="num" placeholder="Enter your mobile-no">
    <br>
    <input type="email" name="email" placeholder="Enter your email-id">
    <br>
    <input type="password" name="pass" placeholder=" write your Password">
    <br>
   <br>
   <input type="submit" name="submit">
</form>
<?php require APPROOT . '/views/inc/footer.php'; ?>
</div>