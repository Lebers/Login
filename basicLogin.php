<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>



    <link rel="stylesheet" href="../assets/login/css/estilo01.css">




</head>
<body>

<section class="pc d-none d-md-block d-lg-block d-xl-block">

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="movil  d-sm-block d-md-none d-lg-none d-xl-none">



    <div class="content">
        <img src="<?= $_SERVER['app.img'] ?>icono.png" width="150px" height="150px"/>
    </div>


    <section>

        <div class="row    ">

            <div class="col-9 p-3 ml-5 mr-5 mb-3" style="background: #D2DBE1  0% 0% no-repeat padding-box; opacity: 1;">
                <a href="#p_Registro" style="  opacity: 1; text-decoration: none;">
                    <div class=" " style="text-align: center;
                    font: normal normal 200 18px Roboto;
                    letter-spacing: 0px;
                    color: #094782;
                    opacity: 1;" >REGISTRARME <i class="fal fa-angle-right" style="margin-left: 20px"></i></div>
                </a>
            </div>

            <div class="col-9 p-3 ml-5 mr-5 mb-3" style="background: #003399 0% 0% no-repeat padding-box; opacity: 1;">
                <a href="../pantallas/p_InicioSesion" style="  opacity: 1; text-decoration: none;">
                    <div class=" " style="text-align: center;
                    font: normal normal 200 18px Roboto;
                    letter-spacing: 0px;
                    color: #FFFFFF;
                    opacity: 1;"><span>INICIAR SESIÓN</span> <i class="fal fa-angle-right"
                                                                style="margin-left: 20px"></i></div>
                </a>
            </div>

            <div
                    class="col-9 p-3 ml-5 mr-5"
                    style="background: #fff 0% 0% no-repeat padding-box; opacity: 1;">
                <div class=" " style="text-align: center;
text-decoration: underline;
font: normal normal 300 14px Roboto;
letter-spacing: 0px;
color: #4A4B4F;
opacity: 1;">
                    <span>Olvidé mi contraseña   </span>
                </div>
            </div>
        </div>

    </section>

</section>





<script>

    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });

</script>




</body>
</html>




