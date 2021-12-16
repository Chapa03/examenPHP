<?php
require_once '../../utilDB.php';
$bd = conectarMySQL();
$sql = <<<SQL
insert into persona(id,nombre)
values(3,'ana')
SQL;

// INSERT
try {
    $bd->exec($sql);
    echo 'Persona creada';
} catch (Exception $e) {
    echo $e;
}

// CONSULTA
$filas = $bd->query($sql);

foreach ($filas as $fila) {
    echo "ID:" . $fila['id'] . ", Nombre: " . $fila['nombre'] . "<br/>\n";
}
?>