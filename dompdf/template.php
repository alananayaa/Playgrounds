<?php
    $path = 'assets/img/logotipo.jpg';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>
<meta charset="UTF-8"/>
<style>
    * {
        margin:0;
        padding:0;
        font-family: 'Helvetica';
    }
    body {
        background-color: #EDF2F9;
    }
    .title{
        margin: 20 0 10 50;
        
    }
    .title h1 {
        color: red;
        
    }
    .header {
        background-color: #37AC5E; /* Old browsers */
        height: 90px;
    }

    .header img {
        margin-left: 50;
    }
    .header p {
        float: right;
        margin-right: 100px;
        margin-top: 34px;
        color: #EDF2F9;
    }
    .container {
        margin: auto;
        margin-top: 40;
        width: 80%;
        height: 270px;
    }
    .card {
        background: white;
        width: 45%;
        float:left;
        padding: 10px;
        border-radius: 10px;
        border: 1px solid #EFEFEF;
    }
    .card-table {
        background: white;
        width: 100%;
        
        border-radius: 10px;
        border: 1px solid #EFEFEF;
    }
    .card-title {
        font-weight: bold;
        font-size: 11px;
        margin-bottom: 5px;
    }
    .card-input {
        height: 37px;
        margin-bottom: 3px;
    }
    .input-label {
        font-size: 8px;
    }
    .input-form {
        font-size: 8px;
        border: lightgray 1px solid;
        border-radius: 5px;
        padding-left: 5px;
        height: 15px;
        padding-top: 3px;
    }
    .col {
        width: 285px;
        display: block;
    }
    .col-2 {
        width: 140px;
        display: inline-block;
    }
    .col-3 {
        width: 91.5px;
        display: inline-block;
    }
</style>

<div class="title">
    <h1>PRECOTIZACIÓN</h1>
</div>
<div class="header">
    <img src="<?=$base64?>" alt="" width="165px" height="90px"/>
    <p>procom.com</p>
</div>
<div class="container">
    <div class="card">
        <p class="card-title">Datos generales</p>
        <div class="card-input col">
            <p class="input-label">Nombre de la empresa</p>
            <p class="input-form">Productos lateos SA de CV de RXY</p>
        </div>
        <div class="card-input col-2">
            <p class="input-label">RFC</p>
            <p class="input-form">JJPP000000XYZ</p>
        </div>
        <div class="card-input col-2">
            <p class="input-label">Tipo de Regimen</p>
            <p class="input-form">Moral</p>
        </div>
        <div class="card-input col" style="margin-top: -10px;">
            <p class="input-label">Nombre de contacto</p>
            <p class="input-form">Juan Perez</p>
        </div>
        <div class="card-input col">
            <p class="input-label">Dirección</p>
            <p class="input-form">Avenida Siempre Viva 3904</p>
        </div>
        <div class="card-input col-2">
            <p class="input-label">Colonia</p>
            <p class="input-form">La Loma</p>
        </div>
        <div class="card-input col-2">
            <p class="input-label">Estado</p>
            <p class="input-form">Jalisco</p>
        </div>
        
        <div class="card-input col">
            <p class="input-label">Correo</p>
            <p class="input-form">juan.perez@soyuncorreo.com</p>
        </div>
        <div class="card-input col-2">
            <p class="input-label">Teléfono</p>
            <p class="input-form">3312345678</p>
        </div>
        <div class="card-input col-2">
            <p class="input-label">Celular</p>
            <p class="input-form">3387654321</p>
        </div>
        
    </div>
    <div style="width: 20px; height: 20px; float: left;"></div>
    <div class="card">
        <p class="card-title">Escenario</p>
        <div class="card-input col">
            <p class="input-label">Total de la nomina</p>
            <p class="input-form">$12,000.00</p>
        </div>
        <div class="card-input col-2">
            <p class="input-label">Nomina fiscal</p>
            <p class="input-form">$12,345.00</p>
        </div>
        <div class="card-input col-2">
            <p class="input-label">Excedente</p>
            <p class="input-form">$345.00</p>
        </div>
        <div style="display: block;"></div>
        <div class="card-input col-2">
            <p class="input-label">Numero de empleados</p>
            <p class="input-form">10</p>
        </div>
        <div class="card-input col-2">
            <p class="input-label">Prima de riesgo</p>
            <p class="input-form">3.5%</p>
        </div>
        <div style="display: block;"></div>
        <div class="card-input col-2">
            <p class="input-label">Nomina original</p>
            <p class="input-form">Outsourcing</p>
        </div>
        <div class="card-input col-2">
            <p class="input-label">Porcentaje comision</p>
            <p class="input-form">12%</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="card-table">
        <p>Hello</p>
    </div>
</div>
