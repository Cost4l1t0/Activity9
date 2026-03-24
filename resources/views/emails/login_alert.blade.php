<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { max-width: 500px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 6px; }
        h2 { color: #1a1a2e; }
        p { color: #555; line-height: 1.6; }
        .badge { background-color: #e67e22; color: #fff; padding: 6px 14px; border-radius: 4px; font-size: 0.9rem; }
        .footer { margin-top: 24px; font-size: 0.8rem; color: #aaa; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Alerta de inicio de sesión</h2>
        <p>Hola <strong>{{ $user->name }}</strong>,</p>
        <p>Se ha detectado un inicio de sesión en tu cuenta con el correo <strong>{{ $user->email }}</strong>.</p>
        <p>Fecha y hora: <strong>{{ now()->format('d/m/Y H:i:s') }}</strong></p>
        <p><span class="badge">Inicio de sesión detectado</span></p>
        <p>Si no fuiste tú, cambia tu contraseña inmediatamente.</p>
        <div class="footer">Activity 9 — Laravel 12</div>
    </div>
</body>
</html>
