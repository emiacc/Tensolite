<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Produccion</title>
    <style>
        body{}

        .borde, li{
            outline: 1px solid #C9C9C9;

        }

        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li{
            padding:10px;
        }
        .logo{
            outline: 1px solid #C9C9C9;
            text-align: center;
            width: 25%;

        }
        .datos{
            width:50%;
            text-align:center;
        }
        h1, h2{
            padding: 3px 10px;
        }

        h2{
            font-size:18px;
        }
        .conteiner{
            width:700px;
            margin:0 auto;
        }

        .firma{
            border-top: 2px dotted #B6B6B6;
            text-align: center;
            width: 210px;
            float: right;
            margin: 110px 10px;
        }
        .firma1{
            border-top: 2px dotted #B6B6B6;
            text-align: center;
            margin: 60px 0 0 0;
        }

        td{outline: 1px solid #C9C9C9;}


        p {margin:0 0 10px 0}

        table.width200,table.rwd_auto {border:1px solid #ccc;width:100%;margin:0 0 50px 0}
        .width200 th,.rwd_auto th {background:#ccc;padding:5px;text-align:center;}
        .width200 td,.rwd_auto td {border-bottom:1px solid #ccc;padding:5px;text-align:center}
        .width200 tr:last-child td, .rwd_auto tr:last-child td{border:0}

        .rwd {width:100%;overflow:auto;}
        .rwd table.rwd_auto {width:auto;min-width:100%}
        .rwd_auto th,.rwd_auto td {}

        @media only screen and (max-width: 760px), (min-width: 768px) and (max-width: 1024px)  
        {

            table.width200, .width200 thead, .width200 tbody, .width200 th, .width200 td, .width200 tr { display: block; }

            .width200 thead tr { position: absolute;top: -9999px;left: -9999px; }

            .width200 tr { border: 1px solid #ccc; }

            .width200 td { border: none;border-bottom: 1px solid #ccc; position: relative;padding-left: 50%;text-align:left }

            .width200 td:before {  position: absolute; top: 6px; left: 6px; width: 45%; padding-right: 10px;}

            .width200 td:nth-of-type(1):before { content: "Nombre"; }
            .width200 td:nth-of-type(2):before { content: "Apellidos"; }
            .width200 td:nth-of-type(3):before { content: "Cargo"; }
            .width200 td:nth-of-type(4):before { content: "Twitter"; }
            .width200 td:nth-of-type(5):before { content: "ID"; }

            .descarto {display:none;}
            .fontsize {font-size:10px}
        }

        /* Smartphones (portrait and landscape) ----------- */
        @media only screen and (min-width : 320px) and (max-width : 480px) 
        {
            body { width: 320px; }
            .descarto {display:none;}
        }

        /* iPads (portrait and landscape) ----------- */
        @media only screen and (min-width: 768px) and (max-width: 1024px) 
        {
            body { width: 495px; }
            .descarto {display:none;}
            .fontsize {font-size:10px}
        }
    </style>
</head>

<body onload="imprimir()">
    <div class="conteiner">
        <section class="borde" style="  display: -webkit-box;">
            <div class="logo"><img src="<?=base_url()?>assets/img/logo.jpg" width="128" height="128" /></div>
            <div class="datos">
            	<br>
                <h2>Orden de Produccion de Viguetas</h2>
            </div>
            <div class="logo">
            	<br>
                <h2>Nº <?=$solicitud->id_orden?></h2>
            </div>
		</section>
        
        <?php $fechaD = new DateTime($solicitud->fecha); ?>
<br>
        <section>
            <div style="display: -webkit-box;">
                <h2 class="borde" style="width: 340px;">Banco Nº: <?=$solicitud->nro_banco?></h2> 
                <h2 class="borde" style="width: 320px;">Fecha: <?=date_format($fechaD,'d/m/Y')?></h2> 
            </div>
        </section>
<br><br>
        <section>


            <table class="rwd_auto fontsize">
                <thead>
                    <tr>
                        <th>Nº de Ordene</th>
                        <th>Nº de Cortes</th>
                        <th>Medida</th>
                        <th>Nº Viguetas</th>
                        <th>Nº Viguetas a depositar</th>
                        <th>Nº Viguetas descarte</th>
                        <th>Nº Viguetas recuperadas</th>
                    </tr>
                </thead>
                <tbody>
                	
                    <?php foreach ($detalles as $key => $detalle): ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$detalle->cortes?></td>
                            <td><?=number_format(($detalle->medida/10),2)?></td>
                            <td><?=($detalle->cortes)*12?></td>
                            <td><?php if($detalle->cantidad != 0) echo $detalle->cantidad?></td>
                            <td></td>
                            <td></td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>


            <table class="rwd_auto fontsize">

                <tbody>
                    <tr>
                        <td style="width: 70px;">Firma de conformidad</td>
                        <td>Confeccionado <br><br> Supervisor <br><br> Medidor-Marcador <br><br> Cosechador <br><br> Jefe de planta </td>
                        <td>N<br>O<br>M<br>B<br>R<br>E<br>S</td>	
                        <td style="width: 180px;">
                            <?=$solicitud->confeccionado?> <br><br> 
                            <?=$solicitud->supervisor?> <br><br>
                            <?=$solicitud->medidor?> <br><br>
                            <?=$solicitud->cosechador?> <br><br>
                            <?=$solicitud->jefe?>
                        </td>
                        <td>F<br>I<br>R<br>M<br>A<br>S</td>	
                        <td style="width: 180px;"><br><hr><br><hr><br><hr><br><hr><br><hr></td>
                       
                    </tr>

                </tbody>
            </table>

        </section>

       
        <table class="rwd_auto fontsize">
            
            <tbody>
                <tr>
                    <td style="width: 40px">OBSERVACIONES</td>	
                    <td><br><br><br><br><br><br></td>
                </tr>
              
            </tbody>
        </table>



    </div>
    <script type="text/javascript">
        function imprimir()
        {
           window.print();
           window.history.back();
        }
    </script>
</body>
</html>
