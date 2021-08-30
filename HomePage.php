<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Apply for Driving License">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Apply for Driving License</title>
        
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        
        <style type="text/css">
            
            *{
                font-family: 'Roboto', sans-serif;
            }
            body{
                background-color: azure;
            }
            header{
                background-color: azure;
                height: 200px;
            }
            header aside{
                float: left;
            }
            header h1{
                font-size: 60px;
                text-align: center;
                background-color: darkblue;
                color: white;
            }header h2{
                font-size: 40px;
                background-color: darkblue;
                color: white;
                text-align: center;
            }header p{
                text-align: center;
                background-color: darkblue;
                color: white;
                font-size: 20px;
            }
            nav{
                background-color: darkblue;
                text-align: center;
                height: auto;
            }
            nav ul{
                list-style-type: none;
            }
            nav li{
                display: inline-block;
                padding-left: 100px;
            }
            nav a{
                text-decoration: none;
                color: white;
            }
            section{
                text-align: center;
                margin-top: 200px;
                margin-bottom: 200px;
            }
            section h2{
                color: red;
            }
            section label{
                color: green;
                padding-right: 25px;
                font-size: 18px;
            }
            section select{
                font-size: 15px;
            }
            footer{
                text-align: center;
            }
            
        </style>
        <script>
            function changePage(){
                window.location.href = "RegistrationForm.php";
            }
        </script>
        
    </head>
    
    <body>
        <header>
            <aside>
                <img src="2page.JPG" width="1330px" alt="govt Logo" style="border-style: solid; border-color: gainsboro;">
            </aside>
        </header>
        <nav style="margin-top: 20px;">
            <ul>
                <li><a href="#"><strong>Home</strong></a></li>
                <li><a href="https://parivahan.gov.in/parivahan//en/content/about-us"><strong>About Us</strong></a></li>
                <li><a href="#"><strong>Help</strong></a></li>
                <li><a href="https://parivahan.gov.in/parivahan//en/contactus"><strong>Contact</strong></a></li>
            </ul>
        </nav>
        <section>
            <h2>Online services in this portal are available only for the States listed below</h2>
            <div>
                <label for="state_name"><strong>Please select the State from where the service is to be taken : </strong></label>
                <select id="state_name" onchange="changePage()">
                    <option value="0">---Select State Name---</option>
                    <option value="AR">Arunachal Pradesh</option>
                    <option value="AS">Assam</option>
                    <option value="BR">Bihar</option>
                    <option value="CH">Chandigarh</option>
                    <option value="CG">Chhattisgarh</option>
                    <option value="DL">Delhi</option>
                    <option value="GA">Goa</option>
                    <option value="GJ">Gujarat</option>
                    <option value="HR">Haryana</option>
                    <option value="HP">Himachal Pradesh</option>
                    <option value="JK">Jammu and Kashmir</option>
                    <option value="JH">Jharkhand</option>
                    <option value="KA">Karnataka</option>
                    <option value="KL">Kerala</option>
                    <option value="LA">Ladakh</option>
                    <option value="MH">Maharashtra</option>
                    <option value="MN">Manipur</option>
                    <option value="ML">Meghalaya</option>
                    <option value="MZ">Mizoram</option>
                    <option value="NL">Nagaland</option>
                    <option value="OD">Odisha</option>
                    <option value="PY">Pondicherry</option>
                    <option value="PB">Punjab</option>
                    <option value="RJ">Rajasthan</option>
                    <option value="SK">Sikkim</option>
                    <option value="TN">Tamil Nadu</option>
                    <option value="TR">Tripura</option>
                    <option value="DD">UT of DNH and DD</option>
                    <option value="UK">Uttarakhand</option>
                    <option value="UP">Uttar Pradesh</option>
                    <option value="WB">West Bengal</option>
                </select>
            </div>
        </section>
        <footer>
            <br><br><br><br>
            <h4><strong>Copyright © 1999-2020 MINISTRY OF ROAD TRANSPORT & HIGHWAYS</strong></h4>
            <h4><strong>Contact Us at pariwahansewa@yahoo.com</strong></h4>
        </footer>
    </body>
    
</html>