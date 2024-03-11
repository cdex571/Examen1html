<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hola</title>
    
<h1>Formulario</h1>
</head>

<body>
    <form action="index.php">
        <?php
            $nombre = '<p>Nombre: <input type="text" name="nombre" size="40"></p>';
            $fecha = '<p>Fecha de nacimiento: 
                    <input type="date" id="start" name="trip-start"
                    value="2018-07-22"
                    min="1950-01-01" max="2029-12-31">
                    </p>';
            
            $sexo = '<p>Sexo:
                <input type="radio" name="hm" value="h"> Hombre
                <input type="radio" name="hm" value="m"> Mujer
                </p>';
                
?>
        <p>
          <input type="submit" value="Enviar" onClick="funcion($name)">              
        </p>
    </form>
    
    <?php
        // put your code here
        $a = $GLOBALS["name"];
               
        function funcion($a){
            '<p>Hola'.$a.'</p>';
        }
    ?>     
</body>
