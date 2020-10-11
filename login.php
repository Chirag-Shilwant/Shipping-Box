<!DOCTYPE html>
<?php
        session_start();
        $conn = mysqli_connect("localhost", "root", "","health");
        
        if(isset($_POST['name']) and isset($_POST['pass']))
        {
            
            
            $user=$_POST['name'];
            $pass=$_POST['pass'];
            
            $_SESSION['name']=$user;
            $_SESSION['pass']=$pass;
            
            $sql="select * from registration1 where username='$user' AND password= '$pass' ";
            $result=mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result)==1)
            {
                header('Location:home.html');
            }
            else
            {
                echo "<script type='text/javascript'>alert('USERNAME OR PASSWORD IS INCORRECT');</script>";
            }
        }
        
        ?>
<html lang="en">
       
        
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<link rel="stylesheet" href="login.css">
<script>
        function myFunction() 
        {
            var x=document.getElementById("pass").value; 
            var y=document.getElementById("pass1").value; 
            if(x == y)
            {
               return true;

            }
            else
            {
                alert("please enter same passwords");
                 return false;
            }
        }
        </script>
        
<body>
    <header>



        <div class="reg">
        
         <form name="regis" onsubmit="myFunction()" method="POST"  id="reg">
          <h1>sdasdasd</h1>
            <h2> Login Form </h2><br><br>
            <div id="myForm">
            <select required >
                    <option value="" disabled selected hidden><label>Your Role..</label></option>
             
                     <option value="0"><label>I am a Bidder</label></option>
                  
                     <option value="1"><label>I am a Seller</label></option>
                 </select>
                 </div><br><br>
            <label><b>Name:</label>  <br><input type="text" placeholder="Enter your name" name="name" id="name" pattern="[a-zA-Z]{3,11}" required></input><br><br><br>
            <label><b>Password:</label><input type="password" placeholder="Enter Password" name="pass" id="pass"  required class="style1"></input><br><br><br>
                <label><b>Confirm Password:</label><input type="password" placeholder="Confirm Password" name="pass" id="pass1"  required class="style1"></input><br><br><br>
           
                <input type="checkbox" onclick="myFunction()" required id="ch"></input><label> I Agree your Terms and Conditions</b></label><br><br>
                   <input type="submit" value="Login" id="subb"><br><br> <input type="reset" value="Reset" id="ree"></input> <br><br><br>
                   <a href="sellerreg.html" >New Seller?..Register Here</a><br><br>
           <a href="bidderreg.html">New Bidder?..Register Here</a><br><br>

       
       
       <h1>sdfsa</h1>
                   
        </form>	 
        </div>
       </header>
  
</body>
</html>