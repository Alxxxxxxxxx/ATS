<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))





?>
<?php 

$session_id=$_POST['fullname'];
?>
<?php
include('admin/dbcon.php');
if (isset($_POST['submit'])){
/*General Info*/	
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
/*Educational*/
$education = $_POST['education'];
$pskills = $_POST['pskills'];


/*General Info*/
mysqli_query($conn,"insert into generalinfo (fullname,permanent_address,email_address,telephone_number,civil_status,sex,date_of_birth,religion,region,province,residence) values('$fullname','$padd','$eadd','$telno','$cs','$sex','$dob','$religion','$region','$province','$residence')")or die(mysqli_error());
/*Education*/

mysqli_query($conn,"insert into education (fullname,education,pskills) values('$fullname','$education','$pskills')")or die(mysqli_error());
/*Employed
mysqli_query($conn,"insert into employed_data (fullname,employment_status,organization,qualifications,income,skills) values('$fullname','$status','$org','$qualifications','$income','$skills')")or die(mysqli_error());

mysqli_query($conn,"insert into selfemployed (fullname,business,related,reasons,noofemployee,skills) values('$fullname','$business','$related','$reasons','$numberofemployee','$skills')")or die(mysqli_error());


mysqli_query($conn,"insert into unemployed (fullname,reason,seek,doing,desire,consider,finance) values('$fullname','$reason','$seek','$doing','$desire','$consider','$finance')")or die(mysqli_error());
*/
?>

<?php } ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fill The Form</title>
<link href="table.css" type="text/css" rel="stylesheet">
</head>

