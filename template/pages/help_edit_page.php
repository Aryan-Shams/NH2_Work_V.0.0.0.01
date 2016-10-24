 <div class="divider"></div>

<div class="container">


<!--Search Section -->
<div class="section">
  
<form action="help.php" method="POST">
 User Status:
<select name="myselect">
 <option value="SAFE">SAFE</option>
 <option value="HELP">HELP</option>
 </select><br>
  <input type="submit" name="change_status">
       <input type='hidden' name='id' value="<?php echo $id; ?>"><br>


    </form>


</div>
</div>
</div>