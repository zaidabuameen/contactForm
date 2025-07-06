<?php 
//الاتصال بقاعده البيانات
$servername = "localhost";
$username = "root";    // اسم المستخدم الافتراضي في XAMPP
$password = "";        // كلمة المرور فارغة في XAMPP
$dbname = "contact form";
$conn = new mysqli($servername, $username, $password, $dbname);


//التحقق من الاتصال 
if ($conn->connect_error) {
    die("contact error". $conn->connect_error);
}

//نجيب البيانات من النموذج 
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

//التحقق من الحمايه
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$message = mysqli_real_escape_string($conn, $message);

//تعبئه البيانات في جدول 
/*$sql = "INSERT INTO messages (name ', 'email ', 'message')
VALUES($name,$email,$message);";*/
$sql = "INSERT INTO messages (name, email, message)
        VALUES ('$name', '$email', '$message')";

if($conn->query($sql)===TRUE){
    echo "your message send sucess";
}
else
{
    echo "there is an error in ur message ".$sql . "<br>".$conn->error;
}

//نسكر الاتصال 
$conn->close(); 
