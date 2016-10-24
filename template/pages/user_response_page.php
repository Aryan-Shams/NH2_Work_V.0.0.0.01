 <div class="divider"></div>
<div class="container">
          <div class="section">
 <!-- Search Form -->
          <div class="row">
                               <div class="col s12 m6 l4 ">
              <div class="card-panel">
              <div class="row">
                <form class="col s12">
                    <div class="row">
                    <div class="input-field col s12">
                        <i class="mdi-action-search  prefix"></i>
                      	<input id="icon_prefix3" type="text" class="validate"  name ="q" >
                    	<label for="icon_prefix3">Search</label>
                    </div>
                       <div class="row">
                    <div class="input-field col s12">
                                              <button class="btn cyan waves-effect waves-light right" type="submit" value='Search' name="action">Search
                         <i class="mdi-action-search right"></i>
                         </button>
                    </div>
                  </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
 <!-- Search Form -->
</div>

 <div class="divider"></div>
 <div class="section">
<div class="row">
<div class="col s12 m12 l12">
			<form action="user_response.php" method="POST">

				<?php
				if(mysqli_num_rows ($result)>0){
			echo "<table class='striped responsive-table hoverable' >";
			echo" <thead>";
			echo" <tr>";
			    echo "<th>Sl No.</th>";
				echo "<th>Mobile Number</th>";
				echo "<th>User Status</th>";
				echo "<th>Date</th>";
				echo "<th>Time</th>";
				echo "<th>Delete</th>";
				echo "<th>Edit</th>";
				echo" </tr>";	
echo" </thead>";
				$i=1;
echo "<tbody>";				

				while($row=mysqli_fetch_assoc($result))
				{
					
					echo "<tr>";
					echo "<td>".$i++."</td>";
					echo "<td>".$row["mobileno"]."</td>";
					echo "<td>".$row["userstatus"]."</td>";
					echo "<td>".$row["date"]."</td>";
					echo "<td>".$row["time"]."</td>";
					echo "<td><input name='checkbox[]' type='checkbox' value=".$row['mobileno']." id=".$row['mobileno']."><label for=".$row['mobileno']."></label></td>";

					echo "<td><a class='btn-floating waves-effect waves-light light-green darken-4' href='user_response_edit.php?id=".$row['mobileno']."'><i class='mdi-editor-mode-edit'></i></a></td>";


					echo "</tr>";
				}
				echo " </tbody>";
				echo "</table>";
			}
 
				?>
				 <div class="divider"></div>
				<br>

          <div class="row">
            <div class="col s12 m12 l12 right">
                <button class="btn red darken-3 waves-effect waves-light right" type="submit" name='delete' value='Delete'>Delete
                         <i class="mdi-action-delete   left"></i>
                         </button>
 </div>
</div>
			
			</form>
			<?php
			if (isset($_POST['delete']) && isset($_POST['checkbox'])) {
    			foreach($_POST['checkbox'] as $del_id){
        				$del_id = (int)$del_id;
        				$sql = "DELETE FROM user_response WHERE mobileno = $del_id"; 
       						 mysqli_query($conn,$sql);
   					 }
   					 header('Location: user_response.php');
				}

?>

</div>
</div>
</div>
</div>