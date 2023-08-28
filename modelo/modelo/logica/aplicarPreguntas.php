<?php

require('controlador/conexionBD/conexionBD.php');
$id_asignacion = $_SESSION['id_asignacion'];
$usuario = $_SESSION['usuario'];
$line = '';


$result =  $conn->query("SELECT pre.pregunta, pre.porcentaje, pre.id_pregunta FROM asignacion as asig 
INNER JOIN grupos as gr ON gr.id_grupo = asig.id_grupo
INNER JOIN evaluaciones as ev ON ev.id_evaluacion = asig.id_evaluacion
INNER JOIN aplicacion as ap ON ap.id_asignacion = asig.id_asignacion
INNER JOIN usuarios as us ON us.id_usuario = ap.id_usuario
INNER JOIN preguntas as pre ON pre.id_evaluacion = ev.id_evaluacion WHERE us.usuario = '$usuario' and asig.id_asignacion = '$id_asignacion'");

    while($obj = $result->fetch_object()){

        ?>
                    <div class="post">
                      <div class="user-block">
                        
                        <span class="username" style="margin-left: 0px !important;">
                          <a href="#"><?php echo $obj->pregunta; ?></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                     <div class="col-md-6">
                        <div class="form-group">
                        <label>Respuesta</label>
                        <select class="form-control select2" name="cmbRespuesta[]" style="width: 100%;">
                        <option value="">Selecciona</option>
                        <option value="Muy de acuerdo">Muy de acuerdo</option>
                        <option value="De acuerdo">De acuerdo</option>
                        <option value="Indeciso">Indeciso</option>
                        <option value="En desacuerdo">En desacuerdo</option>
                        <option value="Muy en desacuerdo">Muy en desacuerdo</option>
                            
                        </select>
                        <input type="text" name="idPregunta[]" value="<?php echo $obj->id_pregunta ?>" style="display: none;">
                        </div>
                      </div>
                    </div>

<?php


    }

?>

