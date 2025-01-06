<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))


?>
<!doctype html>
<?php include('dbcon.php');


?>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link href="../table.css" type="text/css" rel="stylesheet">
	
</head>

<body>
<form method="post" action="" autocomplete="on">
  <div class="top_banner">
    <div class="in_banner">
            <div class=" logo">
              <img alt="jee" src="../images/banner.png"></div>
      <div class="banner_text">
        <h1>
                  Cagayan State University - Carig Campus
          </h1>
              <h2>
                  ONLINE ALUMNI TRACKING SYSTEM
              </h2>
        </div>
      </div>
  </div>
    <div class="cleaner">
    </div>
    <div id="menu">
        <div id="menu_in">
  <ul>
					   <li><a href="home.php" >List of Student</a></li>
					    <li><a href="adduser.php" >Add Account</a></li>
                    <li><a href="employed.php" >Employed Student</a></li>
					<li><a href="selfemployed.php" >Self Employed Student</a></li>
                    <li><a  href="unemployed.php" >Unemployed Student</a></li>

            </ul>
        </div>
    </div>
    <div class="cleaner">
    </div>
    <div id="container">
       

    <center>
        <h2>
            <span id="lbltitle" style="font-weight:bold;">List of CSU-Carig Alumni</span>
        </h2>
        <div class="mid_box">
            <div class="mid-outer">
                <div class="mid-inner">
                    <div class="mid">
                        <div id="main">
	
         
                                     <form method = "POST" action = "searchstudent.php">
                                        <div id="UpdAddress">
                                                <table style="width: 100%;" cellspacing="0" cellpadding="0" class = "table" id = "example">
                                                    <tbody><tr>
                                                        <td align="left">
														 <div align="right">
														 <br/>
                                         Search Student Name: <input type = "text" name = "search"><br/><br/><input type="submit" name="submit" id="submit" class="" >
                                        </div>
                                                          <div class="form_tab">
                                                               General Information</div>
                                                            <fieldset>
                                                                <center>
														
                                                                        
                                                                    <table cellspacing="1" cellpadding="0" border = "1"  width="100%">
                                                                      <thead>
										  <tr>
											
												<th>Fullname</th>
												<th>Address</th>
												<th>Date of Birth</th>
												<th>Civil Status</th>
												<th>Gender</th>
												<th>Contact Number</th>
												<th>Educational Background</th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn,"select general_info_id,generalinfo.fullname,permanent_address,date_of_birth,civil_status,sex,telephone_number,education from generalinfo left outer join education on generalinfo.fullname = education.fullname order by generalinfo.fullname asc")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['general_info_id'];
													?>
									
													<tr>
												
														<td><?php echo $row['fullname']; ?></td>
														<td><?php echo $row['permanent_address']; ?></td>											
														<td><?php echo $row['date_of_birth']; ?></td>				
														<td><?php echo $row['civil_status']; ?></td>				
														<td><?php echo $row['sex']; ?></td>
														<td><?php echo $row['telephone_number']; ?></td>		
														<td><?php echo $row['education']; ?></td>		
													</tr>
												<?php } ?>
										</tbody>
																	</table>
                                                                   </fieldset>
                                       
                                        <br>
                                        <center>
										 
                                           
                                        </center>
                                    </td>
                                </tr>
                         </tbody></table>
                        </form>
                        
</div>
                        
                        <br>
                        
                    </div>
                </div>
            </div>
            <div class="bottom-outer">
                <div class="bottom-inner">
                    <div class="bottom">
                    </div>
                </div>
            </div>
        </div>

        </form>
</body>
</html>
		<?php include('script.php'); ?>
<?php
include('dbcon.php');
if (isset($_POST['submit'])){
	$search = $_POST['search'];
	
	$sql = "select * from generalinfo where fullname = '$search' order by fullname asc";
?>
<script>
window.location = "home.php";
</script>	
<?php }
?>


