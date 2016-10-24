 <div class="divider"></div>

<div class="container">
          <div class="section">
<!-- Search Form -->
          <div class="row">
            <div class="col s12 m6 l4">
              <div class="card-panel">
              <div class="row">
                <form class="col s12" action='location.php' method='GET' >
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

              <?php //var_dump(mysqli_fetch_assoc($result));
$location = array();
 ?>
            </div>
          </div>
 <!-- Search Form -->

</div>
 <div class="divider"></div>

 <div class="section">
<div class="row">
<div class="col s12 m12 l12">
			<form action="location.php" method="POST">




				<?php
				if(mysqli_num_rows ($result)>0){
			echo "<table class='striped responsive-table hoverable'>";
			echo"<thead>";
			echo"<tr>";
			echo "<th>Sl No.</th>";
				echo "<th>Mobile Number</th>";
				echo "<th>Lattitude</th>";
				echo "<th>Longititude</th>";
				echo "<th>Address</th>";
				echo "<th>Date</th>";
				echo "<th>Time</th>";
				echo "<th>Delete</th>";
				echo "<th>Edit</th>";
			echo"</tr>";
echo"</thead>";
			
			echo "<tbody>";				
$jk=1;
				while($row=mysqli_fetch_assoc($result))
				{
					array_push($location, array((isset($row["name"]) ? $row["name"]: null), $row["lattitude"], $row["longititude"], $row["mobileno"]));
			echo "<tr>";
			echo "<td>".$jk++."</td>"; 
					echo "<td>".$row["mobileno"]."</td>"; 
					echo "<td>".$row["lattitude"]."</td>";
					echo "<td>".$row["longititude"]."</td>";
					echo "<td>".$row["address"]."</td>";
					echo "<td>".$row["date"]."</td>";
					echo "<td>".$row["time"]."</td>";
					echo "<td><input name='checkbox[]' type='checkbox' value=".$row['mobileno']." id=".$row['mobileno']."  >
						<label for=".$row['mobileno']."></label> </td>";
				
echo "<td><a class='btn-floating waves-effect waves-light light-green darken-4' href='location_edit.php?id=".$row['mobileno']."'><i class='mdi-editor-mode-edit'></i></a></td>";



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
        				$sql = "DELETE FROM location WHERE mobileno = $del_id"; 
       						 mysqli_query($conn,$sql);
   					 }
   					 header('Location: location.php');
				}
?>

</div>
</div>
</div>

 <div class="section">
<div class="row">
<div class="col s12 m12 l12">
<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>
<script>

// Set location to centre on
var myCenter=new google.maps.LatLng(23.786982,90.377493);


var locations = <?php echo json_encode($location); ?>;


function initialize()
{
//apply location marker to centre on
var mapProp = {
  center:myCenter,
  zoom:18,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
position:myCenter,
title: 'My centre location marker'
});

marker.setMap(map);

 
// apply other location markers
for (i = 0; i < locations.length; i++) {

marker = new google.maps.Marker({
position: new google.maps.LatLng(locations[i][1], locations[i][2]),
map: map,
title: locations[i][0]+" "+locations[i][3]
});
}
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>



<div id="googleMap"  style="width:1500px;height:500px; align: center"></div>



<?php

	if(isset($_POST['edit'])) {

		$mobileno=$_POST['mobileno'];
		$lattitude = $_POST['lattitude'];
		$longititude = $_POST['longititude'];
		$address = $_POST['address'];
		$date = $_POST['date'];
		$time=$_POST['time'];
		
		
		$edit_sql = "UPDATE location SET mobileno='".$mobileno."',lattitude='".$lattitude."',longititude='".$longititude."',address='".$address."',date='".$date."',time='".$time."' WHERE mobileno = '".$mobileno."'";

		$x=mysqli_query($conn,$edit_sql);
		if ($x) {
			echo "Updated";

			   					 header('Location: location.php');

		}
		else{
			echo "Not Save";
		}

	}
?>
</div>
</div>
</div>
</div>