<body>
  <div class="main">
<?php require APPROOT . '/views/inc/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
<form method="post" action="<?php echo URLROOT . '/pages/dis' ?>" >
    <input type="text" name="one" id="user" placeholder="Enter your User_id">
    <br>
    <input type="password" name="pass" placeholder="Enter your Password">
    <br>
   <br>
   <input type="submit" name="submit" value="Login">
</form>
<a href="<?php echo URLROOT . '/pages/signin'?>">signup       <br></a>
<a href="<?php echo URLROOT . '/pages/forg'?>">forget password??</a>
<?php require APPROOT . '/views/inc/footer.php'; ?> 
  </div>
</body>