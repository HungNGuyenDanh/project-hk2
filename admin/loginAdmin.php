
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family:'poppins',sans-serif;
        }
        section{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            background: url(./images/z4468923591853_8550ce75e46905c47a016890f1aba20d.jpg) no-repeat;
            background-size: cover;
            background-position: center;
                }
        .form-box{
            position: relative;
            width: 400px;
            height: 450px;
            background: rgba(240, 248, 255, 0.55);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .loginA-h2{
            font-size: 2em;
            color: black;
            text-align: center;
        }
        .inputbox{
            position: relative;
            margin: 30px 0;
            width: 310px;
            border-bottom: 2px solid black;
        }
        .inputbox label{
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color:black;
            font-size: 1em;
            pointer-events: none;
            transition: .5s;
        }
        input:focus ~ label,
        input:valid ~ label {
            top: -5px;
        }
        .inputbox input{
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: black;
        }
        .forget{
            margin: -15px 0 15px;
            font-size: .9em;
            color: #fff;
            display: flex;
            justify-content: center;
        }
        .forget label input{
            margin-right: 3px;
        }
        .forget label {
            color: #000000;
            margin-right: 20px;
        }
        .forget label a{
            color: #fff;
            text-decoration: none;
        }
        .forget label a:hover{
            text-decoration: underline;
        }
        button{
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
        }
        .register{
            font-size: .9em;
            color: #000000;
            margin: 25px 0 10px;
            text-align: center;

        }
        .register p a {
            text-decoration: none;
            font-weight: 600;
        }
        .register p a:hover{
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2 class="loginA-h2">Admin Login</h2>
                    <div class="inputbox">
                        <input type="text" required>
                        <label for="">Your Username : </label>
                    </div>
                    <div class="inputbox">
                        <input type="password" required>
                        <label for=""> Your Password : </label>
                    </div>
                    <div class="forget">
                        <a href="">Forget Password</a>
                    </div>
                    <button>Log In</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>