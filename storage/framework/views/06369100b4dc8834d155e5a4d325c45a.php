<?php $__env->startSection('title', 'Iniciar Sesión'); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .container {
        max-width: 400px;
        margin: 80px auto;
        padding: 0 20px;
    }
    h2 { color: #fff; margin-bottom: 20px; font-size: 1.4rem; }
    .form-group { margin-bottom: 16px; }
    label { display: block; color: #aaa; margin-bottom: 6px; font-size: 0.9rem; }
    input[type=email], input[type=password] {
        width: 100%;
        padding: 9px 12px;
        background: #16213e;
        border: 1px solid #333;
        border-radius: 4px;
        color: #fff;
        font-size: 0.95rem;
        font-family: Arial, sans-serif;
    }
    input:focus { outline: none; border-color: #3b5bdb; }
    .error { color: #f87171; font-size: 0.82rem; margin-top: 4px; }
    .btn {
        width: 100%;
        background-color: #3b5bdb;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 4px;
        font-size: 0.95rem;
        cursor: pointer;
        font-family: Arial, sans-serif;
        margin-top: 4px;
    }
    .btn:hover { background-color: #2f4ac0; }
    .footer-link { text-align: center; margin-top: 16px; font-size: 0.88rem; color: #888; }
    .footer-link a { color: #7ba7f7; text-decoration: none; }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Iniciar sesión</h2>

    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="error"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="error"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <button type="submit" class="btn">Iniciar sesión</button>
    </form>

    <div class="footer-link">
        ¿No tienes cuenta? <a href="<?php echo e(route('register')); ?>">Regístrate</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMP2\htdocs\activity-9\resources\views/auth/login.blade.php ENDPATH**/ ?>