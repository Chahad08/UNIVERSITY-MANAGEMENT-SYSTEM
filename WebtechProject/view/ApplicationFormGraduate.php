
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss3.css">
<title>Application ---- form</title>
<script src="../js/gradjs.js"></script>
</head>
<body>



<fieldset>
<legend><h1 align='center'>Registration Form</h1></legend>

<table align='center'>

<p id="mytext"></p> 
<form action="gprocess.php" onsubmit="return validateForm()" method="post">
    <tr >

        <td><input type="text" id="name" name="name" placeholder="Enter your full Name"  > </td>
        
        
        <td><input type="text" id="email" name="email" placeholder="Enter Your Email"  ></td>
    </tr>


    <br>
    <tr>
        <td><p>Please select your gender:</p>
        <input type="radio" name="gender" id="female">female<br>
        <input type="radio" name="gender" id="male">male<br>
        <input type="radio" name="gender" id="other">other<br>
    
    </tr>

        <tr><td>Date of Birth:   
            <input type="date" id="birthday" name="birthday"  ></td>
            

            <br>
            <td><input type="text" id="phonenumber" name="phonenumber" placeholder="Enter mobile number"  ></td>
            
            <td><input type="text" id="otp" name="otp" placeholder="Enter OTP"  ></td> 
        
        </tr>
        <tr>
            <td><textarea id="presentAddress" name="presentAddress" placeholder="Your present Address" rows="4"cols="30"  ></textarea></td>
           
            <td><textarea type="text" id="permanentAddress" name="permanentAddress" placeholder="Your permanent Address" rows="4"cols="30" ></textarea></td>
            
        </tr>
        <tr>
            <td><input type="text" id="ssc"  name="ssc" placeholder="SSC Result" ></td>
            <td><input type="text" id="hsc" name="hsc" placeholder="HSC Result" ></td>
            <td><input type="text" id="cgpa" name="cgpa" placeholder="CGPA Result" ></td>

        </tr>
        
        <tr>

            <td><input name="submit" type="submit" value="Register"></td></tr>
        </form>
        <br>
        
        </fieldset>
        <br>

    </table>

</body>

</html>


