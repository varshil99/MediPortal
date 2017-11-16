<!DOCTYPE>
<html>
<head>
	<title>Doctor Registration</title>
</head>
<body>
	<table>
		<div>
			<div>
				<table align="center" width="100%" border="1">
					<tr align="right">
						<td width="30%">
							<a href="../Home.html"><img src="../images/logo.png" align="left"></a>
						</td>
						<td width="30%">&nbsp;</td>
						<td>
							<a href="../Home.html" >Home <img src="../images/home.png"></a>
						</td>
						<td width="10%">
							<a href="../Registration.html">Registration<img src="../images/registration.png"></a>
						</td>
						<td width="10%">
							<a href="../Login.html">Login<img src="../images/login.png"></a>
						</td>
					</tr>
				</table>
			</div>

			<div>
				<table align="center">
					<tr>
						<td align="center">
							Registared By 
							<a href="NormalRegistration.html">Normal User</a>
							<a href="BloodDonorRegistration.html">
							Blood Donor</a> 			
						</td>
					</tr>
				</table>
			</div>
			<div>
				Please fill up your information
			</div>
			<div>
				<form action="docChamber.php">
					<fieldset>
						<legend>Add Chamber</legend>
						<table align="center">
							<tr>
								<td><label>Name</label></td>
								<td>:</td>
								<td><input type="text" name="chamberName"/></td>
							</tr>
							<tr>
								<td><label>Location</label></td>
								<td>:</td>
								<td><input type="text" name="location"/></td>
							</tr>
							<tr>
								<td><label>Working Days</label></td>
								<td>:</td>
								<td>
									<input type="checkbox" name="workDays"/>SAT
									<input type="checkbox" name="workDays"/>SUN
									<input type="checkbox" name="workDays"/>MON
									<input type="checkbox" name="workDays"/>TUE
									<input type="checkbox" name="workDays"/>WED
									<input type="checkbox" name="workDays"/>THU
									<input type="checkbox" name="workDays"/>FRI
									
								</td>
							</tr>
							<tr>
								<td><label>Description</label></td>
								<td>:</td>
								<td><textarea name="description"></textarea></td>
							</tr>
							<tr>
								<td><input type="button" value="Add another"/>	<input type="submit" value="Finish"/></td>
							</tr>
						</table>
					</fieldset>		
				</form>
			</div>
			<div>
				<table align="center">
					<tr align="center">
						<td>
						<a href="https://www.facebook.com/">
						<img src="../images/facebook.png">
						 </a>
					 </td>
						<td>
							<a href="https://www.twitter.com/">
								<img src="../images/twitter.png">
							</a>
						</td>
					</tr>
				</table>
				
				<table align="center">
					<tr>
						<td align="center" colspan="3">
						<a href="../About_Us.html">About Us   </a>
					</td>
					<td align="center" colspan="3">
						<a href="../Contact_Us.html">Contact Us   </a>
					</td>
					<td align="center" colspan="3">
						<a href="../privacyPolicy.html">Privacy Policy   </a>
					</td>
					<td align="center" colspan="3">
						<a href="../faq.html">FAQ</a>
					</td>
					</tr>
				</table>
			</div>
		</div>	
	</table>
</body>
</html>