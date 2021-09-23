<?php
session_start(); 
//include('../admincontrol/updatecheck.php');
include('updatecheck.php');

if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h1>Update Student</h1>

Hii, <h3><?php echo $_SESSION["username"];?></h3>

<br><br>
    <?php
    $radio1=$radio2=$radio3="";
    $password=$student_name=$fathers_name=$mothers_name="";
    $DOB=$contact_no=$address=$cgpa="";
    $Batch=$section_name=$dept_name="";
    $err_uname="";
$err_sname="";
$err_password="";
$err_contactno="";
$err_gender="";
$err_cgpa="";
$err_batch="";
$hasError=false;

    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->CheckUser($conobj,"students",$_POST["username"],$_POST["password"]);

    if ($userQuery->num_rows > 0) 
    {

        // output data of each row
        while($row = $userQuery->fetch_assoc())
        {
        
            $username=$row["username"];
            $password=$row["password"];
            $student_name=$row["student_name"];
            $fathers_name=$row["fathers_name"];
            $mothers_name=$row["mothers_name"];
            $DOB=$row["DOB"];
            $contact_no=$row["contact_no"];
            $address=$row["address"];
            $cgpa=$row["cgpa"];
            $Batch=$row["Batch"];
            $section_name=$row["section_name"];
            $dept_name=$row["dept_name"];
        
            if(  $row["gender"]=="female" )
            { $radio1="checked"; }
            else if($row["gender"]=="male")
            { $radio2="checked"; }
            else{$radio3="checked";}
    
        } 
    }
    else 
    {
    echo "0 results";
    }
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //if(isset($_POST["submit"])){
            //for user
            if(empty($_POST["username"])){
                $err_uname="*Username Required";
                $hasError=true;
            }
            else if(strlen($_POST["username"]) < 6){
                $err_uname="*Username should be at least 6 characters";
                $hasError=true;
            }
            else{
                $username=htmlspecialchars($_POST["username"]);
            }
            if (is_numeric($contact)) 
            {
                if(strlen($_POST["contact_no"]) < 11)
                {
                    $err_contactno="* should be at least 11 number";
                    $hasError=true;
                }
            }
             else 
            {
                $err_contactno="*Enter only numbers";
                $hasError=true;
            }

        //for batch!
        if (is_numeric($Batch)) 
        {
            $Batch=$_POST["Batch"];
        }
         else 
        {
            $err_batch="Enter accurate year";
            $hasError=true;
        }
        //for cgpa
        if (is_float($cgpa)) 
        {
            $cgpa=$_POST["cgpa"];
        }
         else 
        {
            $err_cgpa="*Enter float number";
            $hasError=true;
        }
            
            if(empty($_POST["student_name"]) || empty($_POST["fathers_name"]) || empty($_POST["mothers_name"]) || empty($_POST["address"])){
                $err_sname= "* Information Required";
                $hasError=true;
            }else{
                $student_name=$_POST["studentname"];
                $fathers_name=$_POST["fathes_name"];
                $mothers_name=$_POST["mothers_name"];
                $address=$_POST["address"];

            }
            //for password
            if(empty($_POST["password"])){
                $err_password = "*password Required";
                $hasError=true;
            }else{
                $password=$_POST["password"];
            }
            if(!$hasError){
                echo "password: $password";
            }
            //for gender
            if (empty($_POST["gender"])) 
            {
                $err_gender = " *You have to select one";
              } else
               {
                $gender = $_POST["gender"];
              }
            }
        }
    ?>
<form action='' method='post'>
username : <input type='text' name='username' value="<?php echo $username; ?>" > <br>
Password : <input type='text' name='password' value="<?php echo $password; ?>" > <br>
Student Name : <input type='text' name='student_name' value="<?php echo $student_name; ?>" > <br>
Fathers Name : <input type='text' name='fathers_name' value="<?php echo $fathers_name; ?>" > <br>
Mothers Name : <input type='text' name='mothers_name' value="<?php echo $mothers_name; ?>" > <br>

Date Of Birth : <input type='date' name='DOB' value="<?php echo $DOB; ?>" > <br>

Gender:
    <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
    <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
    <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other
    <br>
Contact Number : <input type='text' name='contact_no' value="<?php echo $contact_no; ?>" > <br>
Address : <input type='text' name='address' value="<?php echo $address; ?>" > <br>
CGPA : <input type='text' name='cgpa' value="<?php echo $cgpa; ?>" > <br>

Batch : <input type='text' name='Batch' value="<?php echo $Batch; ?>" > <br>
Section Name : <input type='text' name='section_name' value="<?php echo $section_name; ?>" > <br>
Department Name : <input type='text' name='dept_name' value="<?php echo $dept_name; ?>" > <br>



<input name='update' type='submit' value='Update'>  

        
    <?php echo $error; ?>
<br>
<br>
<a href="student.php">Go Back </a>
<br>

</body>
</html>