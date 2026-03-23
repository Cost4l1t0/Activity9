<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .container {
        max-width: 700px;
        margin: 80px auto;
        text-align: center;
        padding: 0 20px;
    }
    h1 {
        color: #fff;
        font-size: 1.8rem;
        margin-bottom: 12px;
    }
    p {
        color: #aaa;
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 8px;
    }
    hr {
        border: none;
        border-top: 1px solid #444;
        margin: 24px 0;
    }
    .badge {
        display: inline-block;
        background-color: #1d3a6e;
        color: #7ba7f7;
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 4px;
        margin-bottom: 16px;
    }
    .info-box {
        background-color: #16213e;
        border: 1px solid #2a3a5c;
        border-radius: 6px;
        padding: 20px;
        margin-top: 24px;
        text-align: left;
    }
    .info-box p {
        margin-bottom: 6px;
        font-size: 0.95rem;
    }
    .info-box span {
        color: #fff;
        font-weight: bold;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <span class="badge">Dashboard — Vista privada</span>
    <h1>Panel de Control</h1>
    <hr>
    <p>Hola, <strong style="color:#fff;"><?php echo e(auth()->user()->name); ?></strong>. Has iniciado sesión correctamente.</p>
    <p>Esta es la <strong style="color:#fff;">vista del Dashboard</strong>, solo accesible para usuarios registrados.</p>

    <div class="info-box">
        <p>Nombre: <span><?php echo e(auth()->user()->name); ?></span></p>
        <p>Correo: <span><?php echo e(auth()->user()->email); ?></span></p>
        <p>Miembro desde: <span><?php echo e(auth()->user()->created_at->format('d/m/Y')); ?></span></p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMP2\htdocs\activity-9\resources\views/dashboard.blade.php ENDPATH**/ ?>