<!--
' Copyright 2020~2022 SYSON, MICHAEL B.
'
' Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You ' may obtain a copy of the License at
'
' http://www.apache.org/licenses/LICENSE-2.0
'
' Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, ' WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing ' permissions and limitations under the License.
'
' @company: USBONG
' @author: SYSON, MICHAEL B.
' @date created: 20200306
' @date updated: 20220415; from 20200527
'
' Note: re-used computer instructions from Usbong Knowledge Management System (KMS)
-->
<?php

//TO-DO: -use: image icons

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">

    <!-- Reference: Apache Friends Dashboard index.html -->
    <!-- "Always force latest IE rendering engine or request Chrome Frame" -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <style type="text/css">
	/**/
	                    body
                        {
                            font-family: Arial;
							font-size: 11pt;
								
							/* This makes the width of the output page that is displayed on a browser equal with that of the printed page. */
							width: 670px								
                        }
						
						div.checkBox
						{
								border: 1.5pt solid black; height: 9pt; width: 9pt;
								text-align: center;
								float: left
						}
						
						div.option
						{
								padding: 2pt;
								display: inline-block;
						}
						
						div.copyright
						{
								text-align: center;
						}
						
						div.patientName
						{
							text-align: left;
						}						

						div.medicalDoctorName
						{
							text-align: left;
						}						
						
						div.tableHeader
						{
							font-weight: bold;
							text-align: center;
							background-color: #00ff00; <!--#93d151; lime green-->
							border: 1pt solid #00ff00;
						}					

						div.tableHeaderAddNewPatient
						{
							font-weight: bold;
							text-align: center;
							background-color: #ff8000; <!--#93d151; lime green-->
							border: 1pt solid #ff8000;
						}						
						
						input.browse-input
						{
							width: 100%;
							max-width: 500px;
														
							resize: none;

							height: 100%;
						}	

						img.Image-companyLogo {
							max-width: 60%;
							height: auto;
							float: left;
							text-align: center;
							padding-left: 20px;
							padding-top: 10px;
						}

						img.Image-moscLogo {
							max-width: 20%;
							height: auto;
							float: left;
							text-align: center;
						}						
						
						table.addPatientTable
						{
							border: 2px dotted #ab9c7d;		
							margin-top: 10px;
						}						
						
						
						table.search-result
						{
<!--							border: 1px solid #ab9c7d;		
-->
						}						

						table.imageTable
						{
							width: 100%;
<!--							border: 1px solid #ab9c7d;		
-->
						}						

						td.column
						{
							border: 1px dotted #ab9c7d;		
							text-align: right
						}						
						
						td.imageColumn
						{
							width: 40%;
							display: inline-block;
						}				

						td.pageNameColumn
						{
							width: 50%;
							display: inline-block;
							text-align: right;
						}

						.Button-attackPunch {
							padding: 12px;
							background-color: #ff0000;
							color: #222222;
							font-size: 16px;
							font-weight: bold;

							border: 0px solid;		
							border-radius: 4px;

							float: left;
							margin-left: 4px;
						}

						.Button-attackPunch:hover {
							background-color: #b80000;
						}

						.Button-attackPunch:focus {
							background-color: #b80000;
						}
						
						.Button-attackThrow {
							padding: 12px;
							background-color: #ffa100;
							color: #222222;
							font-size: 16px;
							font-weight: bold;

							border: 0px solid;		
							border-radius: 4px;

							float: left;
							margin-left: 4px;
						}

						.Button-attackThrow:hover {
							background-color: #ff7000;
						}

						.Button-attackThrow:focus {
							background-color: #ff7000;
						}
									
						.Button-attackSpecial {
							padding: 12px;
							background-color: #005eff;
							color: #222222;
							font-size: 16px;
							font-weight: bold;

							border: 0px solid;		
							border-radius: 4px;

							float: left;
							margin-left: 4px;
						}

						.Button-attackSpecial:hover {
							background-color: #0a00da;
						}

						.Button-attackSpecial:focus {
							background-color: #0a00da;
						}

						.Button-defendGuard {
							padding: 12px;
							background-color: #a1a1a1;
							color: #222222;
							font-size: 16px;
							font-weight: bold;

							border: 0px solid;		
							border-radius: 4px;

							float: left;
							margin-left: 4px;
						}

						.Button-defendGuard:hover {
							background-color: #827c7c;
						}

						.Button-defendGuard:focus {
							background-color: #827c7c;
						}

						.Button-defendReflect {
							padding: 12px;
							background-color: #53cf20;
							color: #222222;
							font-size: 16px;
							font-weight: bold;

							border: 0px solid;		
							border-radius: 4px;

							float: left;
							margin-left: 4px;
						}

						.Button-defendReflect:hover {
							background-color: #409c1a;
						}

						.Button-defendReflect:focus {
							background-color: #409c1a;
						}

						.Button-charge {
							padding: 12px;
							background-color: #ffe400;
							color: #222222;
							font-size: 16px;
							font-weight: bold;

							border: 0px solid;		
							border-radius: 4px;

							float: left;
							margin-left: 4px;
						}

						.Button-charge:hover {
							background-color: #d4be00;
						}

						.Button-charge:focus {
							background-color: #d4be00;
						}
						

