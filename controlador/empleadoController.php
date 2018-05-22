<?php


require_once('../modelos/empleado.php');



class empleadoController {


    private $empleado;


    public function __CONSTRUCT()
    {
    }

    public function insertarEmpleadoController()
    {
        $this->empleado = new Empleado();
        $nombres = $_POST['primernombreEmpleado'].' ' .$_POST['segundonombreEmpleado'];
        $apellidos = $_POST['apellidosEmpleado'];
        $TipoDocumentoEmpleado = $_POST['TipoDocumentoEmpleado'];
        $documentoEmpleado = $_POST['documentoEmpleado'];
        $nacimientoEmpleado = $_POST['nacimientoEmpleado'];
        $direccionEmpleado = $_POST['direccionEmpleado'];
        $lugarnacimientoEmpleado = $_POST['lugarnacimientoEmpleado'];
        $expedocEmpleado = $_POST['expedocEmpleado'];
        $emailempleado = $_POST['emailempleado'];
        $nacionalidadEmpleado = $_POST['nacionalidadEmpleado'];
        $rol = $_POST['rolEmpleado'];

        $this->empleado->insertarEmpleado($nombres,$apellidos,$lugarnacimientoEmpleado,$TipoDocumentoEmpleado,$expedocEmpleado,$nacionalidadEmpleado,$direccionEmpleado,$emailempleado,$nacimientoEmpleado,$documentoEmpleado,$rol);
    }

    public function getEmpleados()
    {
        $this->empleado = new Empleado();

        return $this->empleado->getEmpleados();
    }


    public function getEmpleadoByIdController($ID)
    {
      $this->empleado = new Empleado();

      return $this->empleado->getEmpleadoById($ID);
    }

    public function editarEmpleadoEstudiosController($id,$instituto,$titulo,$fecha)
    {
        $this->empleado = new Empleado();
        $this->empleado->editarEmpleadoEstudios($id,$instituto,$titulo,$fecha);
    }

    public function getRolEmpleadoController($ID)
    {
        $this->empleado = new Empleado();
        return $this->empleado->getRolEmpleado($ID);
    }

    public function editarEmpleadoExamenes($id,$entidad,$dictamen,$fecha,$telefono,$direccion,$observacionExamen)
    {
        $this->empleado = new Empleado();   
        $this->empleado->editarEmpleadoExamenes($id,$entidad,$dictamen,$fecha,$telefono,$direccion,$observacionExamen);
    }

    public function getPensionController()
    {
        $this->empleado = new Empleado();
        return $this->empleado->getPension();
    }

    public function actualizarPensionController($id_empleado , $id_empresa)
    {
        $this->empleado = new Empleado();
        $this->empleado->actualizarPension($id_empleado,$id_empresa);
    }

    public function editarEmpleadoController($id,$nombres,$apellidos,$documento,$direccion,$lugarnacimiento,$email,$nacimientoEmpleado)
    {
        $this->empleado = new Empleado();
        $this->empleado->editarEmpleado($id,$nombres,$apellidos,$documento,$direccion,$lugarnacimiento,$email,$nacimientoEmpleado);
    }

}

$controller = new empleadoController();
if(isset($_POST['primernombreEmpleado'])!=null && $_POST['registroEmpleadoH']==11){
    // echo "true";
    $controller->insertarEmpleadoController();
}



?>
