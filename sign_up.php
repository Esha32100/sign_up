<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    
    <style>
        body{
          background-color:rgba(93, 35, 90, 0.89);
        }
        div{
            background-color:white;
            height: 500px;
            width: 400px;
            /* text-align: center; */
            margin-left:550px;
            margin-top:100px;
            border-radius:8px;
            /* box-shadow:horizontal-offset vertical-offset blur-radius spead-radius color:black; */
            box-shadow:5px 5px 10px 10px rgba(63, 9, 61, 0.89);
            /* opacity: 0.6; */
        }
        h5{
            text-align:center;
            color:rgba(63, 9, 61, 0.89);
            font-size: 25px;
            padding-top:20px;
        }
        input{
            box-shadow:0px 5px 10px 2px black;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 14px;
            padding-right: 140px;
            border-radius:12px;
            border: bold;
        }
        .label{
            padding-left:15px;
        }
        .inputt{
            margin-top:10px;
            margin-bottom:10px;
            margin-left:32px;
            margin-right:5px;
        }
        .placeholder{
            margin-top:50px;
            margin-top:20px;

        }
        .but{
            margin:44px;
            padding-top:20px;
            padding-bottom: 20px;
            padding-left: 50px;
            padding-right: 50px;
            border-radius:12px;
            margin-top:30px;
            margin-left:110px;
            color:white;
            background-color:rgba(93, 35, 90, 0.89);
            font-size:15px;
        } 
        .but:hover{
            background-color:rgba(82, 19, 77, 0.89);
            font-size :17px;
            cursor: pointer;
            box-shadow:black;
            opacity:0.9;
            color:1s;
        }
        p{
            font-size:18px;
            margin-top:0px;
            margin-left:60px;

        }
        a{
            color:rgba(82, 19, 77, 0.89);
        }
    </style>
    
</head>
<body>
    <div>
       <form action="sinup.php" method="post" >
        <h5 >SIGN UP</h5>
          <label class="label" >Name</label><br><input id="name" name="name" class="inputt" type="text" placeholder ="Enter your name" ><br> 
          <label class="label">Email</label><br><input id="email" name="email" class="inputt"type="text" placeholder ="Enter your email" ><br> 
          <label class="label">Password</label><br><input id="password" name="password" class="inputt" type="password" placeholder ="Enter your password" >
          <button class="but">SIGN UP</button>
         <p> Have an Account ? <a href="login here">login Here!</a></p>
       </form>
    </div>
    
</body>
</html>