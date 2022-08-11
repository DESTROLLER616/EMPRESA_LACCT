<?php //!CONSULTA LA BASE DE DATOS PARA HACER LOS COMANDOS CORRESPONDIENTES
    include_once "../../modelo/cliente/cliente_model.php";

    print_r($_REQUEST);
    echo '<br> </br>';
    print_r($_FILES);

    if(isset($_REQUEST['opcion'])){
        $opcion = $_REQUEST['opcion'];
        switch($opcion){
            case 1: //* Crear cliente
                if(isset($_REQUEST['nombre']) && isset($_REQUEST['apellidop']) && isset($_REQUEST['apellidom']) && isset($_REQUEST['telefono']) &&
                isset($_REQUEST['telefono']) && isset($_REQUEST['domicilio']) && isset($_REQUEST['contraseña']) && isset($_REQUEST['email'])){
                    $dia = date("d");
                    $mes = date("m");
                    $año = date("Y");
                    $date = "$dia/$mes/$año";

                    $cliente = new Cliente();
                    $cliente->nombre=$_REQUEST['nombre'];
                    $cliente->apellido_p=$_REQUEST['apellidop'];
                    $cliente->apellido_m=$_REQUEST['apellidom'];
                    $cliente->imagen=$_FILES['foto']['name'];
                    $cliente->telefono=$_REQUEST['telefono'];
                    $cliente->domicilio=$_REQUEST['domicilio'];
                    $cliente->email=$_REQUEST['email'];
                    $cliente->contraseña=$_REQUEST['contraseña'];
                    $cliente->fecha_creacion=$date;
                    $cliente->tipo='CLIENTE';

                    

                    $result = $cliente->create();

                    if($result == 1){
                       header('Location: ../../../Frontend/Vistas/clientes/publico/RC.php?send=false');
                    } else{
                        include_once "./filecliente.php";
                        header('Location: ../../../Frontend/Vistas/clientes/publico/RC.php?send=true');
                    }
                }
                break;
            case 2: //* Editar cliente

                    $cliente = new Cliente();
                    $cliente->id=$_REQUEST['id'];
                    $cliente->nombre=$_REQUEST['nombre'];
                    $cliente->apellido_p=$_REQUEST['apellido_p'];
                    $cliente->apellido_m=$_REQUEST['apellido_m'];
                    $cliente->telefono=$_REQUEST['telefono'];
                    $cliente->imagen=$_FILES['foto']['name'];
                    $cliente->domicilio=$_REQUEST['domicilio'];
                    $cliente->email=$_REQUEST['email'];
                    $cliente->contraseña=$_REQUEST['contraseña'];

                    $result = $cliente->update();

                    if($result == 1){
                        header("Location: ../../../RC.php?estatus=notinserted");
                    } else{
                        include_once "./filecliente.php";
                        header("Location: ../../../RC.php?estatus=inserted");
                    }
                break;
            case 3: //* Borrar cliente
                if(isset($_REQUEST['id'])){
                    $cliente = new Cliente();
                    $cliente->id=$_REQUEST['id'];

                    $cliente->delete();
                    echo 'entro';
                }
                break;
            default: //* Opcion no accesible
                echo 'Opcion no disponible';
                break;
        }
    }
?>