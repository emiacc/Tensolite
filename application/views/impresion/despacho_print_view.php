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
                <h1>Despacho</h1>
                <h5>Documento no válidocomo factura</h5>
            </div>
            <div class="logo">
            	<?php $fechaD = new DateTime($solicitud->fecha); ?>
            	<br>
                <h2>Nº <?=$solicitud->id_orden?></h2>
                <h2>Fecha: <?=date_format($fechaD,'d/m/Y')?></h2>
            </div>
		</section>
        
<br><br>
        <section class="borde" style="  display: -webkit-box;">
        	<div style="padding:5px;">
        		<p>Orden carga p/:	<?=$solicitud->ordendecarga?></p>
        		<p>Cliente:	<?=$solicitud->cliente?></p>
        		<br>
        		<p>Transporte:	<?=$solicitud->transporte?></p>
        		<br>
                <p>Entró: <?=$solicitud->entro?>. Salió: <?=$solicitud->salio?>.</p>
        	</div>
		</section>

<br><br>
        <section>


            <table class="rwd_auto fontsize">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Cantidad</th>
                        <th>Medida</th>
                        <th>Nave</th>
                       
                    </tr>
                </thead>
                <tbody>
                	
                    <?php foreach ($detalles as $key => $detalle): ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$detalle->cantidad?></td>
                            <td><?=number_format(($detalle->medida/10),2)?></td>
                            <td><?=$detalle->nave?></td>
                         
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>


            
        </section>

       
        <section class="borde" style="  display: -webkit-box;">
        	<div style="padding:5px;">
        		<p>Puentista:	<?=$solicitud->puentista?></p>
        		<p>Op. Pinza:	<?=$solicitud->oppinza?></p>
        		<p>Op. Camión:	<?=$solicitud->opcamion?></p>
        		
        	</div>
		</section>
<br><br>
        <table class="rwd_auto fontsize">
            
            <tbody>
                <tr>
                    <td style="width: 40px">OBSERVACIONES</td>	
                    <td><?=$solicitud->observaciones?><br><br><br><br></td>
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