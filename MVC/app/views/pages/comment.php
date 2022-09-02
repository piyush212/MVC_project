<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/styleof.css">
<form method="post" action="<?php echo URLROOT . '/pages/post' ?>" >
<div class="comm">
<input type="text" name="user2" id="user" placeholder="Enter your user id here">
<br>
    
    <input type="text" name="comm" id="user1" placeholder="Enter your comment here">
    <br>
   <input type="submit" name="post" id = "btn" value="Post">
   <br>
   <br>
   </form>
   <form method="post" action="<?php echo URLROOT . '/pages/allpost' ?>">
   <pr> **************************************************************************</pr>
   <br>
   <input type="text" name="old" id="user" placeholder="Enter your user id here">
   <br>
   <input type="submit" name="oldpost" value="oldpost">
   <br>
   <a href="<?php echo URLROOT . '/pages/logout'?>">logout <br></a>
   </form>
   
</div>