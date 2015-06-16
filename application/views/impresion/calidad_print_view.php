<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>calidad</title>
  <style>
  body{}

  .borde
  {
   outline: 1px solid #C9C9C9;	
 }

 .logo
 {
  outline: 1px solid #C9C9C9;
  text-align: center;
  width: 25%;
}

.datos
{
  width:50%;
  text-align:center;
}

h1, h2
{
  padding: 3px 10px;
}

h2
{
  font-size:18px;
}

.conteiner
{
  width:700px;
  margin:0 auto;
}

.firma
{
  border-top: 2px dotted #B6B6B6;
  text-align: center;
  width: 260px;
  float: right;
  margin: 110px 0px;
}
</style>
</head>
<body onload="imprimir()">
  <div class="conteiner">
    <section class="borde" style="  display: -webkit-box;">
     <div class="logo"><img src="<?=base_url()?>assets/img/logo.jpg" width="128" height="128" /></div>
     <div class="datos">
       <h1>INC-AC-AP-OM</h1>
       <h1>Nº <?=$formulario->id_formulario?></h1>
     </div>
     <div class="logo">
       <h1>Fecha: <?php $fechaD = new DateTime($formulario->fecha_deteccion); echo date_format($fechaD,'d/m/Y') ?></h1>

     </div>

   </section>

   <section>
     <div class="borde"><h2>Detección</h2></div>
     <p><?=$formulario->deteccion?></p>
   </section>

   <section>
     <div class="borde"><h2>Análisis de la causa / Participantes</h2></div>
     <p><?=$formulario->analisis?></p>
   </section>

   <section>
     <div class="borde"><h2>Plan de Acción (plazos, responsable, medios, registro (si corresponde))</h2></div>
     <p><?=$formulario->plan?></p>
   </section>

   <section>
     <div class="borde"><h2>Verificación de la eficacia</h21></div>
     <p><?=$formulario->verificacion?></p>
   </section>


   <section>

     <div class="firma"> <p>FIRMA</p> </div>

   </section>  


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
