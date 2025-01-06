<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 14 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Balloon Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-link:"Balloon Text";
	font-family:"Tahoma","sans-serif";}
.MsoChpDefault
	{font-family:"Calibri","sans-serif";}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:13.0in 8.5in;
	margin:48.25pt .5in .5in .75in;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<?php include('print_header.php'); 

?>
<?php $get_id = $_GET['id'];?>



</head>

<body lang=EN-US>
<div class="empty">
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
<div class="container">
  <div class="row-fluid">
      <div class="col-lg-12">
            
       </div>
    </div>
  </div>
 </div>
</div>

 <div class="container">
 <div class="row-fluid">
 <div class="block">
<div class="row-fluid">

 <div class="mid_box">
 
<div class=WordSection1>

<p class=MsoNormal style='margin-bottom:0in; margin-left:-110px; margin-top:-30px; margin-bottom:.0001pt;line-height:
           normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
           "Times New Roman","serif"'>
		   <a href="#" onclick="window.print()" class="btn btn-info" id="print" data-placement="top" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a>
		   <a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="employed.php"><i class="icon-arrow-left"></i> &nbsp;Back</a></p>		

		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script> 
            

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>



    
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
            <div class="mid-outer">
                <div class="mid-inner">
                    <div class="mid">
                        <div id="main">
	
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody><tr>
                                    <td align="left">
                                        <div align="right">
                                            
                                        </div>
                                        <div id="UpdAddress">
                                        <table style="width: 100%;" cellspacing="0" cellpadding="0">
                                                <?php
													$user_query = mysqli_query($conn,"select * from generalinfo where fullname = '$get_id'")or die(mysqli_error());
													$row = mysqli_fetch_array($user_query)
												?>
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
																			<?php echo $row['fullname'];?>
                                                                            </td>
                                                                        </tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              Permanent Address :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			<?php echo $row['permanent_address'];?>
                                                                            </td>
																			</tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              Email Address :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			<?php echo $row['email_address'];?>
                                                                            </td>
																			</tr>
																			
																				<tr>
                                                                            <td align="right" width="45%">
                                                                             Telephone Number :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			 <?php echo $row['telephone_number'];?>
                                                                            </td>
																			</tr>
																			
																			
																			<tr>
                                                                            </tr>
                                                                        <tr>
                                                                            <td align="right">
                                                                                Civil Status :
                                                                            </td>
                                                                            <td align="left">
                                                                             <?php echo $row['civil_status'];?>
                                                                               </td>
                                                                        </tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              Sex :
                                                                            </td>
                                                                            <td align="left" width="55%">
																		<?php echo $row['sex'];?>
                                                                            </td>
																			</tr>
																			<tr>
																			  <td align="right" width="45%">
                                                                                Date of Birth :
                                                                            </td>
                                                                            <td align="left" width="55%">
                                                                           <?php echo $row['date_of_birth'];?>
                                                                            </td>
																			</tr>
																			  <tr>
                                                                            <td align="right">
                                                                                Religous Affiliation :
                                                                            </td>
                                                                            <td align="left">
                                                                             <?php echo $row['religion'];?>
                                                                               </td>
                                                                        </tr>
																	
																			
                                                                    
																	</tbody>
																	</table>
                                           
                                                                              
                                                                            </td>
                                                                        </tr>
                                                                    </tbody></table>
                                                                </center>
                                                            </fieldset>
                                                        </td>
                                                    </tr>
                                                </tbody></table>  
												
                                      </div>
                                        <br>
                                        <div id="updPersDetails">
		
                                         <table style="width: 100%;" cellspacing="0" cellpadding="0">
                                                    <tbody><tr>
                                                        <td align="left">
                                                          <div class="form_tab">
                                                                Educational Background
                                                          </div><br/><br/>
                                                            <fieldset>
                                                                <center>
																     <?php
													$user_query = mysqli_query($conn,"select * from education where fullname = '$get_id'")or die(mysqli_error());
													$row = mysqli_fetch_array($user_query)
												?>
                                                                    <table cellspacing="6" cellpadding="4" width="100%">
                                                                        <tbody>
																		<tr>
                                                                            <td align="right" width="45%">
                                                                               Education (Degree/College/School/Year Graduated/Honors):

                                                                            </td>
                                                                            <td align="left" width="55%">
																		  <?php echo $row['education'];?>
																			                                       </td>
                                                                        </tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              Professional Skills :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			  <?php echo $row['pskills'];?>
                                                                            </td>
																			</tr>
																			<tr>
                                                                            
                                                                    </tbody>
																	</table>
                                                                </center>
                                                            </fieldset>
                                                        </td>
                                                    </tr>
                                                </tbody></table>      
												
								</div>
                      
                                          <div id="updPersDetails">
		     <?php
													$user_query = mysqli_query($conn,"select * from employed_data where fullname = '$get_id'")or die(mysqli_error());
													$row = mysqli_fetch_array($user_query)
												?>
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
																		  <?php echo $row['employment_status'];?>
                                                                            </td>
                                                                        </tr>
																			
																		
																		
																				<tr>
                                                                            <td align="right" width="45%">
                                                                              What type of Organization do you belong? :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			  <?php echo $row['organization'];?>
                                                                            </td>
																			</tr>
																
																			
																			
                                                                        <tr>
                                                                            <td align="right">
                                                                              Were you selected according to your qualifications? :
                                                                            </td>
                                                                            <td align="left">
                                                                             <?php echo $row['qualifications'];?>      
																			 </td>
                                                                        </tr>
																		<tr><br/></tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              What is your annual income from your present employment? Pesos :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			 <?php echo $row['income'];?>
                                                                            </td>
																			</tr>
																			<tr><br/></tr>
																				<tr>
                                                                            <td align="right" width="45%">
                                                                              Were you able to use the skills acquired from your degree/course to your current work? :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			 <?php echo $row['skills'];?>
                                                                            </td>
																			</tr>
																		
                                                                    </tbody>
																	</table>
	</div> 
                                        
                                        <br>
                                        <center>
                                           
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
</div>
</div>
</div>
</div>
</div>

</body>
<?php include('script.php'); ?>
<div class="empty">
<center>
<hr>
		<footer>
          
        <footer>
</center>
</div>
</html>