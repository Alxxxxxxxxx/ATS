<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fill The Form</title>
<link href="table.css" type="text/css" rel="stylesheet">
</head>

<body>
<form method="post" action="" autocomplete="on">
  <div class="top_banner">
    <div class="in_banner">
            <div class=" logo">
              <img alt="jee" src="images/banner.png"></div>
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

        </div>
    </div>
    <div class="cleaner">
    </div>
    <div id="container">
       

    <center>
        <h2>
            <span id="lbltitle" style="font-weight:bold;">Fill up form</span>
        </h2>
        <div class="mid_box">
            <div class="mid-outer">
                <div class="mid-inner">
                    <div class="mid">
                        <div id="main">
	
         
                                        <div align="right">
                                            # Marked Fields are Optional
                                        </div>
                                        <div id="UpdAddress">
                                                <table style="width: 100%;" cellspacing="0" cellpadding="0">
                                                
                                                    <tbody><tr>
                                                        <td align="left">
                                                          <div class="form_tab">
                                                               General Information</div>
                                                            <fieldset>
                                                                <center>
                                                                <table cellspacing="5" cellpadding="4" width="100%">
                                                                        
                                                                    <table cellspacing="5" cellpadding="4" width="100%">
                                                                        <tbody>
																		<tr>
                                                                            <td align="right" width="45%">
                                                                               Full Name :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			<input name="fullname" type="text" maxlength="46" required>
                                                                            </td>
                                                                        </tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              Permanent Address :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			<input name="paddress" type="text" maxlength="46" required>
                                                                            </td>
																			</tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              Email Address :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			<input name="eaddress" type="text" maxlength="46" required>
                                                                            </td>
																			</tr>
																			
																				<tr>
                                                                            <td align="right" width="45%">
                                                                              Telephone or Contact Number(s) :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			<input name="telephone" type="text" maxlength="46" required>
                                                                            </td>
																			</tr>
																			
																			
																			<tr>
                                                                            </tr>
                                                                        <tr>
                                                                            <td align="right">
                                                                                Civil Status :
                                                                            </td>
                                                                            <td align="left">
                                                                                <select name="cs" required>
																				<option  value="">--Select--</option>
																				<option value="Single">Single</option>
																				<option value="Married">Married</option>
																				<option value="Separeted">Separated</option>
																				<option value="Single Parent">Single Parent</option>
																				<option value="Widow or Widower">Widow or Widower</option>

																				</select>
                                                                               </td>
                                                                        </tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              Sex :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			<input name="sex" type="radio" value = "Male" maxlength="46" required>Male &nbsp;
																			<input name="sex" type="radio" value = "Female" maxlength="46" required>Female &nbsp;
                                                                            </td>
																			</tr>
																			<tr>
																			  <td align="right" width="45%">
                                                                                Date of Birth :
                                                                            </td>
                                                                            <td align="left" width="55%">
                                                                                <input type="date" name="dob" required>
                                                                            </td>
																			</tr>
																			  <tr>
                                                                            <td align="right">
                                                                                Religous Affiliation :
                                                                            </td>
                                                                            <td align="left">
                                                                                <select name="Religous" required>
																				<option  value="">--Select--</option>
																				<option value="Roman Catholic">Roman Catholic</option>
																				<option value="Iglesia Ni Cristo">Iglesia Ni Cristo</option>
																				<option value="Methodist">Methodist</option>
																				<option value="Jehovah's Witnesses">Jehovah's Witnesses</option>
																				<option value="Born Again Christian">Born Again Christian</option>
																				<option value="Others">Others</option>
										
																				</select>
                                                                               </td>
                                                                        </tr>
																		<tr>
                                                                            <td align="right">
                                                                                Region of Origin :
                                                                            </td>
                                                                            <td align="left">
                                                                                <select name="Region" required>
																				<option  value="">--Select--</option>
																				<option value="Region 1">Region 1</option>
																				<option value="Region 2">Region 2</option>
																				<option value="Region 3">Region 3</option>
																				<option value="Region 4">Region 4</option>
																				<option value="Region 5">Region 5</option>
																				<option value="Region 6">Region 6</option>
																				<option value="Region 7">Region 7</option>
																				<option value="Region 8">Region 8</option>
																				<option value="Region 9">Region 9</option>
																				<option value="Region 10">Region 10</option>
																				<option value="Region 11">Region 11</option>
																				<option value="Region 12">Region 12</option>
																				<option value="Region 13">Region 13</option>
																				<option value="CAR">CAR</option>
																				<option value="ARMM">ARMM</option>
																				<option value="CARAGA">CARAGA</option>
																				</select>
                                                                               </td>
                                                                        </tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              Province :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			<input name="province" type="text" maxlength="46" required>
                                                                            </td>
																			</tr>
																			
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              Location of Residence :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			<select name="Residence" required>
																				<option  value="">--Select--</option>
																				<option value="Urban">Urban</option>
																				<option value="Rural">Rural</option>
																				<option value="Rurban">Rurban</option>
																										
																				</select>
                                                                            </td>
																			</tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              Professional Skills :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			<input name="pskills" type="text" maxlength="46" required>
                                                                            </td>
																			</tr>
																			<tr>
                                                                    </tbody>
																	</table>
                                                                 
                                       
                                        <br>
                                        <center>
										 
                                            <table cellspacing="0" width="80%" border="0">
                                                <tbody><tr>
                                                    <td align="center">
                                                        <input type="submit" name="submit" id="submit" class="sub_red" >
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </center>
                                    </td>
                                </tr>
                            </tbody></table>
                        
