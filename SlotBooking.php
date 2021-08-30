<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Slot Booking</title>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
        <style type="text/css">
            *{
                font-family: 'Merriweather', serif;
            }
            body{
                background-color:  azure;
            }
            header{
                text-align: center;
            }
            header div{
                height: 80px;
                margin-left: 280px;
                margin-right: 280px;
                background-color: white;
                border-style: solid;
            }
            aside.left{
                float: left;
                border-style: solid;
                border-color: black;
                width: 35%;
                margin-left: 10%;
            }
            .month{
                text-align: center;
                background-color: black;
                color: white;
                padding: 5px;
            }
            .weekdays{
                padding: 1px;
                background-color: darkgrey;
                border-bottom-style: solid;
            }
            .weekdays li{
                width: 1%;
                list-style-type: none;
                display: inline-block;
                font-weight: bold;
                padding-right: 50px;
            }
            .days{
                background-color: lightgrey;
                padding: 1px;
            }
            .days li{
                text-align: center;
                width: 1%;
                list-style-type: none;
                display: inline-block;
                padding-bottom: 12px;
                padding-right: 50px;
            }
            .current{
                padding: 5px;
                background-color: black;
                color: white;
            }
            .slotavailable{
                padding: 1px;
                background-color: black;
                color: white;
                text-align: center;
            }
            aside.right{
                float: right;
                text-align: center;
                width: 30%;
                margin-top: 50px;
                margin-right: 10%;
            }
            fieldset{
                border-style: solid;
                border-color: black;
                border-width: 5px;
                padding: 20px;
                border-top-width: 30px;
            }
            legend{
                background-color: black;
                padding: 5px;
                color: white;
            }
            footer{
                text-align: center;
                margin-top: 500px;
            }
        </style>
        <script>
            function eleven(){
                document.getElementById("first").innerHTML = "&#9679;&nbsp; For 9:00-9:30&rarr;00";
                document.getElementById("second").innerHTML = "&#9679;&nbsp; For 10:30-11:00&rarr;04";
                document.getElementById("third").innerHTML = "&#9679;&nbsp; For 12:00-12:30&rarr;03";
                document.getElementById("fourth").innerHTML = "&#9679;&nbsp; For 13:30-14:00&rarr;02";               
            }
            function twelve(){
                document.getElementById("first").innerHTML = "&#9679;&nbsp; For 9:00-9:30&rarr;02";
                document.getElementById("second").innerHTML = "&#9679;&nbsp; For 10:30-11:00&rarr;06";
                document.getElementById("third").innerHTML = "&#9679;&nbsp; For 12:00-12:30&rarr;08";
                document.getElementById("fourth").innerHTML = "&#9679;&nbsp; For 13:30-14:00&rarr;07";               
            }
            function thirteen(){
                document.getElementById("first").innerHTML = "&#9679;&nbsp; For 9:00-9:30&rarr;08";
                document.getElementById("second").innerHTML = "&#9679;&nbsp; For 10:30-11:00&rarr;04";
                document.getElementById("third").innerHTML = "&#9679;&nbsp; For 12:00-12:30&rarr;02";
                document.getElementById("fourth").innerHTML = "&#9679;&nbsp; For 13:30-14:00&rarr;00";               
            }
            function fourteen(){
                document.getElementById("first").innerHTML = "&#9679;&nbsp; For 9:00-9:30&rarr;01";
                document.getElementById("second").innerHTML = "&#9679;&nbsp; For 10:30-11:00&rarr;04";
                document.getElementById("third").innerHTML = "&#9679;&nbsp; For 12:00-12:30&rarr;03";
                document.getElementById("fourth").innerHTML = "&#9679;&nbsp; For 13:30-14:00&rarr;02";               
            }
            function fifteen(){
                document.getElementById("first").innerHTML = "&#9679;&nbsp; For 9:00-9:30&rarr;05";
                document.getElementById("second").innerHTML = "&#9679;&nbsp; For 10:30-11:00&rarr;07";
                document.getElementById("third").innerHTML = "&#9679;&nbsp; For 12:00-12:30&rarr;08";
                document.getElementById("fourth").innerHTML = "&#9679;&nbsp; For 13:30-14:00&rarr;01";               
            }
            function sixteen(){
                document.getElementById("first").innerHTML = "&#9679;&nbsp; For 9:00-9:30&rarr;05";
                document.getElementById("second").innerHTML = "&#9679;&nbsp; For 10:30-11:00&rarr;02";
                document.getElementById("third").innerHTML = "&#9679;&nbsp; For 12:00-12:30&rarr;01";
                document.getElementById("fourth").innerHTML = "&#9679;&nbsp; For 13:30-14:00&rarr;03";               
            }
        </script>
    </head>
    
    <body>
        <header>
            <div>
                <img style="float: left; border-right-style: solid; padding-right: 10px; margin-right: 10px;" src="logo-parivahan-sewa.png" alt="govt_logo">
                <h1 style="margin: 0px; font-family: 'Noto Sans KR', sans-serif;">Government of India</h1>
                <h2 style="margin: 0px; text-shadow: 2px 2px black;font-family: 'Noto Sans KR', sans-serif;">MINISTRY OF ROAD TRANSPORT & HIGHWAYS</h2>
            </div>
            <h2>Book Your Slot For Test</h2>
        </header>
            <aside class="left">
                <div class="month">
                    <h3>January ,2021</h3>
                </div>
                <div class="weekdays">
                    <ul>
                        <li>Mo</li>
                        <li>Tu</li>
                        <li>We</li>
                        <li>Th</li>
                        <li>Fr</li>
                        <li>Sa</li>
                        <li>Su</li>
                    </ul>
                </div>
                <div class="days">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li style="color: gray;">1</li>
                        <li style="color: gray;">2</li>
                        <li style="color: red;">3</li>
                        <li style="color: gray;">4</li>
                        <li style="color: gray;">5</li>
                        <li style="color: gray;">6</li>
                        <li style="color: gray;">7</li>
                        <li style="color: gray;">8</li>
                        <li style="color: gray;">9</li>
                        <li style="color: red;"><span class="current">10</span></li>
                        <li onclick="eleven()">11</li>
                        <li onclick="twelve();">12</li>
                        <li onclick="thirteen();">13</li>
                        <li onclick="fourteen();">14</li>
                        <li onclick="fifteen();">15</li>
                        <li onclick="sixteen();">16</li>
                        <li style="color: red;">17</li>
                        <li>18</li>
                        <li>19</li>
                        <li>20</li>
                        <li>21</li>
                        <li>22</li>
                        <li>23</li>
                        <li style="color: red;">24</li>
                        <li>25</li>
                        <li>26</li>
                        <li>27</li>
                        <li>28</li>
                        <li>29</li>
                        <li>30</li>
                        <li style="color: red;">31</li>
                    </ul>
                </div>
                <div class="slotavailable">
                    <h4 style="margin: 0;padding: 5px;">Slot Available</h4><hr>
                    <p id="first" style="margin: 0;"><b style="font-size: 30px;">Holiday</b></p>
                    <p id="second" style="margin: 0;"></p>
                    <p id="third" style="margin: 0;"></p>
                    <p id="fourth" style="margin: 0;"></p>
                </div>
            </aside>
            <aside class="right">
                <form action="HomePage.php">
                    <fieldset>
                        <legend>Slot Booking</legend>
                        <label>Application Number:</label>
                        &nbsp;&nbsp;
                        <input type="number" placeholder="Applicant name">
                        <br><br>
                        <label>Applicant Name:</label>
                        &nbsp;&nbsp;
                        <input type="text" placeholder="Application number">
                        <br><br>
                        <label>Select Date:</label>
                        &nbsp;&nbsp;
                        <input type="date">
                        <br><br>
                        <label>Select Time:</label>
                        &nbsp;&nbsp;
                        <select style="width: 150px">
                            <option>--Select--</option>
                            <option>9:00 to 9:30</option>
                            <option>10:30 to 11:00</option>
                            <option>12:00 to 12:30</option>
                            <option>13:30 to 14:00</option>
                        </select>
                        <br><br>
                    <label>Test Centre:</label>
                    <select>
                        <option>--Select--</option>
                        <option>Noida 52</option>
                        <option>Noida 62</option>
                        <option>Noida Sec 1</option>
                        <option>Noida Sec 22</option>
                        <option>Gautam Budh Nagar</option>
                    </select>
                        <br><br>
                        <input type="submit" value="Book" style="background-color: deepskyblue;">
                    </fieldset>
                </form>
            </aside>
        <footer>
            <h4><strong>Copyright © 1999-2020 MINISTRY OF ROAD TRANSPORT & HIGHWAYS</strong></h4>
            <h4><strong>Contact Us at : <a href="#">pariwahansewa@yahoo.com</a></strong></h4>
        </footer>
    </body>
    
</html>