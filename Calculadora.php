
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Calculadora</title>
<script type="text/javascript" src="Calculadora.js"></script>
</head>
<center>
          <fieldset style="width:450px">
      <legend> <h2> Calculadora vasica </h2> </legend> <br/>
          
          <DIV ALIGN=left>
        <center>
<body background="ap.jpg">

<form id="calc">
<input type="text" name="n1" id="n1" onkeypress="return validar(event)"><br>
<input type="text" name="n2" id="n2" onkeypress="return validar(event)"><br>

Operadores<br>
<input type="button" name="operacion" id="operacion" onclick="Suma()" value=" + ">
<input type="button" name="operacion" id="operacion" onclick="Resta()" value=" - "> 
<input type="button" name="operacion" id="operacion" onclick="Multiplicacion()" value=" * "> 
<input type="button" name="operacion" id="operacion" onclick="Division()" value=" / "> 

</form>
</div> 
</center>
     </fieldset>
         
         </center>
</body>
</html>