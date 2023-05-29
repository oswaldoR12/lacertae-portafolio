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
                Nueva Solicitud de Empleo
            </h1>
        </td>
    </tr>

    <tr style="text-align: center;">
        <td colspan="2">
            <h2 style="font-weight: 700;
                color: #e30b17;">
                Datos Personales
            </h2>
        </td>
    </tr>

    <tr style="text-align: left;">
        <td>
            <p>
                <b>Nombres: </b>
                {{ $usuario['nombres'] }} {{ $usuario['apellidos'] }}
            </p>
            <p>
                <b>Edad: </b>
                {{ $usuario['edad'] }}
            </p>
            <p>
                <b>Sexo: </b>
                {{ $usuario['sexo'] }}
            </p>
            <p>
                <b>Correo electrónico: </b>
                {{ $usuario['email'] }}
            </p>
            <p>
                <b>Teléfono: </b>
                {{ $usuario['telefono'] }}
            </p>

            <p>
                <b>Dirección: </b>
                {{ $usuario['direccion'] }}
            </p>
            <p>
                <b>Pais: </b>
                {{ $usuario['pais'] }}
            </p>
            <p>
                <b>Estado: </b>
                {{ $usuario['estado'] }}
            </p>
            <p>
                <b>Ciudad: </b>
                {{ $usuario['ciudad'] }}
            </p>
            <p>
                <b>Situación de empleo actual: </b>
                {{ $usuario['empleo_actual'] }}
            </p>
            <p>
                <b>Área de interés: </b>
                {{ $usuario['area'] }}
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="2"
            style="text-align: center;
                padding: 3rem">
            <a href='http://127.0.0.1:8000/storage/{{$usuario['cv']}}'
                style="text-decoration: none;
                border-radius: 5rem;
                background-color: #413d60;
                color: #fff;
                font-weight: bold;
                margin: auto;
                padding: 1rem 2rem;">
                Ver Curriculum Vitae
            </a>
        </td>
    </tr>

    {{-- <tr>
        <td colspan="2"
            style="text-align: center;
                padding: 3rem">

            <a href='https://www.menssajero.com/admin/pedido-detalle/{{ $pedido->pedido_id }}'
                style="text-decoration: none;
                border-radius: 5rem;
                background-color: #413d60;
                color: #fff;
                font-weight: bold;
                margin: auto;
                padding: 1rem 2rem;">
                Confirmar pago
            </a>
        </td>
    </tr> --}}

    {{-- @foreach ($productos as $item)
    <tr style="line-height: .6rem;
        padding-top: 1rem">

        <td>
            <img src="http://www.menssajero.com/storage/images-productos/{{ $item->tienda }}/{{ $item->imagen }}">

            <h5 style="font-weight: 700;
                color: #413d60;">
                {{ $item->nombre }}
            </h5>
            <p>
                <b>Atributo:</b>
                {{ $item->atributo.': '.$item->valor }}
            </p>
            <p>
                <b>Cantidad:</b>
                {{ $item->cantidad_prod }} unidades
            </p>
            <p>
                <b>Coste/ud:</b>
                {{ number_format($item->precio,'2',',','.') }}/ud
            </p>
            <p>
                <b>Importe:</b>
                {{ number_format(($item->precio * $item->cantidad),'2',',','.') }}
            </p>
        </td>
    </tr>
    @endforeach --}}
</table>

@include('emails.footer')

</body>
</html>
