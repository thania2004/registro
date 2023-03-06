<h1>PROYECTO REGISTRO</h1>
<p>Formulario desarrollado desde la parte de backend, a petición de Factoría F5, que permite la creación de listas de tareas. Orientado a la educación, permite seleccionar asignatura, tiempo, turno, observaciones, en caso sean necesarias, y a su vez se ordena dependiendo la prioridad de la tarea a realizar. </p>
<br>
<h2>Requerimientos de instalación</h2>
<ul>
  <li>Symfony CLI: https://symfony.com/download</li>
  <li>PHP: PHP 8.2.3 (cli). Por ejemplo se puede descargar en OSX con: https://formulae.brew.sh/formula/php</li>
  <li>XAMMP: https://www.apachefriends.org/es/index.html</li>
  <li>Composer: https://getcomposer.org/download/</li>
</ul>
<br>
<h2>Proceso de Instalación</h2>
<h3>Instalación de paquetes Symfony</h3>
<ul>
  <li>composer require symfony/orm-pack (Sin docker)</li>
  <li>composer require symfony/maker-bundle</li>
  <li>composer require form validator twig-bundle security-csrf annotations</li>
</ul>
<br>
<h3>Instalación Test paquetes</h3>
<ul>
  <li>composer require --dev symfony/test-pack</li>
  <li>composer require symfony/panther --dev</li>
  <li>composer require --dev dbrekelmans/bdi</li>
</ul>
<br>
<h3>Inicialización paquete CSS</h3>
  <ul>
  <li>composer require symfony/asset</li>
</ul>
<br>
<h3>Inicialización de Aplicación</h3>
  <ul>
  <li>symfony server:start</li>
</ul>
<p>A la URL que aparecerá por defecto agregarle la siguiente extensión: /todo/list</p>
<img align="center" alt="Aplicación- Registro"  height="400"  width="300" src="">
<br>
<h3>Inicialización de Test</h3>
  <ul>
  <li> php bin/phpunit</li>
</ul>
<br>
<h2>Requisitos (StakeHolders)</h2>
<ul>
  <li>Solo se pide funcional y código</li>
  <li>Sólo se va a presentar el código no es necesario una presentación</li>
  <li>Por lo menos tener un entorno en local operativo (Podéis trabajar las dos en una máquina como hacen en programación por pares o programación extrema)</li>
  <li>Crear un mínimo de una entidad en Symfony con su controlador, formulario, repositorio, etc.</li>
  <li>Crear dos entidades que estén relacionadas de alguna manera</li>
  <li>Que los archivos css y js estén minificados y ofuscados</li>
  <li>EXTRA: Que tenga test</li>
</ul>
<br>
<h2>Stack</h2>
<ul>
  <li>Visual Studio Code</li>
  <li>Xammp</li>
  <li>Symfony</li>
  <li>PhpMyAdmin</li>
  <li>Apache</li>
  <li>GitHub</li>
  <li>Git</li>
  <li>PHP</li>
  <li>Composer</li>
</ul>
<br>
<h2>Aplicaciones del Proyecto Registro</h2>
<ul>
  <li>Entornos personales: los usuarios pueden utilizar la aplicación para crear y gestionar sus propias listas de tareas para su vida cotidiana, como hacer la compra, pagar facturas, recordatorios de citas, entre otros.</li>
  <li>Entornos profesionales: la aplicación puede ser utilizada por equipos de trabajo para gestionar tareas y proyectos. Los miembros del equipo pueden crear y asignar tareas, establecer plazos y prioridades, y hacer seguimiento de las tareas completadas.</li>
  <li>Entornos educativos: los estudiantes pueden utilizar la aplicación para hacer seguimiento de sus tareas y trabajos asignados por sus profesores, así como para gestionar su tiempo y prioridades.</li>
  <li>Entornos de proyectos: la aplicación puede ser utilizada para gestionar tareas y proyectos específicos, como la planificación de eventos, la gestión de proyectos de construcción, el seguimiento de las actividades de investigación, entre otros.</li>
</ul>
<h2>Mejoras a Largo Plazo</h2>
<ul>
  <li>Se tiene pensado cambiar el campo de asignatura por un radio button que permita al usuario cambiar de interfaz, dependiendo de el entorno en el que se encuentre (personal, profesional, educativo)</li>
</ul>


