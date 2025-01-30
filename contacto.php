<!DOCTYPE html>
<html>

<body>


<?php
    class contacto
    {
        public $c_nombre;
        public $c_apellidos;
        public $c_edad;
        public function __construct($nombre, $apellidos, $edad)
        {
            $this->c_nombre=$nombre;
            $this->c_apellidos=$apellidos;
            $this->c_edad=$edad;
        }
        
        
        // nombre set get
        public function setNombre ($nombre)
        {
            $this->c_nombre = $nombre;
        }
        public function getNombre ()
        {
            return $this->c_nombre;
        }
        // apellidos set get
        public function setApellidos ($apellidos)
        {
            $this->c_apellidos = $apellidos;
        }
        public function getApellidos ()
        {
            return $this->c_apellidos;
        }
        // edad set get
        public function setEdad ($edad)
        {
            $this->c_edad = $edad;
        }
        public function getedad ()
        {
            return $this->c_edad;
        }
        public function  imprime()
        {
            return "Nombre:" . $this->getNombre() ." ".  $this->getApellidos()." con edad: ". $this->getEdad() . "<br>";
        }
    }
    class ExtContacto extends contacto
    {
        public $ec_telefono;

        public function __construct($nombre, $apellidos, $edad, $telefono)
        {
            parent::__construct($nombre, $apellidos, $edad);
            $this->ec_telefono=$telefono;
        }
        public function  imprime()
        {
            return parent::imprime() ." con télefono: ".  $this->ec_telefono . "<br>";
        }
    }


    // $Contacto1= new contacto;
    // $Contacto2= new contacto;

    // $Contacto1->setNombre("Manolo");
    // $Contacto1->setApellidos("Guerrero Roldán");
    // $Contacto1->setEdad("48");

    // $Contacto2->setNombre("Pepe");
    // $Contacto2->setApellidos("Pérez Roldán");
    // $Contacto2->setEdad("58");
    $Contacto1= new ExtContacto("Manolo","Guerrero Roldán","48","659408595");
    $Contacto2= new ExtContacto("Pepe","Pérez Roldán","68","666666666");
    $a_contactos= array();
    array_push($a_contactos,$Contacto1);
    array_push($a_contactos,$Contacto2);

    echo "<table><tr><th>ID</th><th>Nombre</th><th>apellidos</th><th>edad</th><th>teléfono</th></tr>";
    foreach ($a_contactos as $Contacto) {
        echo "<tr><td>".$Contacto->getNombre() . "</td><td>".$Contacto->getApellidos() ."</td><td>". $Contacto->getEdad() ."</td><td>".  $Contacto->ec_telefono ."</td></tr>";

    }
    echo "</table>";

    // echo "Nombre:" . $Contacto1->getNombre() ." ".  $Contacto1->getApellidos()." con edad: ". $Contacto1->getEdad() . "<br>";
    // echo "Nombre:" . $Contacto2->getNombre() ." ".  $Contacto2->getApellidos()." con edad: ". $Contacto2->getEdad() . "<br>";
    //echo $Contacto1->imprime();
    //echo $Contacto2->imprime();


?>


</body>
</html>
