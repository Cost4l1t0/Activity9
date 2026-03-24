<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { max-width: 500px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 6px; }
        h2 { color: #1a1a2e; }
        p { color: #555; line-height: 1.6; }
        .badge { background-color: #3b5bdb; color: #fff; padding: 6px 14px; border-radius: 4px; font-size: 0.9rem; }
        .footer { margin-top: 24px; font-size: 0.8rem; color: #aaa; }
    </style>
</head>
<body>
    <div class="container">
        <h2>¡Bienvenido a Activity 9!</h2>
        <p>Hola <strong>{{ $user->name }}</strong>,</p>
        <p>Tu cuenta ha sido creada exitosamente. Ya puedes acceder al sistema con tu correo <strong>{{ $user->email }}</strong>.</p>
        <p><span class="badge">Cuenta activa</span></p>
        <p>Si no fuiste tú quien creó esta cuenta, ignora este mensaje.</p>
        <div class="footer">Activity 9 — Laravel 12</div>
    </div>
</body>
</html>
