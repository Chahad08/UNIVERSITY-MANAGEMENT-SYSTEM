<?php include('aprocess.php'); ?>


<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss3.css">
<title>Application ---- form</title>
</head>
<body>




<h1 align='center'>Application Form</h1>
<table align='center'>
<form action="" method="post">
    <tr >

        <td><input type="text" name="name" placeholder="Enter your full Name" ></td>
        <?php echo $validateName?><br>
        <td><input type="text" name="email" placeholder="Enter Your Email" ></td>
        <?php echo $validateEmail?>
    </tr>


    <br>
    <tr>
        <td><p>Please select your gender:</p>
        <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
    <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
    <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other
    
            <br>
      </tr>



        <tr><td>Date of Birth:   
            <input type="date" id="birthday" name="birthday"></td><?php echo $validateDateOfBirth?></tr>

            <br>
            <td><input type="text" name="phonenumber" placeholder="Enter mobile number" ></td>
            <?php echo $validatePhonenumber?> <br>
            <td><input type="text" name="otp" placeholder="Enter OTP" ></td> 
            <?php echo $validateOTP ?> <br>
        </tr>
        <tr>
            <td><textarea name="presentAddress" placeholder="Your present Address" rows="4"cols="30" ></textarea></td><?php echo $validatePresentAddress?> <br>
            <td><textarea type="text" name="permanentAddress" placeholder="Your permanent Address" rows="4"cols="30"></textarea></td><?php echo $validatePermanentAddress ?> <br>
        </tr>
        <tr>
            <td><input type="text"  name="ssc" placeholder="SSC Result" ></td><?php echo $validateSsc ?><br>
            <td><input type="text" name="hsc" placeholder="HSC Result" ></td><?php echo $validateHsc?><br>
        </tr>
        
        <tr>

            <td><input name="submit" type="submit" value="Register"></td></tr>
        </form>
    </table>

</body>

</html>


