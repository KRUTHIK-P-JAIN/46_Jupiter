<?php


    include("admin_header.php");//redirect to login page to secure the welcome page without login access.

?>
<html><head><style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #33;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}
 #navbar {
  overflow: hidden;
  background-color: #33;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 50px;
  margin: 8px 10;
  border: none;
  border-radius: 4px ;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

#a {
  border-radius: 100px 100px;
  background-color: #f2f2f2;
  padding: 0px 100px;
}
.button {
  background-color: #0000FF; /* blue */
  border: none;
  color: white;
  padding: 5px 42px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
</style></head><div id="a">
<br>


				<ul>	
				<li><a href="adde.php"><input type="submit" class="button" value="ADD BROAD AREA" ></a></li>
			       <li><a href="addc.php"><input type="submit" class="button" value="ADD COORDINATOR" ></a></li>
				                               
                           <li><a href="deletec.php"><input type="submit" class="button" value="REMOVE COORDINATOR" ></a> </li></ul>
<br>
<br>					<section class="section" id="exampl">	  
                      <center><h1>COORDINATORS</h1></center>  <table>
						
						<thead>
							<tr>
							    <th>BROAD AREA</th>
								<th>NAME</th>
								<th>USN</th>
								<th>BRANCH</th>
								<th>SEM</th>
								<th>MOBILE</th>
								</tr>
						</thead>
						
<?php
        include("db_conection.php");
        $view_data="select events,name,usn,branch,sem,mobile from coordinator where category='user'";//select query for viewing users.
        $run=mysqli_query($link,$view_data);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
			$events=$row[0];
            $name=$row[1];	
            $usn=$row[2];
			$branch=$row[3];
			$sem=$row[4];
			$mobile=$row[5];
            
        ?>
							<tr>
							<!--here showing results in the table -->
								<td><?php echo $events;  ?></t>
								<td><?php echo $name;  ?></td>
								<td><?php echo $usn;  ?></td>
								<td><?php echo $branch;  ?></td>
								<td><?php echo $sem;  ?></td>
								<td><?php echo $mobile;  ?></td>
							</tr>

        <?php } ?>


					</table></section>	<br><br>
<center>                             
<button class="button button1" OnClick="CallPrint(this.value)" align="center" >Print</button></center>
    <br><br></div><script>
$(function($) {
});


function CallPrint(strid) {

var prtContent2 = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');

WinPrint.document.write(prtContent2.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>				
<?php
include("admin_footer.php");
?>
<br><br>