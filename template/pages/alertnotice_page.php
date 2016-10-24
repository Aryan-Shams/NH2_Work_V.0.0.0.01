 <div class="divider"></div>

<div class="container">
    <div class="section">


 <!-- Search Form -->
          <div class="row">
            <div class="col s12 m12 l4">
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
<div class="col s12">

			<form action="alertnotice.php" method="POST">
				<?php
				if(mysqli_num_rows ($result)>0){
			echo "<table class='striped responsive-table hoverable' >";
			echo" <thead>";
			echo" <tr>";
				echo "<th>Serial</th>";
				echo "<th>Notice</th>";
				echo "<th>Status</th>";
				echo "<th>Date</th>";
				echo "<th>Time</th>";
				echo "<th>Delete</th>";
				echo "<th>Edit</th>";
				echo" </tr>";	
echo" </thead>";

				$i = 1;
echo "<tbody>";				
				while($row=mysqli_fetch_assoc($result))
				{
					echo "<tr>";
										$id=$row["serial"];

				//	echo "<td>".$row["serial"]."</td>";
					echo "<td>".$i++."</td>";
					echo "<td>".$row["notice"]."</td>";
					echo "<td>".$row["status"]."</td>";
					echo "<td>".$row["date"]."</td>";
					echo "<td>".$row["time"]."</td>";

					echo "<td><input name='checkbox[]' type='checkbox' value=".$id." id=".$id." >
<label for=".$id." ></label> 
					</td>";
					echo "<td><a class='btn-floating waves-effect waves-light light-green darken-4'  href='alertnotice_edit.php? id=".$id."'><i class='mdi-editor-mode-edit'></i></a></td>";
					echo "</tr>";
				}
				echo " </tbody>";
				echo "</table>";
			}
 
				?>
 <div class="divider"></div>

				<br>
				
<!-- Search Form -->
          <div class="row">
            <div class="col s6 m6 l4 right">
           
                <button class="btn red darken-3 waves-effect waves-light right" type="submit" name='delete' value='Delete'>Delete
                         <i class="mdi-action-delete   left"></i>
                         </button>
 </div>

    <div class="col s6 m6 l4 left">
                <a href="alertnotice_add_new.php"  class="btn green darken-3 waves-effect waves-light left" type="submit"> <i class="mdi-content-add-circle   left"></i>Add</a>      
                         
 </div>
</div>

</form>
	

</div>
</div>
</div>
</div>
