<!DOCTYPE html>
<html lang="es">
    <style>
        @media(max-width:670px){

        img{
            width: 60%;
        }
        }
    </style>
<body>
    
    <header style="color: #e30b17; text-align: center; margin: initial;">
        <h1 style="margin-bottom:-2vw;font-weight: lighter; ">Bienvenido a</h1>
        @include('emails.header')
    </header>

<table style="width: 100%;
    padding-left: 3rem;
    padding-right: 3rem;
    background-position: right 70%;
    background-repeat: no-repeat;
    background-size: 70%;
    background-image: url('https://www.menssajero.com/images/fondos/distribucion_soft.png');">

    <tr style="text-align: center">
        <td colspan="2">
            <h2 style="color: #303054;">
                {{-- ¡Felicidades Nombre! --}}
                ¡Felicidades {{$usuario['nombre_completo']}}!
            </h2>
        </td>
    </tr>

    <tr style="text-align: center;">
        <td colspan="1">
            <p style="font-size: 1.2em; color: #303054;margin: auto; width:70% ">
                Aquí encontrarás el servicio que necesitas para potenciar tu negocio.
                En breves un agente de cuentas de clientes se pondrá en contacto contigo
                para resolver cualquier duda.
            </p>
        </td>
    </tr>
    <tr style="text-align: center;">
        <td colspan="1" style="width:55vw;">
            <p style="font-size: 1.2em; color: #303054;  ">
                Estos son los servicios que hemos seleccionado para ti:
            </p>
        </td>
    </tr>

    <tr style="text-align: center; margin-bottom: 5%;">
        <td>
            <h2 style="justify-content:center; display:flex;align-items:center;  color: #303054;">
                <b>Distribución  </b><img style="width: 100px" src="https://www.menssajero.com/images/icons-btn/distribucion_on.png" alt="imagen logo de Distribucion">
            </h2>
            <p style="font-size: 1em; color: #303054;margin: auto; width:60%; text-align:initial" >Es un servicio pionero enfocado en brindar soluciones a la medida para pequeñas y medianas empresas que requieran una infraestructura de logística, almacenamiento y distribución; todo esto a través de una plataforma de comercio electrónico, promoviendo así la digitalización de las PYMES, maximizando los recursos y abaratando costos. </p>

            <hr style="height: 5px; background:#303054; width:40%; margin: 40px auto">

            <h2 style="justify-content:center; display:flex;align-items:center;  color: #303054;">
                <b>Delivery  </b><img style="width: 100px" src="https://www.menssajero.com/images/icons-btn/delivery_on.png" alt="Imagen logo de Delivery">
            </h2>
            <p style="font-size: 1em; color: #303054;margin: auto; width:60%; text-align:initial" >Es un servicio pionero enfocado en brindar Es una plataforma que actúa como intermediario entre el comercio y el cliente final, facilitando la logística y ofreciendo soluciones de entrega de paquetes en un tiempo máximo de 45 minutos.  </p>

            <hr style="height: 5px; background:#303054; width:40%; margin: 40px auto">

            <h2 style="justify-content:center; display:flex;align-items:center;  color: #303054;">
                <b>Marketplace </b><img style="width: 100px" src="https://www.menssajero.com/images/icons-btn/marketplace_on.png" alt="Imagen logo de Marketplace">
            </h2>
            <p style="font-size: 1em; color: #303054;margin: auto; width:60%; text-align:initial; margin-bottom: 5%;" >Es un servicio pionero enfocado en brindar Es un Marketplace principalmente enfocado a emprendedores y al venezolano de a pie, que ofrece soluciones de logística con métodos innovadores de envío y entrega como el cross docking, merge in transit, dropshipping y click and collect.  </p>
        </td>

    </tr>

</table>

@include('emails.footer')

</body>
</html>
