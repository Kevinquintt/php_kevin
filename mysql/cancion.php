<div class="col-sm-4">
  <h4>Agrega la cancion</h4>
    <form method="post"

</div>








<?php
    include "conexion.php";

    $sql = "select * from usuario";
    //$sql = "select titulo, autor, fecha, genero
    //from cancion where usuario_nick like "kevin";

    $resultado = $conexion->query($sql);
?>  
<h3>Lista de Canciones</h3>
<table class="table table-striped"> 
  <?php
      if($resultado->num_rows > 0){
        while($fila = $resultado->fetch_assoc()){
          echo "<tr>";
            echo "<td>".$fila["AUTOR"]."</td>";
            echo "<td>".$fila["GENERO"]."</td>";

        }echo{
            echo" Aun no agregaste canciones :(";
        }
  ?>     
</table>