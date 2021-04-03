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



    <link rel="stylesheet" href="./assets/login/css/estilo01.css">




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
                <h1>INICIAR SESIÓN</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>o usa tu cuenta</span>
                <input id="inp_Usuario" type="email" placeholder="Email" />
                <input id="inp_Contrasena" type="password" placeholder="Password" />
                <a href="#">Olvidé mi contraseña </a>
                <button id="link_entrar">INICIAR SESIÓN</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button  class="ghost" id="signIn">INICIAR SESIÓN.</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">REGISTRARME</button>
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

<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">

</script>

<script>
    $( window ).on( "load", function() {



        $("#link_entrar").on("click",function (){
            f_login();
        })

        $("#link_atras").on("click",function (){
            window.location="p_login";
        })

        $("#olvide_contrasena").on("click",function (){
            window.location="p_olvide_contrasena";
        })

        $( "#inp_Usuario" ).keypress(function() {
            $(".inp_Usuario").removeClass("is-invalid");
        });
        $( "#inp_Contrasena" ).keypress(function() {
            $(".inp_Contrasena").removeClass("is-invalid");
        });


    });

    function f_login(){

        let v_error=false;

        if($("#inp_Usuario").val().length==0){
            $(".inp_Usuario").addClass("is-invalid");
            v_error=true;
        }

        if($("#inp_Contrasena").val().length==0){
            $(".inp_Contrasena").addClass("is-invalid");
            $("#error_contrasena").html("Ingrese su contraseña.");
            v_error=true;
        }

        if(!v_error){

            $.ajax({
                url : 'http://localhost/lebers/0002-GestorEmpresarial/Ajax/login',
                data : {

                    correo : $("#inp_Usuario").val(),
                    contrasena : $("#inp_Contrasena").val()
                },
                type : 'Post',
                dataType : 'json',
                success : function(json) {
                    console.info('json:',json.acceso);

                    if(json.acceso===true){
                        // window.location="p_Home/"+json.IdUser;
                        window.location = "<?= $_SERVER['app.baseURLSe'] ?>/entrada/"+json.IdUser;
                    }

                    if(json.acceso==='error con el usuario'){


                        $(".inp_Contrasena").addClass("is-invalid");
                        $("#error_contrasena").html("Contraseña no valida para el usuario.");

                    }

                },
                error : function(jqXHR, status, error) {
                    console.log(jqXHR);
                    console.log(status);
                    console.log(error);
                    console.log('Disculpe, existió un problema');
                    // alert("error:");
                },
                complete : function(jqXHR, status) {
                    console.log('Petición realizada');
                }
            });
        }



    }




</script>



</body>
</html>




