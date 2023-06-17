<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <h2>Berikut adalah data toko yang sudah terdaftar</h2>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama Toko</th>
            <th>Jam buka toko</th>
            <th>Letak pasar</th>
            <th>Lokasi toko</th>
        </tr>
        <?php $__currentLoopData = $toko; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($t->namaToko); ?></td>
            <td><?php echo e($t->bukaToko); ?></td>
            <td><?php echo e($t->letakPasar); ?></td>
            <td><?php echo e($t->lokasiPasar); ?></td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
<?php /**PATH C:\xampp\htdocs\emarket\resources\views/index.blade.php ENDPATH**/ ?>