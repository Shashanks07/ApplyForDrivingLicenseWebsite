<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<style type="text/css">
    *{
        font-family: 'Ubuntu', sans-serif;
        font-size: 17px;
        margin-left: 20px;
        color: black;
    }
    select{
        width: 400px;
        height: 40px;
    }
    input{
        width: 310px;
        height: 40px;
        margin-left: 10px;
    }
    div{
        text-align: center;
        border-style: ridge;
        border-color: black;
        padding-top: 10px;
        height: 30px;
        width: 400px;
        background-color: coral;
    }
</style>
<body>
<label>Bank Name</label><br>
<select>
    <option>Select Bank</option>
    <option>State Bank of India</option>
    <option>Punjab National Bank</option>
    <option>ICICI Bank</option>
</select>
<br><br>
<label>User I'd:</label>
<input style="margin-left: 25px;" type="text" placeholder="Enter Your User I'd">
<br><br>
<label>Password:</label>
<input type="password" placeholder="Enter Your Password">
<br><br><br>
<div>    
    <a target="_parent" href="SlotBooking.php">Make Payment</a>
</div>
<br>
<a href="HomePage.php">Cancel</a>
</body>