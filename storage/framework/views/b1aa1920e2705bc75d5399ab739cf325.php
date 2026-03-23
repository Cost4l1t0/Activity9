<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Activity 9 - <?php echo $__env->yieldContent('title'); ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a2e;
            color: #ccc;
        }
        nav {
            background-color: #16213e;
            padding: 12px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #333;
        }
        nav .brand {
            color: #fff;
            font-size: 1.1rem;
            font-weight: bold;
            text-decoration: none;
        }
        nav .nav-links a, nav .nav-links button {
            color: #ccc;
            text-decoration: none;
            margin-left: 16px;
            font-size: 0.95rem;
            background: none;
            border: none;
            cursor: pointer;
            font-family: Arial, sans-serif;
        }
        nav .nav-links a:hover, nav .nav-links button:hover {
            color: #fff;
        }
        nav .nav-links .btn-nav {
            background-color: #3b5bdb;
            color: #fff;
            padding: 6px 14px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.9rem;
        }
        nav .nav-links .btn-nav:hover {
            background-color: #2f4ac0;
        }
    </style>
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>

<nav>
    <a href="/" class="brand">Activity 9</a>
    <div class="nav-links">
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
            <span style="color:#888; margin-left:16px;"><?php echo e(auth()->user()->name); ?></span>
            <form method="POST" action="<?php echo e(route('logout')); ?>" style="display:inline;">
                <?php echo csrf_field(); ?>
                <button type="submit">Cerrar sesión</button>
            </form>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>">Iniciar sesión</a>
            <a href="<?php echo e(route('register')); ?>" class="btn-nav">Registrarse</a>
        <?php endif; ?>
    </div>
</nav>

<?php echo $__env->yieldContent('content'); ?>

</body>
</html>
<?php /**PATH D:\XAMP2\htdocs\activity-9\resources\views/layouts/app.blade.php ENDPATH**/ ?>