<body>
<form name="aspnetForm" method="post" action="education.php" >
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
          <ul>

                    <li><a href="employed.php<?php echo '?id='.$session_id; ?>">Employed</a></li>
					<li><a href="selfemployed.php<?php echo '?id='.$session_id; ?>">Self Employed</a></li>
                    <li><a  href="unemployed.php<?php echo '?id='.$session_id; ?>">Unemployed</a></li>

            </ul>
        </div>
    </div>
    <div class="cleaner">
    </div>
    <div id="container">
        

    <center>
        <h2>
            <span id="lbltitle" style="font-weight:bold;">CSU History</span>
        </h2>
        <div class="mid_box">
            <div class="mid-outer">
                <div class="mid-inner">
                    <div class="mid">
                        <div id="main">
	
             
									
                                        <div align="right">
										 
                                       <span id="lbltitle" style="font-weight:bold;">Login as : <?php echo $session_id;?></span>
                                        </div>
                                        <div id="UpdAddress">
										
                                                                        
                                                                      <div class="art-postcontent art-postcontent-0 clearfix"><p>
				<span style="font-family: 'Century Gothic';"><br></span></p>
				<table border="0" style="width: 780px; "><tbody><tr>
			
					<td width="700" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; "><hr style="margin-top: 0px; margin-bottom: 0px; "><span style="font-family: 'Century Gothic';"><br></span></td></tr><tr>
					<td align="justify" width="650" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; ">
				<font ,arial,helvetica,sans-serif"="" size="2" color="#000000" style="font-family: 'Century Gothic';"><span style="color: rgb(60, 59, 21); font-family: 'Century Gothic', Arial, 'Arial Unicode MS', Helvetica, sans-serif; ">
				<p class="text-indent text-justify" style="margin-top: 0px; margin-bottom: 20px;padding-left:10px;padding-right:10px; box-sizing: border-box; font-size: 16px; line-height: 1.6em; text-align: justify; color: rgb(102, 102, 102); font-family: Lato, sans-serif; font-weight: 300; widows: 1; background-color: rgb(255, 255, 255); ">
		
				The Cagayan State University (CSU) is the first and only state run comprehensive institution of higher learning in Cagayan. It has shared its historic contribution to the development of tertiary education in the Philippines.</p>
				<p class="text-indent text-justify" style="margin-top: 0px; margin-bottom: 20px; box-sizing: border-box; font-size: 16px;padding-left:10px;padding-right:10px;padding-right:10px; line-height: 1.6em; text-align: justify; color: rgb(102, 102, 102); font-family: Lato, sans-serif; font-weight: 300; widows: 1; background-color: rgb(255, 255, 255); ">
				Presidential Decree 1436, signed on June 11, 1978 created the Cagayan State University by merging two existing state colleges: the Cagayan Valley College of Arts & Trades (CVCAT) at Tuguegarao and the Northern Luzon State College of Agriculture (NLSCA) at Piat.</p>
				<p class="text-indent text-justify" style="margin-top: 0px; margin-bottom: 20px; box-sizing: border-box; font-size: 16px; line-height: 1.6em;padding-left:10px;padding-right:10px; text-align: justify; color: rgb(102, 102, 102); font-family: Lato, sans-serif; font-weight: 300; widows: 1;padding-left:10px; background-color: rgb(255, 255, 255); ">
				Rationalized on the issues of efficiency and effectiveness, college courses of other smaller institutions that were under the supervision and control of the former Ministry of Education, Culture and Sports (MECS) were made an integral part of the university system. These were the Aparri Institute of Technology (AIT), Bukig National Agricultural and Technical School (BNATS), Aparri School of Arts and Trades (ASAT), Cagayan Valley Agricultural College (CVAC), Sanchez Mira Rural Vocational School (SMRVS), Western Cagayan School of Arts and Trades (WCSAT) and Gonzaga National Agricultural and Technical School (GNATS).</p>
				<p class="text-indent text-justify" style="margin-top: 0px; margin-bottom: 20px; box-sizing: border-box; font-size: 16px; line-height: 1.6em; padding-left:10px;padding-right:10px;text-align: justify; color: rgb(102, 102, 102); font-family: Lato, sans-serif; font-weight: 300; widows: 1;padding-left:10px; background-color: rgb(255, 255, 255); ">
				These nine pre-existing state institutions were distributed throughout the entire length and breath of the province of Cagayan. Their founding years and laws passed signifying their original establishment. It may be noted that the various merger schools began as elementary or technical secondary schools reflecting the stage of educational needs of the communities where and when they are located and originally established at the time.</p>
				<p class="text-indent text-justify" style="margin-top: 0px; margin-bottom: 20px;padding-left:10px;padding-right:10px; box-sizing: border-box; font-size: 16px; line-height: 1.6em; text-align: justify; color: rgb(102, 102, 102); font-family: Lato, sans-serif; font-weight: 300; widows: 1; background-color: rgb(255, 255, 255); ">
				On January 3, 1979, Dr. Manuel T. Corpus of the University of the Philippines- Davao City assumed as President of the University. Then, on January 5, 1979, the first staff meeting was held where the AD HOC Committee was organized as nuclei for the University Administration. Various officers were designated in acting capacities, who were drawn out from the two state colleges (CVCAT and NLSCA).</p>
				<p class="text-indent text-justify" style="margin-top: 0px;padding-left:10px;padding-right:10px; margin-bottom: 20px; box-sizing: border-box; font-size: 16px; line-height: 1.6em; text-align: justify; color: rgb(102, 102, 102); font-family: Lato, sans-serif; font-weight: 300; widows: 1; background-color: rgb(255, 255, 255); ">The CSU Central Administration Office was established in the CVCAT unit until the Gonzaga unit was developed as a main campus where operation was centralized. The AD HOC committee met and the monthly regular staff meeting was launched in the BNATS unit.<br/><br/>To uplift the educational qualifications of the faculty, the Faculty and Staff Development Program was set up in the form of graduate programs effective summer of 1979. The come-on was fifty per cent discount in tuition fee.</p></span></font></td></tr></tbody></table><p></p><p><span style="border-collapse: collapse; -webkit-border-horizontal-spacing: 2px; -webkit-border-vertical-spacing: 2px;"><br></span></p></div>
                                                                
                                                <?php include('general.php');?>
                                      </div>
                                        <br>
                                        <div id="updPersDetails">
		
                                               <?php include('educational.php');?>
												<?php include('Employeds.php');?>
                                                
                                            
	</div>
                                        <br>
                                        <?php include('selfs.php');?>
                                        <br>
                                        <?php include('never.php');?>
                                        <br>
                                        
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
