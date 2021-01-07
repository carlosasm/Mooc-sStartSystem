<?php
    include_once 'public/headerLogin.php';
?>
       

        <img class="wave" src="./public/img/wave.png">
        <div class="container">
            <div class="img">
                <img src="./public/img/back.svg"> 
            </div>
            <div class="login-container">
                <form  action="?controlador=Item&accion=call_listar">
                    <img class="avatar" src="./public/img/avatar1.svg">
                    <h2>¡Bienvenido!</h2>
                    <div class="input-div uno">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h5>Nombre de usuario</h5>
                            <input id="userName"class="input" type="text">
                        </div>
                    </div>
                    <div class="input-div dos">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div>
                            <h5>Contraseña</h5>
                            <input id="pass" class="input" type="password">
                        </div>
                    </div>
                    <a href="#">¿Olvidó su contraseña?</a>
                    <input type="submit" class="btn" onclick="login($('#userName').val(),$('#pass').val())" value="INICIO">
                </form>
            </div>
        </div>

    

<?php
    include_once 'public/footer.php';
?>


