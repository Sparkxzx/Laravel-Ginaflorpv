@extends('site.app')
@section('title', 'Shopping Cart')
@section('content')
<style>
 #todo{
     background: #ccc;
     padding: 50px;
 }
 h1,h2,h3, h5{
    line-height : 40px;
    text-align: justify;
 }
 li{
    list-style:none;
 }
</style>
<div id="todo">
    <h1>Privacidad</h1>
<h5>El uso de sitio web implica la aceptación de lo siguiente:

    GinaFlor P.V. con domicilio avenida 1° de Mayo local #59, conforme a lo establecido en la Ley Federal de Proteción en Posesion de Particulares,
    pone a disposición de nuestros clientes, proveedores, empleados y público en general nuestro Aviso de privacidad. <br>
    Los datos personales que nos proporcionan son utilizados  estrictamente en la realización de funciones propias de nuestro
    negocio y por ningun motivo serán tranferidos a terceros.

    A nuestros clientes les solicitamos los siguientes datos personales:
    <ul>
        <li>1) Nombre, teléfono, correo electrónico, domicilio, código postal, para facilitar el proceso en la compra de nuestros productos y/o servicios.</li>
        <li>2) Cuenta personal o de negocios en paypal.</li>
    </ul>
    En caso de realizar modificaciones sobre el presente Aviso de privacidad, se le informará mediante un correo electrónico.
</h5><br>
<h1>Términos y condiciones</h1>
<h5>Política de envío
    <ul>
        <li>1) La contratación de nuetros productos/servicios se puede hacer en horarios de lunes-viernes de 09:00 a 20:00 durante todo el año.</li>
        <li>2) Los lugares a los que se ofrece el envío gratis son los que estan ubicados cerca de Acámbaro.</li>
        <li>3) Duración del pedido. <br>
            -El tiempo aproximado de la entrega en de un par de horas.</li>
        <li>4) Los horarios de entrega son: <br>
            -de 8:00 a 18:00 hrs
        </li>
        <li>5) El envío viene incluido con el pedido.</li>
        <li>6) Para envíos fuera de nuestros límites, hay una comisión, el costo variará del lugar de entrega.</li>
    </ul>
    Garantía
    <ul>
        <li>1) Los arreglos cumplen con la calidad esperada, las flores estan en buenas condiciones.</li>
        <li>
            2) Los arreglos se entregan con la persona que los ha solicitado, en caso de su ausencia, este será entregado con alguien de confianza.
        </li>
        <li>
            3) Si los datos proporcionados son erroneos, podrás corregirlos una vez hayas realizado tu pago, entrando en un acuerdo con el dueño del negocio.
        </li>
    </ul>
    Devolución y cancelación
    <ul>
        <li>
            1) Puedes cancelar/cambiar tu pedido siempre y cuando sea solicitado con aticipación, atráves de mensaje con el dueño.
    </li>
        <li>
            2) Puedes solicitar una devolución si el pedido recibido tiene mala calidad o se encuentra dañado.
        </li>
    </ul>
</h5>
</div>
@stop
