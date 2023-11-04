<?php 
    include 'vars.php';
    echo $pagina
?>
    <h1 class="display-4">Tarea 03. IES Alisal. <span class="badge bg-secondary">
            <?if($pagina=="/index.php"){  echo 'INDEX'; }?>
            <?if($pagina=="/alumnos.php"){  echo 'ALUMNOS'; }?>
            <?if($pagina=="/clientes.php"){  echo 'CLIENTES'; }?>
            <?if($pagina=="/info.php"){  echo 'INFO'; }?>
        </span>
    </h1>
<?php
    echo "<p>ID de instancia: " . @file_get_contents("http://instance-data/latest/meta-data/instance-id");
    echo "<p>Hostname: "        . @file_get_contents("http://instance-data/latest/meta-data/public-hostname");
?>

<hr class="my-4">
<p>Utilizar Apache/PHP. La BBDD es mysql y será de sólo lectura</p>
<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link<?if($pagina=="/index.php"){  echo ' active'; }?>" href="index.php">Personas</a></li>
    <li class="nav-item"><a class="nav-link<?if($pagina=="/alumnos.php"){  echo ' active'; }?>" href="alumnos.php">Alumnos</a></li>
    <li class="nav-item"><a class="nav-link<?if($pagina=="/clientes.php"){   echo ' active'; }?>" href="clientes.php">Clientes</a></li>
    <li class="nav-item"><a class="nav-link<?if($pagina=="/info.php"){   echo ' active'; }?>" href="info.php">Info PHP</a></li>
</ul>
