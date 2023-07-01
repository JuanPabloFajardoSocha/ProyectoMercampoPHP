
<div class="container-registrar_usuario">
    <div class="login_form_container-registrar_usuario">

        <div class="login_form_registrar_usuario" method="post">
            <h2>Datos usuario</h2>
            <div class="input_group">
                <select id="selectTipo_documento">
                    <option value="" name="" selected disabled> Tipo de documento:</option>
                    <option value="1" name="">Tarjeta de identidad</option>
                    <option value="2" name="">Cedula de ciudadania</option>
                    <option value="3" name="">Pasaporte</option>
                    <option value="4" name="">Cedula extrangera</option>
                </select>

                <input id="numero_documento" type="number" placeholder="Numero de documento:" class="input_text2"
                    autocomplete="off" required />
            </div>

            <div class="input_group">
                <input id="nombres" type="text" placeholder="Nombres:" class="input_text" autocomplete="off" required />

                <input id="apellidos" type="text" placeholder="Apellidos:" class="input_text2" autocomplete="off"
                    required />
            </div>

            <div class="input_group">

                <select id="Tipo_de_usuario">
                    <option value="" name="" selected disabled> Tipo de usuario:</option>
                    <option id="1" value="1" name="">Productor</option>
                    <option id="2" value="2" name="">Cliente</option>
                   

                </select>

                <input id="direccion" type="text" placeholder="Direccion:" class="input_text2" autocomplete="off"
                    required />

            </div>

            <div class="input_group">
                <input id="celular" type="number" placeholder="Celular:" class="input_text" autocomplete="off"
                    required />

                <input id="email" type="email" placeholder="Email:" class="input_text2" autocomplete="off" required />
            </div>

            <div class="input_group">
                <input id="usuario_registro" type="text" placeholder="Usuario:" class="input_text" autocomplete="off"
                    required />

                <input id="contraseña_registro" type="password" placeholder="Contraseña:" class="input_text2"
                    autocomplete="off" required />
            </div>

            <div class="button_group_registrarse" id="registrarse_button">
                <a id="registrarse">Registrarse</a>
            </div>

        </div>
    </div>
</div>