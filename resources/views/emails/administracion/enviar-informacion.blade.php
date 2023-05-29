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
    background-image: url('https://www.menssajero.com/images/fondos/distribucion_soft.png');">

    <tr style="text-align: center">
        <td colspan="2">
            <h1 style="font-weight: 700;
                color: #e30b17;">
                Nueva Solicitud de Información y Asesoría
            </h1>
        </td>
    </tr>
    <tr style="text-align: center;">
        <td colspan="2">
            <p style="font-size: 1.2em; color:#303054;">
                El siguiente usuario ha solicitado información sobre los servicios que ofrece Menssajero.
            </p>
        </td>
    </tr>
    <tr style="text-align: center;">
        <td colspan="2">
            <h2 style="font-weight: 700;
                color: #e30b17;">
                Datos Personales del usuario
            </h2>
        </td>
    </tr>

    <tr style="text-align: left; color: #303054">
        <td>
            <p>
                <b>Nombre y apellidos: </b>
                {{$usuario['nombre_completo']}}
            </p>
            <p>
                <b>Empresa: </b>
                {{$usuario['Empresa']}}
            </p>
            <p>
                <b>Rubro de la Empresa: </b>
                {{$usuario['rubro']}}
            </p>
            <p>
                <b>Interesado en: </b>
                <ul>
                    @foreach($usuario['soluciones'] as $key => $value)
                        <li>{{$value}}</li>
                    @endforeach
                </ul>
            </p>
            <p>
                <b>RIF: </b>
                {{$usuario['rif']}}
            </p>

            <p>
                <b>Correo electrónico: </b>
                {{$usuario['email']}}
            </p>
            <p>
                <b>Teléfono: </b>
                {{$usuario['telefono']}}
            </p>
            <p>
                <b>Teléfono adicional: </b>
                {{$usuario['telefono2']}}
            </p>
            <p>
                <b>Dirección: </b>
                {{$usuario['direccion']}}
            </p>
            <p>
                <b>Código Postal: </b>
                {{$usuario['codigoPostal']}}
            </p>
            <p>
                <b>Pais: </b>
                {{$usuario['pais']}}
            </p>
            <p>
                <b>Estado: </b>
                {{$usuario['estado']}}
            </p>
            <p>
                <b>Ciudad: </b>
                {{$usuario['poblacion']}}
            </p>
        </td>

    </tr>

</table>

@include('emails.footer')

</body>
</html>
