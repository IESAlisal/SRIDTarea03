
<?php include 'vars.php';?>
    <h1 class="display-4">Tarea 03. IES Alisal. <span class="badge bg-secondary">
            <?php if($pagina=="/index.php"){  echo 'INDEX'; }?>
            <?php if($pagina=="/alumnos.php"){  echo 'ALUMNOS'; }?>
            <?php if($pagina=="/clientes.php"){  echo 'CLIENTES'; }?>
            <?php if($pagina=="/info.php"){  echo 'INFO'; }?>
            <?php if($pagina=="/default.php"){  echo 'DEFAULT'; }?>
        </span>
    </h1>
<p>Utilizar Apache/PHP. La BBDD es mysql y será de sólo lectura</p>
<hr class="my-4">
<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link<?php if($pagina=="/index.php"){  echo ' active'; }?>" href="index.php">Personas</a></li>
    <li class="nav-item"><a class="nav-link<?php if($pagina=="/alumnos.php"){  echo ' active'; }?>" href="alumnos.php">Alumnos</a></li>
    <li class="nav-item"><a class="nav-link<?php if($pagina=="/clientes.php"){   echo ' active'; }?>" href="clientes.php">Clientes</a></li>
    <li class="nav-item"><a class="nav-link<?php if($pagina=="/info.php"){   echo ' active'; }?>" href="info.php">Info PHP</a></li>
</ul>
