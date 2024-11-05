<?php
// URLs para obtener la metadata
$instanceIdUrl = "http://169.254.169.254/latest/meta-data/instance-id";
$hostnameUrl = "http://169.254.169.254/latest/meta-data/local-hostname";

// Función para obtener los datos de la metadata
function getMetadata($url) {
    // Configuración de timeout y seguridad para la solicitud
    $options = [
        "http" => [
            "timeout" => 1, // Tiempo límite en segundos para evitar bloqueos
            "ignore_errors" => true // Ignorar errores de respuesta
        ]
    ];
    $context = stream_context_create($options);

    // Leer la respuesta de la metadata service
    $response = @file_get_contents($url, false, $context);
    return $response ? $response : "No disponible";
}

// Obtener el ID de la instancia
$instanceId = getMetadata($instanceIdUrl);

// Obtener el hostname
$hostname = getMetadata($hostnameUrl);

?>



<?php include 'vars.php';?>
    <h1 class="display-4">Tarea 03. IES Alisal. <span class="badge bg-secondary">
            <?php if($pagina=="/index.php"){  echo 'INDEX'; }?>
            <?php if($pagina=="/alumnos.php"){  echo 'ALUMNOS'; }?>
            <?php if($pagina=="/clientes.php"){  echo 'CLIENTES'; }?>
            <?php if($pagina=="/info.php"){  echo 'INFO'; }?>
            <?php if($pagina=="/default.php"){  echo 'DEFAULT'; }?>
        </span>
    </h1>
<?php
    // Mostrar los resultados
    echo "ID de Instancia: " . htmlspecialchars($instanceId) . "<br>";
    echo "Hostname: " . htmlspecialchars($hostname);
?>
<p>Utilizar Apache/PHP. La BBDD es mysql y será de sólo lectura</p>
<hr class="my-4">
<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link<?php if($pagina=="/index.php"){  echo ' active'; }?>" href="index.php">Personas</a></li>
    <li class="nav-item"><a class="nav-link<?php if($pagina=="/alumnos.php"){  echo ' active'; }?>" href="alumnos.php">Alumnos</a></li>
    <li class="nav-item"><a class="nav-link<?php if($pagina=="/clientes.php"){   echo ' active'; }?>" href="clientes.php">Clientes</a></li>
    <li class="nav-item"><a class="nav-link<?php if($pagina=="/info.php"){   echo ' active'; }?>" href="info.php">Info PHP</a></li>
</ul>
