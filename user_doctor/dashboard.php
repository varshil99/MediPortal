<html>

<head><title>Home</title></head>

<body>
	<table border="1" align="center" width="70%">
    	<tr>
        	<td>
            	<!-- Header section -->
            	<div>
                    <table align="center" width="100%">
                        <td width="20%">
                            <img src="images/pageicon.png"/>
                        </td>
                        <td width="50%">&nbsp;</td>
                        <td width="30%">
                            <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="viewprofile.html">Bob</a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../index.html">Logout</a></td>
                            </table> 
                        </td>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
        	<td>
            	<!-- Body section -->
                <div>
                    <table width="100%">
                    	<!-- User Menu Section -->
                        <td width="30%">
                        	<strong>Account</strong>
                            <hr/>
                            <ul>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="viewprofile.html">View Profile</a></li>
                                <li><a href="editprofile.html">Edit Profile</a></li>
                                <li><a href="changeprofilepicture.html">Change Profile Picture</a></li>
                                <li><a href="changepassword.html">Change Password</a></li>
                                <li><a href="../index.html">Logout</a></li>
                            </ul> 
                        </td>
                        <td width="70%"><h2><ul>Welcome <?php
							//session_start();
							
							echo "Bob";
						?></ul></h2></td>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
        	<td>
            	<!-- Footer section -->
                <div>
                    <table align="center">
                        <td>&copy;2017 MediPortal. All rights reserved.</td>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>