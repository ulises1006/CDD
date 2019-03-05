<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>HISTORIA CLINICA</title>
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
                    <th style="margin-top:0px"><img width="700px" style="margin-top:80px;" src="../public/images/sergio.png"></th>
                </tr>
            </thead>
            <tbody style="height:60px;padding-top:60px; !important">
                <tr style="height:60px;padding-top:60px; !important">
                    <th class="" style="width:50%;text-align:right;">
                        <div style="height:60px;">
                            <p style="margin-top:25px;">Durango, Dgo. {{ $fecha }}</p>
                        </div>
                    </th>
                </tr>
                <tr style="margin-top:200px; height:60px;">
                    <th class="" style="width:20%;text-align:left;">
                        <div style="height:0px; margin-top: -45px">
                            <p style="margin-top:0px; text-align:center;">DATOS GENERALES DEL PACIENTE</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $patient->name }}
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{ $patient->age }} años &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                <tr style="margin-top:-100px; height:60px;">
                    <th class="" style="width:20%;text-align:left;">
                        <div style="height:0px;">
                            <p style="margin-top:40px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $patient->address }}, &nbsp; {{ $patient->state }}
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{ $patient->state }}</p>
                            <hr style="border-bottom: 0.5px solid black; width: 700px; margin-top: -15px; margin-right: 65px;">
                            </p>
                            <h6 style="margin-top:-5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dirección
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Estado</h6>
                        </div>
                    </th>
                </tr>
                <tr style="margin-top:-100px; height:60px;">
                    <th class="" style="width:20%;text-align:left;">
                        <div style="height:0px;">
                            <p style="margin-top:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $patient->occupation }}
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;{{ $patient->phone }}</p>
                            <hr style="border-bottom: 0.5px solid black; width: 700px; margin-top: -15px; margin-right: 65px;">
                            </p>
                            <h6 style="margin-top:-5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ocupación
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;
                                Teléfono</h6>
                            <h4 style="margin-top:-20px">En caso de emergencia comunicarse con: </h4>
                        </div>
                    </th>
                </tr>
                <tr style="margin-top:200px; height:60px;">
                    <th class="" style="width:20%;text-align:left;">
                        <div style="height:0px; margin-top: -15px">
                            <p style="margin-top: 60px;">Nombre de tutor: &nbsp;&nbsp;{{ $history->nombre_emergencia }}
                                <hr style="border-bottom: 0.5px solid black; width: 490px; margin-top: -15px; margin-right: 85px;">
                            </p>
                        </div>
                    </th>
                </tr>
                <tr style="margin-top:-100px; height:60px;">
                    <th class="" style="width:20%;text-align:left;">
                        <div style="height:0px;margin:auto;">
                            <p style="margin-top:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->ocupacion }}
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;{{ $history->telefono }}</p>
                            <hr style="border-bottom: 0.5px solid black; width: 700px; margin-top: -18px; margin-right: 65px;">
                            </p>
                            <h6 style="margin-top:-15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ocupación
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Teléfono</h6>
                        </div>
                    </th>
                </tr>
                <tr style="margin-top:200px; height:60px;">
                    <th class="" style="width:20%;text-align:left;">
                        <div style="height:0px; margin-top: -15px">
                            <p style="margin-top: 65px;">Parentesco:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $history->parentesco }}
                                <hr style="border-bottom: 0.5px solid black; width: 490px; margin-top: -15px; margin-right:129px;">
                            </p>
                            <p style="text-align:center">HISTORIA CLÍNICA</p>
                        </div>
                    </th>
                </tr>
                <tr style="margin-top:200px; height:60px;">
                    <th class="" style="width:20%;text-align:left;">
                        <div style="height:0px; margin-top: -15px">
                            <p style="margin-top: 60px;">Motivo de la consulta: &nbsp;&nbsp;{{ $history->motivo }}
                                <hr style="border-bottom: 0.5px solid black; width: 490px; margin-top: -15px; margin-right: 60px;">
                            </p>
                            <h4 style="margin-top:10px">Antecedentes personales patológicos</h4>
                            <h4 style="margin-top:-15px">Sufre o a sufrido de algún tipo de problemas de salud</h4>
                        </div>
                    </th>
                </tr>
            </tbody>
        </table>
        <table class="tabla" style="margin-top:60px;">
            <tr class="tr">
                <th class="th">Problema de salud</th>
                <th class="th">Si / No</th>
                <th class="th">Problema de salud</th>
                <th class="th">Si / No</th>
            </tr>
            <tr class="tr">
                <td class="td">Anemia</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->anemia }}</td>
                <td style="text-align:center;" class="td">Asma</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->asma }}</td>
            </tr>
            <tr class="tr">
                <td class="td">Cáncer</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->cancer }}</td>6
                <td class="td">Colesterol </td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->colesterol }}</td>
            </tr>
            <tr class="tr">
                <td class="td">Diabetes</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->diabetes }}</td>6
                <td class="td">Enfermedades cardiacas </td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->enf_cardiacas }}</td>
            </tr>
            <tr class="tr">
                <td class="td">Epilepsia o Desmayos</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->epilepsia }}</td>
                <td class="td">Tabaquismo</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->tabaquismo }}</td>
            </tr>
            <tr class="tr">
                <td class="td">Hemofilia</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->homofilia }}</td>
                <td class="td">Hepatitis</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->hepatitis }}</td>
            </tr>
            <tr class="tr">
                <td class="td">Hipertiroidismo</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->hipertiroidismo }}</td>6
                <td class="td">Hiportiroidismo</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->hipotiroidismo }}</td>
            </tr>
            <tr class="tr">
                <td class="td">Infartos previos</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->infartos }}</td>
                <td class="td">Marcapasos</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->marcapasos }}</td>
            </tr>
            <tr class="tr">
                <td class="td">Migraña</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->migrañas }}</td>
                <td class="td">Presión arterial alta</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->presion_alta }}</td>
            </tr>
            <tr class="tr">
                <td class="td">Presión arterial baja</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->presion_baja }}</td>
                <td class="td">Problemas del riñón</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->prob_riñones }}</td>
            </tr>
            <tr class="tr">
                <td class="td">Quimioterapia</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->quimioterapias }}</td>
                <td class="td">Sangrado excesivo</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->sangrado }}</td>
            </tr>
            <tr class="tr">
                <td class="td">Taquicardias</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->taquicardias }}</td>
                <td class="td">Tuberculosis</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->tuberculosis }}</td>
            </tr>
            <tr class="tr">
                <td class="td">Ulceras gástricas</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->ulceras_gastricas }}</td>6
                <td class="td">VHI/Sida</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->vih }}</td>
            </tr>
        </table>
        <p style="text-align:center">INFORMACIÓN MEDICA</p>
        <table class="tabla" style="margin-top:15px;">
            <tr class="tr">
                <th class="th">Problema de salud</th>
                <th class="th">Si / No</th>
                <th class="th">Problema de salud</th>
                <th class="th">Si / No</th>
            </tr>
            <tr class="tr">
                <td class="td">Embarazó</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->embarazo }}</td>6
                <td class="td">Esta usted amamantando</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->amamantando }}</td>
            </tr>
            <tr class="tr">
                <td class="td">Tomando algún tipo de anticonceptivos</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->anticonceptivo }}</td>6
                <td class="td">Tomando algún tipo de medicamento</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->medicamentos }}</td>
            </tr>
        </table>
        <p style="margin-top: 10px;">Alergias: &nbsp;&nbsp;{{ $history->alergias }}
            <hr style="border-bottom: 0.5px solid black; width: 535px; margin-top: -15px; margin-right:129px;">
        </p>
        <p style="margin-top: 10px;">Problema dental previo: &nbsp;&nbsp;{{ $history->prob_dental_previo }}
            <hr style="border-bottom: 0.5px solid black; width: 445px; margin-top: -15px; margin-right:129px;">
        </p>
        <p style="text-align:center">ANTECEDENTES PERSONALES NO PATOLÓGICOS</p>
        <table class="tabla" style="margin-top:15px;">
            <tr class="tr">
                <th class="th">Problema de salud</th>
                <th class="th">Si / No</th>
                <th class="th">Problema de salud</th>
                <th class="th">Si / No</th>
            </tr>
            <tr class="tr">
                <td class="td">Bebidas alcohólicas</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->alcoholismo }}</td>6
                <td class="td">Drogas</td>
                <td class="td">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $history->drogas }}</td>
            </tr>
        </table>
        <p class="texto" style="margin-top: 10px; text-align:justify; margin-top:50px;">Por lo anterior firmo para dar
            constancia y efecto a que haya lugar,
            declaro que los datos proporcionados en el presente documento y
            que la información que ofrezco es auténtica por lo tanto asumo
            la responsabilidad derivada de la falta de veracidad de la misma.</p>

        <hr style="border-bottom: 0.5px solid black; width: 300px; margin-top:100px; text-align:center;">
        <h6 style="margin-top:0px; text-align:center;">NOMBRE Y FIRMA DEL MEDICO</h6>
        <hr style="border-bottom: 0.5px solid black; width: 300px; margin-top:100px; text-align:center;">
        <h6 style="margin-top:0px;  text-align:center;">NOMBRE Y FIRMA DEL PACIENTE</h6>
    </div>
</body>

</html>
