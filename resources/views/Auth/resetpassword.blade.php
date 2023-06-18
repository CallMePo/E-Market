<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reset Password</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
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
            align-items: center;
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

        h5 {
            font-family: "Segoe UI", "Frutiger", "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
            font-size: 20px;
            margin-right: 200pt;
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

        div[class="form forgotpassword"] {
            border-radius: 5px;
            background-color: #ffffff;
            padding: 20px;
        }


        .forgot {
            margin-top: 80px;
            margin-bottom: 50px;
            margin-left: auto;
            margin-right: auto;
            background: #7D5243;
        }

        .forgot:hover {
            background-color: #DC9966;
        }

        .login_oueter {
            width: 360px;
            max-width: 100%;
        }

        .logo_outer {
            text-align: center;
        }

        .logo_outer img {
            width: 120px;
            margin-bottom: 40px;
        }

        a {
            color: #7D5243;
        }

        li {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

    <script>
        function password_show_hide() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye");
            var hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
    </script>
</head>

<body>
    <div class="page">
        <h2>Reset Password</h2>
        <a href="http://www.google.com">
            <h5>Sign In</h5>
        </a>
    </div>
    <div class="form forgotpassword">
        <div class="card-body">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            <form action="" method="POST" class="form-group">
                @csrf
                <input type="password" name="passwordAkun" placeholder="password" /> <br />
                <input type="password" name="cpassword" placeholder="confirm password" /> <br />
                <button type="submit" class="forgot" value="submit">Reset Password</button>
            </form>
        </div>
    </div>
</body>



</html>
