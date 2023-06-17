<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            background: #ffffff;
        }

        input,
        button {
            border: none;
            outline: none;
            background: none;
            font-family: "Segoe UI", "Frutiger", "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
        }

        .cont {
            overflow: hidden;
            position: relative;
            width: $contW;
            height: 550px;
            margin: 0 auto 100px;
            background: #fff;
        }

        .form {
            position: relative;
            width: 100%;
            height: 100%;
            padding: 50px 30px 0;
        }

        button {
            font-family: "Segoe UI", "Frutiger", "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
            font-weight: bold;
            display: block;
            margin: 0 auto;
            width: 260px;
            height: 36px;
            border-radius: 30px;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
        }

        h2 {
            font-family: "Segoe UI", "Frutiger", "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
            width: 100%;
            font-size: 26px;
            text-align: center;
        }
        h5{
            font-family: "Segoe UI", "Frutiger", "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
            width: 950px;
            font-size: 20px;
            text-align: right;
        }

        form {
            display: block;
            width: 100%;
            margin: -25px;
            text-align: center;
            align-items: center;
        }

        input {
            background: #ccc;
            width: 35%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            text-align: left;
        }

        input:hover {
            background-color: #DC9966;
        }

        input[type=text]:focus {
            border: 3px solid #DC9966;
        }
        input[type=checkbox]{
            margin-top: 40px;
            margin-bottom: 50px;
            margin-left: 200px;
            margin-right: -230px;
        }

        div[class="form sign-up"] {
            border-radius: 5px;
            background-color: #ffffff;
            padding: 20px;
        }


        .submit {
            margin-top: 80px;
            margin-bottom: 50px;
            margin-left: 550px;
            margin-right: 5px;
            background: #7D5243;
        }

        .submit:hover {
            background-color: #DC9966;
        }

    </style>

<body>
    <div class="page">
        <h2>Sign Up</h2>
        <a href="http://www.google.com"><h5>Sign In</h5>
         </a>

    </div>
    <div class="form sign-up">
        <form method="post" class="form-group">
            <input type="text" name="nama" placeholder="Nama" /> <br/>
            <input type="text" name="email" placeholder="Email" /> <br/>
            <input type="password" name="password" placeholder="Password" id="password"/> <br/>
        </form>
        <input type="checkbox" onclick="myPassword()">Show Password
        <button type="button" class="submit">Sign Up</button>
    </div>
</body>
    <script>
        function myPassword(){
            var x = document.getElementById("password");
            if (x.type==="password") {
                x.type="text";
            } else{
                x.type="password";
            }
        }
    </script>
</head>

</html>
<?php /**PATH C:\xampp\htdocs\EMarket\resources\views/signup.blade.php ENDPATH**/ ?>