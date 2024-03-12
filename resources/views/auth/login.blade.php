@include('layouts.style')
<title>Iniciar Sesión</title>
<body class="fondo">
    <div class="container">
        <div class="row fon">
            <div class="col-lg-7 ">
                <img src="{{asset('frontend/img/login_final.svg')}}" class="login-img">
            </div>

            <div class="col-lg-5 login-form">
                <div class="">
                <h1 class="fw-bold">Paragon<b style="color:red; font-size:3rem;">+</b></h1>
                </div>
                
                <!-- Login -->
                <form action="{{ route ('login') }}" method="post" class="login-form">
                    @csrf
        
                    <h5 class="fw-semibold">Conoce tu nuevo portal.</h5>
                    <p class="">Puedes hacer todo lo que necesitas como funcionario. <b>Revisa tus horarios, eventos, trámites y más. De manera más fácil y sencilla.</b></p>
                    
                    <label for="" class="form-label">Ingresa tus datos para <b>iniciar sesión.</b></label>
                    <div class="">
                        <label for="" class="form-label">Usuario</label>
                        <input type="username" class="form-control form-login" name="username" autofocus>
                    </div>
                    <div class="">
                        <label for="" class="form-label">Contraseña</label>
                        <input type="password" class="form-control form-login" name="password">
                    </div>
                    <div class="">
                        <div class="pt-4">
                            <div class="fields-container button-container">
                                <button tabindex="0" class="bx--btn bx--btn--paragon" type="submit">Iniciar sesión<svg focusable="false" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" fill="currentColor" aria-hidden="true" width="16" height="16" viewBox="0 0 16 16" class="bx--btn__icon"><path d="M9.3 3.7L13.1 7.5 1 7.5 1 8.5 13.1 8.5 9.3 12.3 10 13 15 8 10 3z"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
 
