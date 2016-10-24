 <div class="divider"></div>

<div class="container">


<!--Search Section -->
<div class="section">
  
<!-- Search Form -->
          <div class="row">
            <div class="col s12 m12 l6 left">
              <div class="card-panel">
              <div class="row">
                <form class="col s12" action='help.php' method="POST" >
                    <div class="row">
                    <div class="input-field col s12">

                        <select name="myselectedbox">
                         <option value="ALL">ALL</option>
 <option value="SAFE">SAFE</option>
 <option value="HELP">HELP</option>

 </select>
                    </div>

                       <div class="row">
                    <div class="input-field col s12">
                                              <button class="btn cyan waves-effect waves-light right" type="submit" name="status" value="status">Search
                         <i class="mdi-action-search right"></i>
                         </button>
                    </div>
                  </div>

                  </div>
                </form>
                </div>
              </div>
            </div>

 <!-- Search Form -->
            <div class="col s12 m12 l6 right">
              <div class="card-panel">
              <div class="row">
                <form class="col s12" action='help.php' method='GET' >
                    <div class="row">
                    <div class="input-field col s12">
                        <i class="mdi-action-search  prefix"></i>
                        <input id="icon_prefix3" type="text" class="validate"  type="text" name="q" id="search"  >
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
 </div><!--Search Secton Ends -->


<!-- //////////////////////////////User Data Table Section Starts////////////////////////////////// -->
 <div class="section">
  <div class="row">
  <div class="col s12">

      <form action="help.php" method="POST">
        <?php

if(isset($_POST['status'])){

  $myselectedbox = $_POST['myselectedbox'];

  echo "<h1> Showing users who are asked for ".$myselectedbox."</h1>";



if($myselectedbox=='ALL')
{
  $sql="SELECT * From location JOIN user_data ON (location.mobileno = user_data.mobileno) Join user_response ON (user_response.mobileno=location.mobileno) ORDER BY location.date DESC  ";
}
else{
$sql="SELECT * From location JOIN user_data ON (location.mobileno = user_data.mobileno) Join user_response ON (user_response.mobileno=location.mobileno) where user_response.userstatus='".$myselectedbox."'   ORDER BY location.date     ";
}


$result=mysqli_query($conn,$sql);
}


        if(mysqli_num_rows ($result)>0){
    echo "<table class='striped responsive-table hoverable' >";
      echo" <thead>";
      echo" <tr>";
      //  echo "<th>Sl No.</th>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Mobile Number</th>";
        echo "<th>Address</th>";
                echo "<th>Status</th>";
        echo "<th>Date</th>";
        echo "<th>Time</th>";
                echo "<th>Edit</th>";

      echo" </tr>"; 
echo" </thead>";
//$ik=1;
echo "<tbody>"; 

          while($row=mysqli_fetch_assoc($result))
        {
          array_push($location, array($row["name"], $row["lattitude"], $row["longititude"], $row["mobileno"]));
          echo "<tr>";
          echo "<td>".$row["name"]."</td>";
          echo "<td>".$row["mail"]."</td>";
          echo "<td>".$row["mobileno"]."</td>";
          echo "<td>".$row["address"]."</td>";
          echo "<td>".$row["userstatus"]."</td>";
          echo "<td>".$row["date"]."</td>";
          echo "<td>".$row["time"]."</td>";

        
echo "<td><a class='btn-floating waves-effect waves-light light-green darken-4' href='help_edit.php? id=".$row['mobileno']."' ><i class='mdi-editor-mode-edit'></i></a></td>";


        echo "</tr>";
        }
    
    echo " </tbody>";
        echo "</table>";

      }
?>
 <div class="divider"></div>

</form>
</div>
</div>
</div><!-- User Data table Section close -->


       <div class="section">
  <div class="row">

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
<div id="googleMap" style="width:1200px;height:800px; align: center"></div>

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
<div id="googleMap" style="width:1200px;height:800px; align: center"></div>


</div>
</div>
</div>