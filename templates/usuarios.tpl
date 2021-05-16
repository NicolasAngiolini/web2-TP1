{include file="header.tpl"}

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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <script src="js/jsusuarios.js"></script>

</body>

</html>