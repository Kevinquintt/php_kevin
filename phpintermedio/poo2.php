<?php
    class Persona{
        public $nombre;
        public $telefono;

        public function __construct($nomb, $tel){
            $this->nombre = $nomb;
            $this->telefono = $tel;
        }

        public function obtener_datos(){
            return "Nombre: ".$this->nombre." Telefono: ".$this->telefono;
        }
    }
    class Alumno extends Persona{
        private $grado;
        private $turno;

        public function __construct($nomb, $tel, $grado, $turno){
            parent::__construct($nomb, $tel);
            $this->grado = $grado;
            $this->turno = $turno;
        }

        public function obtener_datos(){
            return parent::obtener_datos()." Grado: ".$this->grado." Turno: ". $this->turno;
        }
    }
?>
<h3>Formulario de Datos</h3>
<?php
$alumno[0] = new Alumno("Camila","0961123466","Tercero - Nivel Medio","Tarde");
$alumno[1] = new Alumno("Manucho","0961123466","Tercero - Nivel Akane","Noche");
$alumno[2] = new Alumno("Keviño","0976534234","Tercero - Nivel experto", "Mañana");
?>
<h3> Alumnos</h3>
<?php
foreach($alumno as $alu){
    echo $alu->obtener_datos();
    echo "<hr>";
}
    #echo $alumno1->obtener_datos();
 ?>
 