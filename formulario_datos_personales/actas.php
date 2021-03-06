<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aAlumno = array();
$aAlumno[] = array("alumno" => "Juan Perez", "nota" => 9, 8);
$aAlumno[] = array("alumno" => "Ana Valle", "nota" => 4, 9);
$aAlumno[] = array("alumno" => "Gonzalo Roldán", "nota" => 7, 6);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Actas</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Actas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Alumno</th>
                            <th>Nota1</th>
                            <th>Nota2</th>
                            <th>Promedio</th>
                        </tr>    
                    </thead>
                    <tbody>
                        <?php foreach($aAlumno as $alumno) : ?>
                            <tr>
                                <td><?php echo $alumno["alumno"]; ?></td>                                   
                                <td><?php echo $alumno["nota"]; ?></td>                                   
                                <td><?php echo $alumno["nota"]; ?></td>

                                <?php function promediar($aAlumno) {
                                        $suma = 0;
                                        foreach ($aAlumno as $alumno) {
                                        $suma += $alumno;
                                    }
                                        return $suma / count($aAlumno);
                                    }?>
                                <td><?php echo promediar($alumno("nota")); ?></td>                                                                                     
                            </tr> 
                        <?php endforeach?>                                      
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    
</body>
</html>
