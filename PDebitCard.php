<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<style type="text/css">
    *{
        font-family: 'Ubuntu', sans-serif;
        text-decoration: none;
        margin-left: 20px;
        margin-top: 10px;
        color: black;
    }
    input{
        height: 40px;
        font-size: 17px;
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
    <label>Card Number</label><br>
    <input type="tel" style="width: 400px;" placeholder="Enter Card Number">
    <br><br>
    <label>Expiration Date</label>
    <label style="margin-left: 180px;">CVV</label>
    <br>
    <select style="width: 100px; height: 40px">
        <option>Months</option>
        <option>Jan</option>
        <option>Feb</option>
        <option>Mar</option>
        <option>Apr</option>
        <option>May</option>
        <option>Jun</option>
        <option>Jul</option>
        <option>Aug</option>
        <option>Sep</option>
        <option>Oct</option>
        <option>Nov</option>
        <option>Dec</option>
    </select>
    <select style="width: 100px; height: 40px; margin-left: 30px;">
        <option>Years</option>
        <option>2020</option>
        <option>2021</option>
        <option>2022</option>
        <option>2023</option>
        <option>2024</option>
        <option>2025</option>
        <option>2026</option>
        <option>2027</option>
        <option>2028</option>
        <option>2029</option>
        <option>2030</option>
        <option>2031</option>
    </select>
    <input type="tel" placeholder="CVV No." style="width: 100px; margin-left: 60px;">
    <br><br>
    <label>Card Holder Name</label><br>
    <input type="text" style="width: 400px;" placeholder="Enter Card Holder Name">
    <br><br><br>
    <div>
        <a target="_parent" href="SlotBooking.php">Make Payment</a>
    </div>
    <br>
    <a href="HomePage.php">Cancel</a>
</body>    