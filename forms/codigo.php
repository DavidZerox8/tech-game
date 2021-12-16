<?php
    
    $con = mysqli_connect("127.0.0.1", "u526744503_root", "L]p6c1G/a3", "u526744503_tech");
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
   
    $codigo = $_POST['codigo'];
    $consulta = "select * from codigo where codigo = '$codigo'";
    $query = mysqli_query($con,$consulta);

    if($query){
        $count = mysqli_num_rows($query);
        foreach ($query as $r):
            $estatus = $r['estado'];
        endforeach;
        if($count == 1 and $estatus == "Entregado"){
            
            $eliminar = "Update codigo set estado = 'Canjeado' where codigo = '$codigo'";
            $ex = mysqli_query($con,$eliminar);
            if($ex){
                echo 1;
            }            
        }
        
        elseif($count == 1 and $estatus == "Canjeado"){
            echo 2;
        }
        
        else{
            echo 0;
        }
    }

?>
