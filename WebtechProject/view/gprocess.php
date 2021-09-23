<?php
/*
-----<input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
       <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
       <input type='radio' name='gender' value='other'<?php echo  $radio3; ?> > Other
$validateName="";
    $validateEmail="";
	//$validateradio="";
	//$v1 = $v2 = $v3 ="";
	$radio1=$radio2=$radio3="";
    $validateDateOfBirth="";
    $validatePhonenumber="";
    $validateOTP="";
    $validatePresentAddress="";
    $validatePermanentAddress="";
    $validateSsc="";
    $validateHsc="";
    $validateCGPA="";

 if (isset($_POST['submit']))
 {
		$name = $_POST['name'];
		$email = $_POST['email'];
		//$gender = $_POST['gender'];
		
		$dob = $_POST['birthday'];
		$phonenumber = $_POST['phonenumber'];
		$otp = $_POST['otp'];
		$presentAddress = $_POST['presentAddress'];
		$permanentAddress = $_POST['permanentAddress'];
		$ssc = $_POST['ssc'];
		$hsc = $_POST['hsc'];
		$cgpa = $_POST['cgpa'];
	
	 if (empty($name) || empty($email)  || empty($dob)
    || empty($phonenumber) || empty($otp) || empty($presentAddress) 
    || empty($permanentAddress) || empty($ssc) || empty($hsc) || empty($cgpa )) 

    {

	

			if(empty($name) ||  strlen($name)<6)
			{
				$validateName="*Please re-enter the name and your name should contain atleast 6 digits";
			}
		
			if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email))
			{
				$validateEmail="*Write email form correctly ";
			}
			
			 if (is_numeric($hsc) || empty($hsc))
			{
				$validateSsc ="*Enter GPA/Only Float value is allowed";
			} 
			
			 if (is_numeric($hsc) || empty($hsc))
			{
				$validateHsc = "*Enter GPA/Only Float value is allowed";
			} 
			
			 if (is_numeric($cgpa) || empty($cgpa) )
			{
				$validateCGPA = "*Enter CGPA/Only Float value is allowed";
				
			} 
			
			 if(!isset($_POST['birthday'])){
				$validateDateOfBirth = "*select your birth date";
			}
			
			 if (strlen($phonenumber) != 11)
		    {
				$validatePhonenumber="*You phonenumber should contain 11 digits ";
			} 
			
			 if(empty($otp) || strlen($otp)!=6)
			{
				$validateOTP= "*you have to enter 6 characters for OTP";
			}

			 if(empty($presentAddress) || !preg_match('/[A-Za-z0-9\-\\,.]+/', $presentAddress))
			{
				$validatePresentAddress="*Please re-enter the presentAddress";
			}
			
			 if(empty($permanentAddress) || !preg_match('/[A-Za-z0-9\-\\,.]+/', $permanentAddress))
			{
				$validatePermanentAddress="*Please re-enter the permanentAddress";
			}
			if(empty($_REQUEST["gender"]))
			{
				$validategender= "*you have to select gender";
			}
		
	}	
	else
	{*/
		
				//Get form data
				$formdata = array
				(
					'name'=> $_POST["name"],
					'email'=> $_POST["email"],
					'gender'=>$_POST["gender"],
					'birthday'=> $_POST["birthday"],
					'phonenumber'=> $_POST["phonenumber"],
					'otp'=>$_POST["otp"],
					'presentAddress'=> $_POST["presentAddress"],
					'permanentAddress'=>$_POST["permanentAddress"],
					'ssc'=>$_POST["ssc"],
					'hsc'=>$_POST["hsc"],
					'cgpa'=>$_POST["cgpa"]
				);
						
				
				$existingdata = file_get_contents('gdata.json');
				$tempJSONdata = json_decode($existingdata);
				$tempJSONdata[] =$formdata;
				
				$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
				
			
				if(file_put_contents("gdata.json", $jsondata))
			    {
					echo "Application done <br>";

				}
				else 
					echo "no data saved";
			
						
				$data = file_get_contents("gdata.json");
				$mydata = json_decode($data);	
		//}
//}	
?>
<!DOCTYPE html>
<html>
<body>
<br>
<a href="HomePage.php"> Go Back To Home Page </a>
<br>

</body>
</html>