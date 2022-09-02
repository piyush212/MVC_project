 <table border= 1px>
   <tr>
      <th>Post date</th>
      <th>User_name</th>
      <th>Post</th>
   </tr>
 <?php foreach ($data ['post']as $post): ?>
   <tr>
   <td><?= $post->Date?></td>
    <td><?= $post->User_name ?></td>
    <td><?= $post->Post?></td>
    <br>
   </tr>
    <?php endforeach ?> 
 </table>
 <a href="<?php echo URLROOT . '/pages/logout'?>">logout <br></a>
      
