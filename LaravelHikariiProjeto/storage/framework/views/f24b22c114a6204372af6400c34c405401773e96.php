<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes | Leest</title>
</head>
<body>
    <h2> Listando clientes </h2>
    <ul>
    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a href="<?php echo e($cliente->id); ?>"><?php echo e($cliente->nome); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <form method="post">
        <?php echo e(csrf_field()); ?>

        <input type="text" name="nome" placeholder="Nome...">
        <input type="text" name="email" placeholder="E-mail...">
        <input type="submit" value="Inserir">
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\ClientesLaravelHikarii\resources\views/clientes.blade.php ENDPATH**/ ?>