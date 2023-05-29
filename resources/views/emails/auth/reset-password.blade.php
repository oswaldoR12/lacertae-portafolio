<!DOCTYPE html>
<html lang="es">
<body>

@include('emails.header')

<table style="width: 100%;
    padding-left: 3rem;
    padding-right: 3rem;
    background-position: right 70%;
    background-repeat: no-repeat;
    background-size: 70%;
    background-image: url('{{ config('app.url') }}/images/fondos/distribucion_soft.png');">

    <tr style="padding-bottom: 2rem">
        <th>
            <h1 style="text-align: center;
                font-weight: 700;
                color: #e30b17;
                margin-top: 0;">
                Restablecer contraseña
            </h1>

            <p>Estás recibiendo este email porque se ha solicitado un cambio de contraseña para tu cuenta.</p>

            <p>Este enlace para restablecer la contraseña caduca en 60 minutos.</p>

            <p>Si no has solicitado un cambio de contraseña, puedes ignorar o eliminar este e-mail.</p>
        </th>
    </tr>

    <tr>
        <td style="text-align: center;
            padding: 3rem">
            
            <a href='{{ route('password.reset', $token) }}' 
                style="text-decoration: none;
                border-radius: 5rem;
                background-color: #303054;
                color: #fff;
                font-weight: bold;
                margin: auto;
                padding: 0.5rem 1.5rem;">
                Restablecer contraseña
            </a>
        </td>
    </tr>
</table>

@include('emails.footer')

</body>
</html>