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
        </div>c 
      </div>
  </div>
    <div class="cleaner">
    </div>
    <div id="menu">
      <div id="menu_in">
		
            <ul>
                <li><a href="education.php" >Educational Background </a></li>
  
                    <li><a href="../Registration/Instruction.aspx" >Employment Data</a>
</li>
                    <li><a onclick="javascript:popupFee();" href="javascript:void(0)" >Unemployed Data</a></li>

            </ul>
        </div>
    </div>
    <div class="cleaner">
    </div>
    <div id="container">
       

  
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
                                        <div id="">
                                        
                                                        <td align="left">
                                                          <div class="form_tab">
                                                               Educational Background</div>
                                                            <fieldset>
                                                                <center>
                                                                <table cellspacing="5" cellpadding="4" width="100%">
                                                                        
                                                                    <table cellspacing="5" cellpadding="4" width="100%">
                                                                        <tbody>
																		<tr>
                                                                            <td align="right" width="45%">
                                                                               Education :

                                                                            </td>
                                                                            <td align="left" width="55%">
																			<table class="table" border = "1">
    <thead>
      <tr>
        <th>Degree & Specialization |</th>
        <th>College/School |</th>
        <th>Year Graduated |</th>
        <th>Honor(s) or Award(s) received</th>
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
    </tbody>
 </table>

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
                                                                            <td align="right" width="45%">
                                                                             Professional/Licensure/Competency Examination Passed :
                                                                            </td>
                                                                            <td align="left" width="55%">
																				
                                                                            </td><table class="table" border = "1">
    <thead>
      <tr>
        <th>Name of Examination |</th>
        <th>Date Taken |</th>
        <th>Rating |</th>
        <th>Issued by</th>
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
    </tbody>
 </table>
																			</tr>
																		<tr><br/></tr>
																				<tr>
                                                                            <td align="right" width="45%">
                                                                              Check top three(3) reasons for choosing/taking undergraduate course :
                                                                            </td>
                                                                            <td align="left" width="55%">
																		<table cellpadding="0" cellspacing="" border="1" class="table" id="example">
						
										<thead>
										  <tr>
											
												<th></th>
												
											
												<th>Reasons</th>
										   </tr>
										</thead>
										<tbody>
												
													<tr>
												
															<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Good grades in the subject area</td>											
														</tr>
														<tr>
															<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Good grades in high school</td>
														</tr>
														<tr>
															<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Influence of parents or relatives</td>
														</tr>
														<tr>
															<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Peer influence</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Inspired by a role model</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Strong passion for the profession</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Prospect for immediate employment</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Status or prestige of the profession</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Availability of course offering in chosen institution</td>
														</tr>
														
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Prospect of career advancement</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Prospect of attractive compensation</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Affordable for the family</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>No particular choice or no better idea</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Scholarship preference</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Others</td>
														</tr>
										</tbody>
									</table>
                                                                            </td>
																			</tr>
																				<tr><br/></tr>
																			
																			
                                                                        <tr>
                                                                            <td align="right">
                                                                                Please list down advance or graduate studies you have taken after college :
                                                                            </td>
                                                                            <td align="left">
                                                                                <table class="table"  border = "1">
    <thead>
      <tr>
        <th>Advance Graduate Studies Undertaken |</th>
        <th>Field of Specialization |</th>
        <th>Institution |</th>
        <th>Period</th>
		<th>No. of Units/Degree Earned</th>
      </tr>
    </thead>
    <tbody>
      <tr class="odd">
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
		  <td id="" contenteditable="true"></td>
      </tr>
      <tr>
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
		  <td id="" contenteditable="true"></td>
      </tr>
      <tr class="odd">
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
		  <td id="" contenteditable="true"></td>
      </tr>
    </tbody>
 </table>
                                                                               </td>
                                                                        </tr>
																		<tr><br/></tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              Trainings Attended After College :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			 <table class="table" border = "1">
    <thead>
      <tr>
        <th>Advance Graduate Studies Undertaken |</th>
        <th>Field of Specialization |</th>
        <th>Institution |</th>
        <th>Period</th>
		<th>No. of Units/Degree Earned</th>
      </tr>
    </thead>
    <tbody>
      <tr class="odd">
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
		  <td id="" contenteditable="true"></td>
      </tr>
      <tr>
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
		  <td id="" contenteditable="true"></td>
      </tr>
      <tr class="odd">
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
		  <td id="" contenteditable="true"></td>
      </tr>
    </tbody>
 </table>
                                                                            </td>
																			</tr>
																			<tr><br/></tr>
																			
																		
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
window.location = "home.php";
</script>
<?php } ?>
