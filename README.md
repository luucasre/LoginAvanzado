        Requisitos previos:
PHP 7.4 o superior
MySQL / MariaDB
Composer
Servidor local como XAMPP, Laragon, etc.
Conexión a Internet para la API de Google
Crear proyecto en Google Cloud Console con credenciales OAuth 2.0

    Instalación paso a paso:
1. Instalar el entorno
Instalar XAMPP o similar.
Asegurarse de que Apache y MySQL estén corriendo.

2. Clonar o copiar el proyecto en el servidor local
Ejemplo:
"C:\xampp\htdocs\miproyecto\"

3. Crear la base de datos
Abrí phpMyAdmin
Crear una nueva base de datos llamada "lucas_re"
Importar el archivo "lucas_re.sql"

4. Instalar las dependencias de Composer
Desde la terminal en la carpeta del proyecto, ejecutar:
"composer install"
Esto generará la carpeta "/vendor/" con las librerías necesarias.

5. Configurar acceso con Google
Crear credenciales en Google Cloud
Ir a "https://console.cloud.google.com/"
Crear un nuevo proyecto
Ir a APIs y servicios > Credenciales
Crear ID de cliente OAuth 2.0
Poner como URI de redirección autorizada algo como:
"http://localhost/miproyecto/login.php"

6. Copiar el Client ID y Client Secret en "config.php".

        Como usar el sistema
   
    Registro manual
1.Entrar a "index.html" → redirige a "formregistro.html"
2.Completar los datos y enviarlos
3. "registrar.php" guarda el usuario y la contraseña cifrada en la base de datos

    Inicio de sesión
1. Entrar a "inciarsesion.php"
2. Enviar usuario y contraseña
3. "login.php" los valida usando password_verify()

    Recuperación de contraseña
1. Ir a "recuperar_clave.php"
2. Ingresar el email registrado
3. Se genera una nueva contraseña y un token, y se guarda en la tabla recuperar
4. Se envía un link al email (requiere configuración de mail())
5. Al hacer clic, el usuario accede a "recuperar_clave_confirmar.php", que actualiza su contraseña

    Login con Google
1. Desde login.php o algún botón específico se redirige a Google
2. Tras autenticarse, Google redirige a "autentificacion.php"
3. "autentificacion.php" usa config.php y obtiene el perfil del usuario (email, nombre)
4. Se puede usar esta info para:
-Crear automáticamente una cuenta
-Loguear al usuario

        Notas importantes
   
*"con_db.php" contiene la configuración de conexión con MySQL (credenciales, base, host).
*"composer.lock" es generado automáticamente para asegurar la versión exacta de las dependencias.
*Se recomienda implementar validaciones adicionales y protección CSRF.
*Asegurate de que tu servidor tenga acceso a Internet para que Google API funcione.
*En entornos de producción, nunca subas clientSecret ni "vendor/" a un repositorio público.

    Paso a paso para deployar el sistema en otro equipo 
    
1. Instalar XAMPP en el equipo destino.
   Asegurarse de que los servicios de Apache y MySQL estén funcionando desde el panel de control de XAMPP.


2. Copiar el proyecto al servidor local.
   Pegár toda la carpeta del proyecto (con todos los archivos y subcarpetas) dentro de:
   "C:\xampp\htdocs\"


3. Importar la base de datos.
   - Abrr "http://localhost/phpmyadmin/" en el navegador.
   - Creár una nueva base de datos con el nombre exacto "lucas_re".
   - Hacér clic en “Importar” y seleccionár el archivo "lucas_re.sql" que viene con el proyecto.
   - Ejecutár la importación.


4. Verificar y configurar conexión a la base de datos.
   Abrí el archivo "con_db.php" y asegurate de que los datos de conexión sean correctos. Por defecto deberían funcionar así:
   "$conex = mysqli_connect("localhost", "root", "", "lucas_re");"


5. Instalar las dependencias de Composer.
   Desde una terminal (CMD o PowerShell), ubicarse en la carpeta del proyecto y ejecutar:
   "composer install"
   Esto generará la carpeta vendor/ necesaria para la autenticación con Google.


6. Verificar redirecciones y rutas.
   - "index.html" redirige a "formregistro.html".
   - Asegurarse de que todos los archivos estén en la misma carpeta (sin moverlos).
   - Si se cambia el nombre de la carpeta del proyecto, actualizar las URLs.


7. Ejecutar el sistema desde el navegador.
   Ir a:
   "http://localhost/miproyecto/index.html"
   Desde ahí, ya se podrá registrar, iniciar sesión o recuperar contraseña.
