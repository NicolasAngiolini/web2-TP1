<?php
/* Smarty version 3.1.39, created on 2021-05-16 03:47:06
  from 'C:\xampp\htdocs\WEB2\web2-TPE1\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a0799aef2529_15991737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cc4fcd6a72bee5514f520f8287b8c80f73d8d5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\web2-TPE1\\templates\\usuarios.tpl',
      1 => 1621129575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_60a0799aef2529_15991737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-fluid mt-4 mx-2">
        <div class="row">
            <div class=" col-md-6 border   ">
                <H1>REGISTRARSE</H1>

                <form>
                    Nombre
                    <input type="text" class="form-control " id="nombreUsuario">

                    Apellido
                    <input type="text" class="form-control " id="apellidoUsuario">

                    Email
                    <input type="email" class="form-control " id="emailUsuario">

                    Contraseña
                    <input type="password" class="form-control" id="passwordUsuario">

                    Sexo
                    <select id="sexoUsuario">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                    </select>

                </form>
                
                <button type="button" class="btn btn-warning btn-lg btn-block mx-auto my-2"
                    id="btn_registro">Registrarse</button>

                    <label id="resultado"></label>
            </div>

            <div class="col-md-6 border ">
                <h1>INGRESAR</h1>

                <form>
                    Usuario
                    <input type="text" class="form-control " id="loginUsuario">

                    Contraseña
                    <input type="password" class="form-control" id="loginPassword">
                </form>

                <table class="">
                    <tr>
                        <td>
                            CAPTCHA
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="mainCaptcha" />
                            <input type="button" id="Generar" value="Generar" onclick="Captcha()" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="txtInput" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="Button1" type="button" value="Check" onclick="(validCaptcha())" />
                            <label id="validacion"></label>

                        </td>
                </table>

                <button type="button" class="btn btn-warning btn-lg btn-block mx-auto my-2"
                    id="btn_login">Ingresar</button>
                <label id="confirmacionLogin"></label>
            </div>


        </div>

    </div>


    <footer>
        <p>Copyright © Kokoscompany™ 2020. All Rights Reserved.</p>
    </footer>

    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jsusuarios.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
