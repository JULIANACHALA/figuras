<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
</head>
<body>
    <from action="Tratamiento-datos.php" method="post">
        <input type="radio" name="figura"value="circulo" checkd>circulo <br/>
        <input type="radio" name="figura"value="cuadrado"> cuadrado <br/>
        <input type="radio" name="figura"value="trianagulo">triangulo <br/>
        
        <br/>
        <label for=" radio">radio</label>
        <input type="number" id="radio" name="radio"/>

        <br/>
        <label for=" lado">lado</label>
        <input type="number" id="lado" name="lado"/>

        <br/>
        <label for=" base">base</label>
        <input type="number" id="base" name="base"/>


        <br/>
        <label for=" altura">altura</label>
        <input type="number" id="altura" name="altura"/>

        <br/>
        <input type="submit" />
    </from>

</body>
</html>