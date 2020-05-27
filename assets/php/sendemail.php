<?php
$receptor = "contacto@databird.tech";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
$headers = array(
    'From' => $correo,
    'Reply-To' => $correo
);
mail($receptor, $asunto,$mensaje);
?>
