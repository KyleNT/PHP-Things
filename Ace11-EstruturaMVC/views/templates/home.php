<h2>Estar na Home!</h2>
<ul>
<?php
    $clientes = \Models\HomeModel::getClientes();

    foreach ($clientes as $value) {
?>
    <li><?php echo $value['nome']; ?></li>
<?php
    } #Llave
?>
</ul>