</div>
   <div id="updPersDetails">
                                        
                                                        <td align="left">
                                                          <div class="form_tab">
                                                               Questions for Presently Employed</div>
                                                            <fieldset>
                                                                <center>
                                                                <table cellspacing="5" cellpadding="4" width="100%">
                                                                        
                                                                    <table cellspacing="5" cellpadding="4" width="100%">
                                                                        <tbody>
																		<tr>
                                                                            <td align="right" width="45%">
                                                                               Are you presently employed/self employed? :

                                                                            </td>
                                                                            <td align="left" width="55%">
																		<input name="employed" type="radio" value = "Yes" required>Yes
																		<input name="employed" type="radio" value = "No" required>No
                                                                            </td>
                                                                        </tr>
																			
																			<tr>
                                                                            <td align="right" width="45%">
                                                                             Please indicate below your employment history starting from latest(includes government and private) :
                                                                            </td>
                                                                            <td align="left" width="55%">
																				
                                                                            <table class="table" border = "1">
    <thead>
      <tr>
        <th>Name of Employer/Agency</th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Status</th>
        <th>Position</th>
      </tr>
    </thead>
    <tbody>
      <tr class="odd">
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
      </tr>
      <tr>
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
      </tr>
      <tr class="odd">
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
      </tr>
	    <tr class="odd">
        <td >Employment Status : (a) regular or permanent (b) contractual (c) temporary (d) casual (e) on job order</td>
        <td ></td>
        <td ></td>
        <td ></td>
      </tr>
    </tbody>
 </table>
																			</tr>
																		<tr><br/></tr>
																		
																				<tr>
                                                                            <td align="right" width="45%">
                                                                              What type of Organization do you belong? :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			  <select name="organization" required>
	<option value="">--Select--</option>
	<option  value="Government Organization (GO)">Government Organization (GO)</option>
	<option  value="Business Organization (BO)">Business Organization (BO)</option>
	<option  value="Private Organization">Private Organization</option>
	<option  value="Cooperative">Cooperative</option>
	<option  value="Non Government Organization">Non Government Organization</option>
<option  value="Peoples Organization">Peoples Organization</option>
</select><br/>
                                                                            </td>
																			</tr>
																				<tr><br/></tr>
																			
																			
                                                                        <tr>
                                                                            <td align="right">
                                                                              Were you selected according to your qualifications? :
                                                                            </td>
                                                                            <td align="left">
                                                                              <select name="selection" required>
	<option value="">--Select--</option>
	<option  value="Selection">Selection</option>
	<option  value="Retention">Retention</option>
	<option  value="Promotion">Promotion</option>
	
</select><br/>
                                                                               </td>
                                                                        </tr>
																		<tr><br/></tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              What is your annual income from your present employment? Pesos :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			 <input type = "text" name = "income">
                                                                            </td>
																			</tr>
																			<tr><br/></tr>
																				<tr>
                                                                            <td align="right" width="45%">
                                                                              Were you able to use the skills acquired from your degree/course to your current work? :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			  <select name="skills" required>
	<option value="">--Select--</option>
	<option  value="Yes">Yes</option>
	<option  value="No">No</option>

</select><br/>
                                                                            </td>
																			</tr>
																		
                                                                    </tbody>
																	</table>
                                                                 
                                       
                                        <br>
                                        <center>
                                            <table cellspacing="0" width="80%" border="0">
                                                <tbody><tr>
                                                    <td align="center">
                                                        <input type="submit" name="submit" id="submit" class="sub_red" >
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </center>
                                    </td>
                                </tr>
                            </tbody></table>
                        
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
<?php
include('admin/dbcon.php');
if (isset($_POST['submit'])){
	
$fullname = $_POST['fullname'];
$padd = $_POST['paddress'];
$eadd = $_POST['eaddress'];
$telno = $_POST['telephone'];
$cs = $_POST['cs'];
$sex = $_POST['sex'];
$dob = $_POST['dob'];
$religion = $_POST['Religous'];
$region = $_POST['Region'];
$province = $_POST['province'];
$residence = $_POST['Residence'];


mysqli_query($conn,"insert into generalinfo (fullname,permanent_address,email_address,telephone_number,civil_status,sex,date_of_birth,religion,region,province,residence) values('$fullname','$padd','$eadd','$telno','$cs','$sex','$dob','$religion','$region','$province','$residence')")or die(mysqli_error());
?>
<script>
window.location = "employed.php";
</script>
<?php } ?>
