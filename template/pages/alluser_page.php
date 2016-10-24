 <div class="divider"></div>
<div class="container">
    <div class="section">
		<!-- Search Form -->
          <div class="row">
            <div class="col s12 m6 l4">
              <div class="card-panel">
              <div class="row">
                <form class="col s12" action='alluser.php' method='GET'>
                    <div class="row">
                    <div class="input-field col s12">
                        <i class="mdi-action-search  prefix"></i>
                                	<input id="icon_prefix3 search" type="text" class="validate"  name ="q" >
                    	<label for="icon_prefix3">Search by Mobile Number</label>
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


<div class="section">

<div class="row">
<div class="col s12 m12 l12">
            <div class="divider"></div>

			<form action="alluser.php" method="POST">
				<?php
				if(mysqli_num_rows ($result)>0){
			echo "<table class='striped responsive-table hoverable  centered' >";
			echo" <thead>";
			echo" <tr>";
				echo "<th>Id</th>";
				echo "<th>Name</th>";
				echo "<th>Email</th>";
				echo "<th>User Name</th>";
				echo "<th>Mobile Number</th>";
				echo "<th>User Type</th>";
				echo "<th>Active</th>";
				echo "<th>Lattitude</th>";
				echo "<th>Longititude</th>";
				echo "<th>Address</th>";
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
					
				$rid=$row["id"];
					echo "<tr>";
					//echo "<td>".$row["id"]."</td>";
					echo "<td>".$i++."</td>";
					echo "<td>".$row["name"]."</td>";
					echo "<td>".$row["mail"]."</td>";
					echo "<td>".$row["username"]."</td>";
					echo "<td>".$row["mobileno"]."</td>";
					echo "<td>".$row["usertype"]."</td>";
					echo "<td>".$row["active"]."</td>";
					echo "<td>".$row["lattitude"]."</td>";
					echo "<td>".$row["longititude"]."</td>";
					echo "<td>".$row["address"]."</td>";
					echo "<td>".$row["date"]."</td>";
					echo "<td>".$row["time"]."</td>";
  
			
					echo "<td><input name='checkbox[]' type='checkbox' value=".$row['mobileno']." id=".$row['mobileno'].">
<label for=".$row['mobileno']."></label>
					</td>";


				echo "<td><a class='btn-floating waves-effect waves-light light-green darken-4' href='alluseredit.php?id=".$row['id']."'><i class='mdi-editor-mode-edit'></i></a></td>";
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
            <div class="col s12 m12 l12 right">
                <form class='centered'>
                <button class="btn red darken-3 waves-effect waves-light right" type="submit" name='delete' value='Delete'>Delete
                         <i class="mdi-action-delete left"></i>
                         </button>
</form>
 </div>
</div>
 <!-- Search Form -->

</form>
</div>
</div>


			

</div>
</div>