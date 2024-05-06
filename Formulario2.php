<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <ul class="navbar">
        <li><a href="inicio.html">Nuestra Empresa</a></li>
        <li><a href="destino.html">Destinos</a></li>
        <li><a href="horayprecio.html">Precios y Horario</a></li>
        <li><a href="Formulario1.html">Formulario</a></li>
        <li><a href="Formulario2.php">FormularioII</a></li>
    </ul>
    <h1>Formulario de registro</h1>
    <form action="crearFormulario.php" method="post" class="form-register" onsubmit="return validarFormulario();">
        <h2 class="form__titulo">COPACABANA</h2>
        <div class="contenedor-inputs">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="input-48" required>
            <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" class="input-48" required>
            <input type="email" name="email" id="email" placeholder="Correo" class="input-100" required>
            <input type="text" name="usuario" id="usuario" placeholder="Usuario" class="input-48" required>
            <input type="password" name="pass" id="pass" placeholder="Contraseña" class="input-48" required>
            <input type="text" name="telefono" id="telefono" placeholder="Teléfono" class="input-100" required>

            <h4>sexo</h4>
            <p><input type="radio" name="sexo" value="Femenino" required />Femenino</p>
            <p><input type="radio" name="sexo" value="Marculino" required />Marculino</p>
            

            <div class="seccion">
                <h4>deporte </h4>
                <p><input type="radio" name="deporte" value="Futbol" required /> Futbol</p>
                <p><input type="radio" name="deporte" value="Basquet" required /> Basquet</p>
                <p><input type="radio" name="deporte" value="Tennis" required /> Tennis</p>

                <h4>marca_preferida</h4> 
                <select name="marca_preferida" id="marca_preferida">
                    <option value="nike">nike </option>
                    <option value="puma">puma </option>
                    <option value="adidas">adidas </option>
                  
                </select>

                <input type="submit" name="Registrar" class="btn-enviar centrar-botones">
            </div>
        </div>
    </form>
   
    <footer>
        <p class="texto-movimiento">🌟🌟🌟🌟🌟Tenemos descuentos especiales para nuestros clientes más frecuentes🌟🌟🌟🌟🌟</p>
    </footer>

    <script>
        function validarFormulario() {
            const nombreInput = document.getElementById('nombre');
            const correoInput = document.getElementById('email');
            const claveInput = document.getElementById('pass');
            const telefonoInput = document.getElementById('telefono');

            if (nombreInput.value === '') {
                alert('Por favor, ingrese su nombre.');
                return false;
            }

            if (!correoInput.checkValidity()) {
                alert('Por favor, ingrese una dirección de correo electrónico válida.');
                return false;
            }

            if (claveInput.value.length < 6) {
                alert('La contraseña debe tener al menos 6 caracteres.');
                return false;
            }

            if (telefonoInput.value === '') {
                alert('Por favor, ingrese su número de teléfono.');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