<!-- Reference: https://stackoverflow.com/questions/7291873/disable-color-change-of-anchor-tag-when-visited; 
	last accessed: 20200321
	answer by: Rich Bradshaw on 20110903T0759
	edited by: Peter Mortensen on 20190511T2239
-->
						a {color:#0011f1;}         /* Unvisited link  */
						a:visited {color:#0011f1;} /* Visited link    */
						a:hover {color:#0011f1;}   /* Mouse over link */
						a:active {color:#593baa;}  /* Selected link */												
    /**/
    </style>
    <title>
      MARUCHI CANVAS
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css">
    </style>
  </head>
	  <script>
		//SVGH
		function copyText(iCount){
//			alert("hello"+iCount);
	 
			//Reference: https://stackoverflow.com/questions/51625169/click-on-text-to-copy-a-link-to-the-clipboard;
			//last accessed: 20200307
			//answer by: colxi on 20180801; edited by: Lord Nazo on 20180801	 
/*	 
			var holdText = document.getElementById("patientNameId"+iCount).innerText;

			const el = document.createElement('textarea');
		    el.value = holdText;
			document.body.appendChild(el);
			el.select();
			document.execCommand('copy');
			document.body.removeChild(el);

			//alert("text: "+holdText);
*/
			var sHoldTextPatientName = document.getElementById("patientNameId"+iCount).innerText;
			var sHoldTextFee = document.getElementById("feeId"+iCount).innerText; //.innerText;

//			alert("sHoldTextPatientName: "+sHoldTextPatientName);
//			alert("sHoldTextFee: "+sHoldTextFee);

			var sHoldTextTransactionTypeName = document.getElementById("transactionTypeNameId"+iCount).innerText;

			var sTreatmentTypeName = document.getElementById("treatmentTypeNameId"+iCount).innerText;

			var sDiscountAmount = "";
			var sTotalAmount = "0";
			
			if (sHoldTextTransactionTypeName=="CASH") {
				//alert("CASH!");
				sTotalAmount = sHoldTextFee;
			}
			else if (sHoldTextTransactionTypeName=="SC/PWD") {
				//note: solve the values of the other variables using one (1) known variable value
				sTotalAmount = sHoldTextFee
				sHoldTextFee = -sHoldTextFee/(0.20-1);
				sDiscountAmount = "" + sHoldTextFee*0.20;
			}
			else if (sHoldTextTransactionTypeName=="NC") {
				sHoldTextFee = "NC";				
				sTotalAmount = "NC";				
			}						
			else { //hmo
				sHoldTextFee = "HMO";				
				sTotalAmount = sHoldTextTransactionTypeName.toLowerCase();				
			}
			
			const el = document.createElement('textarea');
/*		    
			el.value = sHoldTextPatientName+ "\t" + sHoldTextFee + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + sDiscountAmount + "\t" + sTotalAmount;
			document.body.appendChild(el);
*/			

			sTreatmentTypeName = sTreatmentTypeName.toUpperCase();
			
			if ((sTreatmentTypeName=="SWT") || (sTreatmentTypeName=="SHOCKWAVE")) {
				el.value = sHoldTextPatientName + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" +sHoldTextFee + "\t" + "\t" + sDiscountAmount + "\t" + sTotalAmount;
			}
			else if (sTreatmentTypeName=="LASER") {
				el.value = sHoldTextPatientName + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" +sHoldTextFee + "\t" + "\t" + sDiscountAmount + "\t" + "\t" + sTotalAmount;
			}
			else if (sTreatmentTypeName=="OT") {
				el.value = sHoldTextPatientName + "\t" + "\t" + sHoldTextFee + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + sDiscountAmount + "\t" + sTotalAmount;
			}
			else if (sTreatmentTypeName=="IN-PT") {
				el.value = sHoldTextPatientName + "\t" + "\t" + "\t" + "\t" + sHoldTextFee + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + sDiscountAmount + "\t" + sTotalAmount;
			}
			else {
				el.value = sHoldTextPatientName+ "\t" + sHoldTextFee + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + "\t" + sDiscountAmount + "\t" + sTotalAmount;
			}
			
			document.body.appendChild(el);							
			el.select();
			document.execCommand('copy');
			document.body.removeChild(el);

//			alert("text: "+sHoldTextPatientName + sHoldTextFee);//el.value);

		}
/*	  
		  defaultScrollWidth = 0;
		  
		  function auto_grow(element) {
			element.style.height = "5px";
			element.style.height = (element.scrollHeight*4)+"px";

			if (defaultScrollWidth == 0) {
				defaultScrollWidth = element.scrollWidth; //i.e. 42% of the width of the full width of the Browser Window
				alert("defaultScrollWidth: "+defaultScrollWidth);
			}
			else if (element.scrollWidth < defaultScrollWidth){
//				defaultScrollWidth = 100%;
				defaultScrollWidth = element.scrollWidth;
//				alert("defaultScrollWidth: "+defaultScrollWidth);

			}
				
			element.style.width = defaultScrollWidth; //(element.scrollWidth+element.scrollWidth*0.42)+"px";			
		  }
*/

		function copyTextMOSC(iCount){
//			alert("hello"+iCount);
	 
			//Reference: https://stackoverflow.com/questions/51625169/click-on-text-to-copy-a-link-to-the-clipboard;
			//last accessed: 20200307
			//answer by: colxi on 20180801; edited by: Lord Nazo on 20180801	 

			var sHoldTextPatientName = document.getElementById("patientNameId"+iCount).innerText;
			
			const el = document.createElement('textarea');

			el.value = sHoldTextPatientName;
			
			document.body.appendChild(el);							
			el.select();
			document.execCommand('copy');
			document.body.removeChild(el);

//			alert("text: "+sHoldTextPatientName + sHoldTextFee);//el.value);

		}


		//added by Mike, 20220415				
		function myPopupFunction(iButtonId) {	
/* //removed by Mike, 20210902
			//added by Mike, 20210424
			//note: we add this command to prevent multiple button clicks
			//received by computer server before identifying that a patient transaction
			//already exists in Cart List from Database
			document.getElementById("addButtonId").disabled = true;
*/
			window.location.href = "<?php echo site_url('canvas/confirm/"+iButtonId+"');?>";
	
			//added by Mike, 20210424
			//note: no need to add this due to computer enables button after reloading page
//			document.getElementById("addButtonId").disabled = false;
//			setTimeout(setButton("addButtonId",false),300000);
		}	
		
	  </script>
  <body>
    <table class="imageTable">
	  <tr>
		<td class="imageColumn">				
<!--
			<img class="Image-moscLogo" src="<?php echo base_url('assets/images/moscLogo.jpg');?>">		
-->
			<img class="Image-companyLogo" src="<?php echo base_url('assets/images/usbongLogo.png');?>">	
		</td>
		<td class="pageNameColumn">
			<h2>
				MARUCHI CANVAS
			</h2>		
		</td>
	  </tr>
	</table>
	<br/>
	<?php	
//		echo "PLAYER1 INPUT: ".$data['inputParam']."<br/>";
		echo "PLAYER1 INPUT: ".$sInputAsButtonText0."<br/>";
		//edited by Mike, 20220415
//		echo "PLAYER2 INPUT: CHARGE<br/>";	
		echo "PLAYER2 INPUT: ".$sInputAsButtonText1."<br/>";

		switch($iHitPlayerId) {
			case 1: //PLAYER1
				echo "HITS PLAYER 1!";
				break;
			case 2: //PLAYER2
				echo "HITS PLAYER 2!";
				break;
			case -1: //NO HIT
				echo "NO PLAYER HIT!";
				break;
		}
	?>
	<br/>

<!--	<div id="myText" onclick="copyText(1)">Text you want to copy</div>
-->	
	<?php
		//get only name strings from array 
		if (isset($result)) {			
			if ($result!=null) {		
				$resultCount = count($result);
				if ($resultCount==1) {
					echo '<div>Showing <b>'.count($result).'</b> result found.</div>';
				}
				else {
					echo '<div>Showing <b>'.count($result).'</b> results found.</div>';			
				}			

				echo "<br/>";
				echo "<table class='search-result'>";
				
				//add: table headers
?>
				<tr class="row">
						<td class ="column">				
								<div class="tableHeader">
				<?php
								echo "PATIENT NAME";
				?>		
								</div>								
						</td>
						<td class ="column">				
								<div class="tableHeader">
							<?php
								echo "DATE";
							?>
								</div>
						</td>
						<td class ="column">				
								<div class="tableHeader">
							<?php
									echo "MEDICAL DOCTOR";
							?>
								</div>
						</td>											
					  </tr>
<?php				
				$iCount = 1;
				foreach ($result as $value) {
		//			echo $value['report_description'];			
	/*	
					echo $value['patient_name'];				
					echo "<br/><br/>";
	*/	
/*
					if (($value['fee'] == 0) and ($value['x_ray_fee'] == 0)) {
						continue;
					}
*/					
		?>				
		
					  <tr class="row">
						<td class ="column">				
							<a href="#" id="patientNameId<?php echo $iCount?>" onclick="copyTextMOSC(<?php echo $iCount?>)">
								<div class="patientName">
				<?php
//								echo $value['patient_name'];
								echo str_replace("�","Ñ",$value['patient_name']);
//								echo str_replace("ufffd","Ñ",$value['patient_name']);
				?>		
								</div>								
							</a>
						</td>
						<td class ="column">				
								<div id="transactionDateId<?php echo $iCount?>">
							<?php
								//edited by Mike, 20200527
/*
//								echo $value['transaction_date'];
								echo DATE("Y-m-d", strtotime($value['transaction_date']));
*/
								if ($value['transaction_date']==0) {
									echo DATE("Y-m-d");
								}
								else {
									echo DATE("Y-m-d", strtotime($value['transaction_date']));
								}

							?>
								</div>
						</td>						
						<td class ="column">				
								<div class="medicalDoctorName" id="medicalDoctorId<?php echo $iCount?>">
							<?php
								//edited by Mike, 20200527
/*							
								echo $value['medical_doctor_name'];
*/
//								echo $value['medical_doctor_name'];
								if ($value['medical_doctor_name']=="") {
									echo "NEW; NONE YET";
								}
								else {
									echo $value['medical_doctor_name'];
								}								

							?>
								</div>
						</td>						
					  </tr>
		<?php				
					$iCount++;		
//					echo "<br/>";
				}				
				
				echo "</table>";				
				echo "<br/>";				
				echo '<div>***NOTHING FOLLOWS***';	
			}
			else {					
				echo '<div>';					
				echo 'Your search <b>- '.$nameParam.' -</b> did not match any of our patients\' names.';
				echo '<br><br>Recommendation:';
				echo '<br>&#x25CF; Reverify that the patient is <b>not</b> new.';				
				echo '<br>&#x25CF; Reverify that the spelling is correct.';				
				echo '</div>';					
			}			
		}
	?>
	
	<?php
		$chargeButtonId=0;
		$defendGuardButtonId=1;
		$attackPunchButtonId=2;
		$attackSpecialButtonId=3;
		$attackThrowButtonId=4;
		$defendReflectButtonId=5;
	?>
	
	<table class="addPatientTable">
	<tr>
		<td>
			<button onclick="myPopupFunction(<?php echo $attackPunchButtonId;?>)" class="Button-attackPunch" id="attackPunchButtonId">[PUNCH]</button>			
		</td>
		<td>
			<button onclick="myPopupFunction(<?php echo $attackThrowButtonId;?>)" class="Button-attackThrow" id="attackThrowButtonId">[THROW!]</button>			
		</td>
		<td>
			<button onclick="myPopupFunction(<?php echo $attackSpecialButtonId;?>)" class="Button-attackSpecial" id="attackSpecialButtonId">[SPECIAL]</button>			
		</td>
	</tr>
	<tr>
		<td>
		</td>
		<td>
			<button onclick="myPopupFunction(<?php echo $defendGuardButtonId;?>)" class="Button-defendGuard" id="defendGuardButtonId">[ GUARD ]</button>			
		</td>
		<td>
			<button onclick="myPopupFunction(<?php echo $defendReflectButtonId;?>)" class="Button-defendReflect" id="defendReflectButtonId">[REFLECT]</button>			
		</td>
	</tr>
	<tr>
		<td>
		</td>
		<td>
			<button onclick="myPopupFunction(<?php echo $chargeButtonId;?>)" class="Button-charge" id="chargeButtonId">[CHARGE]</button>			
		</td>
		<td>
		</td>
	</tr>
	</table>
	
	<br />
	<br />
	<br />
	<br />
	<div class="copyright">
		<span>© <b>www.usbong.ph</b> 2011~<?php echo date("Y");?>. All rights reserved.</span>
	</div>		 
  </body>
</html>