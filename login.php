<?php
$pageTitle = 'Inicio de sesión - Asistente Taxonómico de Microalgas';
include('header.php');
include("connect.php");

if (isset($_POST['Email']) && !empty($_POST['Email'])) {
    $email = trim($_POST['Email']);
    $sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".sha1($_POST['Password'])."'";
    $res = mysqli_query($db, $sql);
    if (mysqli_num_rows($res) < 1) {
        echo 'ERROR, usuario no encontrado.';
    } else {
        $r = mysqli_fetch_assoc($res);
        session_start();
        $_SESSION['Email'] = $email;
        header("Location: index.php");
        exit();
    }
}
?>

<h2>Iniciar sesión</h2>
<div class="row">
    <div class="col-md-4">
        <section>
            <form method="post" action="" novalidate="novalidate">
                <h4>Escriba sus credenciales para iniciar sesión.</h4>
                <hr>
                <div class="text-danger validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li></ul></div>
                <div class="form-group">
                    <label for="Email">Correo electrónico</label>
                    <input class="form-control" type="email" data-val="true" data-val-email="El correo electrónico no es válido." data-val-required="El correo electrónico es obligatorio." id="Email" name="Email" value="">
                    <span class="text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group">
                    <label for="Password">Contraseña</label>
                    <input class="form-control" type="password" data-val="true" data-val-required="La contraseña es obligatoria." id="Password" name="Password">
                    <span class="text-danger field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label for="RememberMe">
                            <input type="checkbox" data-val="true" data-val-required="The Recordarme field is required." id="RememberMe" name="RememberMe" value="true">
                            Recordarme
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Iniciar sesión</button>
                </div>
                <div class="form-group">
                    <!-- <p>
                        <a href="https://localhost:44380/Account/ForgotPassword">¿Olvidó su contraseña?</a>
                    </p>
                    <p>
                        <a href="https://localhost:44380/Account/Register">Registrar nuevo usuario</a>
                    </p> -->
                </div>
            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8JbiTYALhXdFia6j4HINCPSbeXTvFcND_C9CLscuPzZHUDsT3mIGrE6pfEVhwQyAwuFXym3bbfj_oDjHjtnI6EKf64lT9JN6iFxrB3Xx-u0O1ix0Wo351hPxvon-TB_lzLMHn4YNQalH_wAu8lfBB-g"><input name="RememberMe" type="hidden" value="false"></form>
        </section>
    </div>
    <div class="col-md-6 col-md-offset-2">
        <section>
        </section>
    </div>
</div>

<?php include('footer.php'); ?>