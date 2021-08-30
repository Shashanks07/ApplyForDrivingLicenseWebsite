<?php
	if(isset($_POST["submit1"]))
        	{
        		header('Location:Payment.php');
        	}
?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Registration Form">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
        <style type="text/css">
            header{
                height: 80px;
                margin-left: 280px;
                margin-right: 280px;
                margin-bottom: 30px;
                background-color: white;
                border-style: solid;
                font-family: 'Noto Sans KR', sans-serif;
            }
            header aside{
                float: left;
            }
            fieldset{
                border-style: solid;
                border-color: black;
                border-width: 5px;
                background-color: white;
                border-top-width: 30px;
                padding-top: 20px;
            }
            legend{
                color: white;
                background-color: black;
                padding: 4.5px;
                
            }
            section{
                margin-top: 10px;
                font-family: 'Inconsolata', monospace;
                font-size: 20px;
            }
            section input{
                font-size: 15px;
            }
            section select{
                font-size: 15px;
                width: 200px;
            }
            footer{
                text-align: center;
            }
        </style>
        <script>
            function nameValidation(){
                var letter = /^[A-Za-z]+$/;
                if(document.getElementById("applicant_name").value.match(letter)){
                   }
                else{
                    if(window.confirm("Please Enter Only Alphabets")){
                        document.getElementById("applicant_name").value="";
                    }
                    else{
                        document.getElementById("applicant_name").value="";
                    }
                }
            }
            function checkgenderMale(){
                if(document.getElementById("gender_male").checked){        
                    document.getElementById("gender_female").checked=false;
                    document.getElementById("gender_others").checked=false;
                    }
            }
            function checkgenderFemale(){    
                if(document.getElementById("gender_female").checked){        
                    document.getElementById("gender_male").checked=false;
                    document.getElementById("gender_others").checked=false;
                    }
            }
            function checkgenderOthers(){
                if(document.getElementById("gender_others").checked){        
                    document.getElementById("gender_female").checked=false;
                    document.getElementById("gender_male").checked=false;
                    }
            }
            function phnValidation(){
                var letter = /[7-9]\d{9}/;
                if(document.getElementById("applicant_phno").value.match(letter)){
                   }
                else{
                    if(window.confirm("Please Enter Valid Phone Number")){
                        document.getElementById("applicant_phno").value="";
                    }
                    else{
                        document.getElementById("applicant_phno").value="";
                    }
                }
            }
        </script>
    </head>
    
    <body style="background-color: azure" onload='document.getElementById("applicant_phno").focus()'>
        <header>
            <aside>
            <img style="border-right-style: solid; padding-right: 10px; margin-right: 10px;" src="logo-parivahan-sewa.png" alt="govt_logo">
            </aside>
            <h1 style="margin: 0px;">Government of India</h1>
            <h2 style="margin: 0px; text-shadow: 2px 2px black">MINISTRY OF ROAD TRANSPORT & HIGHWAYS</h2>
        </header>
        <section>
            <form method="post">
                <fieldset>
                    <legend>Service Required</legend>
                    <label>Applying for:</label>
                    <select name="applyingfor">
                        <option>--Select--</option>
                        <option>Learning Licence</option>
                        <option>Permanent Driving Licence</option>
                        <option>Renewal Driving Licence</option>
                    </select>
                    <label style="margin-left: 200px;">Select class of vehicles:</label>
                    <select name="classofvehicle">
                        <option>Select Vehicles</option>
				        <option>2 Wheeler without Gear</option>
				    	<option>2 Wheeler with Gear</option>
            			<option>4 Wheeler (LMV - Non Transport)</option>
				        <option>2 Wheeler without Gear + 4 Wheeler</option>
				    	<option>2 Wheeler with Gear + 4 Wheeler</option>
                    </select>
                </fieldset>
                <br>
                <fieldset>
                    <legend>Applicant Information's</legend>
                    <label>Name: </label>
                    &nbsp;&nbsp;&nbsp;
                    <input name="FirstName" type="text" id="applicant_name" placeholder="First name" onchange="nameValidation()">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="MiddleName" id="applicant_name" placeholder="Middle name" onchange="nameValidation()">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="LastName" id="applicant_name" placeholder="Last name" onchange="nameValidation()">
                    <br><br>
                    <label>Relation With Applicant:&nbsp;</label>
                    <select name="GaurdianRel">
                        <option>Select</option>
                        <option>Father</option>
                        <option>Mother</option>
                        <option>Husband</option>
                        <option>Guardian</option>
                    </select>
                    <br><br>
                    <label for="guardian_name">Guardian Name: </label>
                    &nbsp;&nbsp;&nbsp;
                    <input name="GFirstName" id="applicant_name" type="text" placeholder="First name" >
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="GMiddleName" id="applicant_name" type="text" placeholder="Middle name">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="GLastName" id="applicant_name" type="text" placeholder="Last name" >
                    <br><br>
                    <label>DOB:</label>
                    <input name="ApplicantDob" type="date">
                    <br><br>
                    <label>Gender:</label>
                    <input name="applicantgender" value="Male" type="radio" onclick="checkgenderMale()">
                    <label>Male</label>
                    &nbsp;
                    <input name="applicantgender" value="Female" type="radio" onclick="checkgenderFemale()">
                    <label>Female</label>
                    &nbsp;
                    <input name="applicantgender" value="Other" type="radio" onclick="checkgenderOthers()">
                    <label>Other's</label>
                    <br><br>
                    <label>Phone No.:</label>
                    <input name="applicantPhno" id="applicant_phno" type="tel" onchange="phnValidation()">
                    <br><br>
                    <label>E-mail:</label>
                    <input name="applicantEmail" type="email" >
                </fieldset>
                <br>
                <fieldset>
                    <legend>Applicant Address Detail's</legend>
                    <label>House No.:</label>
                    <label style="margin-left: 210px;">Landmark:</label>
                    <label style="margin-left: 250px;">District:</label>
                    <br>
                    <input name="houseno" type="text" placeholder="House No." >
                    <input name="landmark" style="margin-left: 110px;" type="text" placeholder="Landmark" >
                    <input name="district" style="margin-left: 140px;" type="text" placeholder="District">
                    <br><br>
                    <label>Tahsil/Police Station:</label>
                    <label style="margin-left: 90px;">Village:</label>
                    <label style="margin-left: 260px;">State:</label>
                    <br>
                    <input name="Tahsil" type="text" placeholder="Tahsil" >
                    <input name="village" style="margin-left: 110px;" type="text" placeholder="Village:">
                    <input name="state" style="margin-left: 140px;" type="text" placeholder="State">
                    <br><br>
                    <label>Pincode: </label>
                    <input name="pincode" type="tel" placeholder="Pincode">
                </fieldset>
                <br>
                <input style="margin-left: 600px; background-color:#82E0AA ; border-radius: 8px; width: 150px; height: 30px;text-align: center;" value="Valiadate and Pay" type="submit" name="submit1">
            </form>
        </section>
        <footer>
            <p><strong>For More Information :<a href="https://parivahan.gov.in/parivahan/">Visit Parivahan Site</a></strong></p>
        </footer>

        <?php

            $FirstName = $_POST['FirstName'];
            $MiddleName = $_POST['MiddleName'];
            $LastName = $_POST['LastName'];
            $ApplicantDob = $_POST['ApplicantDob'];
            $applicantgender = $_POST['applicantgender'];
            $applicantPhno = $_POST['applicantPhno'];
            $applicantEmail = $_POST['applicantEmail'];

            $applyingfor = $_POST['applyingfor'];
            $classofvehicle = $_POST['classofvehicle'];
            $GaurdianRel = $_POST['GaurdianRel'];
            $GFirstName = $_POST['GFirstName'];
            $GMiddleName = $_POST['GMiddleName'];
            $GLastName = $_POST['GLastName'];

            $houseno = $_POST['houseno'];
            $landmark = $_POST['landmark'];
            $district = $_POST['district'];
            $Tahsil = $_POST['Tahsil'];
            $village = $_POST['village'];
            $state = $_POST['state'];
            $pincode = $_POST['pincode'];

            $query = "INSERT INTO `applicant`(`Applicant_no`, `FirstName`, `MiddleName`, `LastName`, `DOB`, `Gender`, `Phone No.`, `EMAIL`) VALUES (NULL,'$FirstName','$MiddleName','$LastName','$ApplicantDob','$applicantgender','$applicantPhno','$applicantEmail')";
            $secondquery = "INSERT INTO `appldetails`(`Applicant_no`, `ApplyingFor`, `ClassofVehicle`, `G_Relation`, `G_FirstName`, `G_MiddleName`, `G_LastName`) VALUES (NULL,'$applyingfor','$classofvehicle','$GaurdianRel','$GFirstName','$GMiddleName','$GLastName')";
            $thirdquery = "INSERT INTO `appladdress`(`Applicant_no`, `House No.`, `Landmark`, `District`, `Tahsil`, `Village`, `State`, `Pincode`) VALUES (NULL,'$houseno','$landmark','$district','$Tahsil','$village','$state','$pincode')";

            $hostname = 'localhost';
            $dbname = 'licencedb';
            $username = "root";
            $password = "mysql";

            try{
                $db = new mysqli($hostname, $username, $password, $dbname);

                if($db->connect_error){
                    die("Connection failed".$db->connect_error);
                }

                if( $db->query($query) === TRUE ){
                    echo "Success";
                }else{
                    echo "Failure!".$db->error;
                }

                if( $db->query($secondquery) === TRUE ){
                    echo "Success";
                }else{
                    echo "Failure!".$db->error;
                }

                if( $db->query($thirdquery) === TRUE ){
                    echo "Success";
                }else{
                    echo "Failure!".$db->error;
                }

                $db->close();
            }
            catch(Exception $e){
                $error_message = $e->getMessage();
                echo "<p>Error Message: $error_message</p>";
            }
        ?>

    </body> 
</html>