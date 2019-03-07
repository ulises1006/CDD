<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>ODONTOGRAMA</title>
    <style>
        h1 {
            text-align: center;
            text-transform: uppercase;
        }

        .prescripcion {
            text-align: right;
            margin-right: 570px !important;

        }

        .contenido {
            font-size: 20px;
        }

        .fecha {
            text-align: right;
            margin-right: 10px !important;
            margin-bottom: 0;
        }

        .edad {
            text-align: right;
            margin-right: 175px !important;
        }

        .firma {
            text-align: right;
            margin-right: 85px !important;
            margin-top: 110px;

        }

        .arriba {
            height: 50px !important;

        }


        .abajo {
            height: 50px !important;
            margin-top: 0% !important;
        }

        .tabla {
            font-family: sans-serif;
            border-collapse: collapse;
            width: 100%
        }

        .th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        .texto {
            font-size: 18px;

        }

        .td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

    </style>

</head>

<body style="margin:0;">
    <div style="margin-top:-120px;padding:0; margin-left:0;" class="container">
        <table style="height:50%;">
            <thead>
                <tr style="margin-top:0px;">
                    <th style="margin-top:0px"><img width="700px" style="margin-top:75px;" src="../public/images/{{ $doctor }}.png"></th>
                </tr>
            </thead>
            <tbody style="height:60px;padding-top:60px; !important">
                <tr style="height:60px;padding-top:60px; !important">
                    <th class="" style="width:50%;text-align:right;">
                        <div style="height:60px;">
                            <p style="margin-top:30px;">Durango, Dgo. {{ $fecha }}</p>
                        </div>
                    </th>
                </tr>
                <tr style="margin-top:200px; height:60px;">
                    <th class="" style="width:20%;text-align:left;">
                        <div style="height:0px; margin-top: -15px">
                            <p style="margin-top:-40px; text-align:center;">DATOS DEL PACIENTE</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $patient->name }}
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{ $patient->age }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{ $patient->sex }}</p>
                            <hr style="border-bottom: 0.5px solid black; width: 700px; margin-top: -15px; margin-right: 65px;">
                            </p>
                            <h6 style="margin-top:-5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nombre de paciente
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Edad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Sexo</h6>
                        </div>
                    </th>
                    
                </tr>
                <tr style="margin-top:0px;">
                    <p style="margin-top:-500px; text-align:center;">ODONTOGRAMA</p>
                <th style="margin-top:0px"><img width="500px" style="margin-top:100px; width:80%; text-align:center;margin-left:70px;" src="../public/images/odontograma.png"></th>
            </tr>
            </tbody>
        </table>
            <p style="text-align:center; margin-top:30px;">DIAGNOSTICO</p>
        <table class="tabla" style="margin-top:-5px;">
            <tr class="tr">
                <th class="th">Tratamiento</th>
                <th class="th">Presupuesto</th>
                
            </tr>
            <tr class="tr">
                <td class="td">{{ $tratamiento->name }}</td>
                <td class="td">{{ $tratamiento->price }}</td>
               
            </tr>
            
        </table>

        <table class="tabla" style="margin-top:76px;">
            <tr class="tr">
                <th class="th">DESCRIPCIÓN DEL TRATAMIENTO</th>
                
            </tr>
            <tr class="tr">
                <td class="td">{{ $tratamiento->description }}</td>
            </tr>
        </table>
        <p style="margin-top:0px"><img width="500px" style="margin-top:40px; width:80%; text-align:center;margin-left:70px;" src="../../odontogramas_imagenes/{{ $patient->id }}.jpg"></p>
        
        <hr style="border-bottom: 0.5px solid black; width: 300px; margin-top:100px; text-align:center;">
        <h6 style="margin-top:0px; text-align:center;">NOMBRE Y FIRMA DEL MEDICO</h6>
        <hr style="border-bottom: 0.5px solid black; width: 300px; margin-top:100px; text-align:center;">
        <h6 style="margin-top:0px;  text-align:center;">NOMBRE Y FIRMA DEL PACIENTE</h6>
    </div>
</body>
</html>