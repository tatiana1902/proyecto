// Verificar Inicio de sesión
$("#frmLogin").submit(function(e) {
    e.preventDefault(); 

    var form = $(this);
    var actionUrl = 'modelo/logica/login.php';
    
    $.ajax({
        type: "POST",
        url: actionUrl,
        data: form.serialize(), 
        dataType: 'json',
        success: function(data)
        {
          if(data.resultado){
            $('#resultado').html('Iniciando sesión');
            setTimeout(() => {
              location.href = "index.php";
            }, 2000);
            
          }else{
            $('#resultado').html('Usuario o contraseña incorrectos');
          }
          
        }
    });
    
});

// Auto registro
$("#frmRegistro").submit(function(e) {
  e.preventDefault(); 

  var form = $(this);
  var actionUrl = 'modelo/logica/registrarEstudiante.php';
  
  $.ajax({
      type: "POST",
      url: actionUrl,
      data: form.serialize(), 
      dataType: 'json',
      success: function(data)
      {
        if(data.resultado){
          $('#resultado').html('El estudiante ya existe');  
          setTimeout(() => {
            location.reload();
          }, 2000);
                
        }else{
          $('#resultado').html('Estudiante creado con exito');
          setTimeout(() => {
            location.href = "index.php";
          }, 2000);
        }
        
      }
  });
  
});

// Registrar Porfesor
$("#frmRegistrarProfesor").submit(function(e) {
  e.preventDefault(); 

  var form = $(this);
  var actionUrl = 'modelo/logica/registrarProfesor.php';
  
  $.ajax({
      type: "POST",
      url: actionUrl,
      data: form.serialize(), 
      dataType: 'json',
      success: function(data)
      {
        if(data.resultado){
          toastr.error('El profesor ya existe');
        }else{
          toastr.success('Registro exitoso, actualizando listado...');
          setTimeout(() => {
            location.reload();
          }, 2000);
        }
        
      }
  });
  
});


// Registrar Estudiante
$("#frmRegistrarEstudiante").submit(function(e) {
  e.preventDefault(); 

  var form = $(this);
  var actionUrl = 'modelo/logica/registrarEstudiante.php';
  
  $.ajax({
      type: "POST",
      url: actionUrl,
      data: form.serialize(), 
      dataType: 'json',
      success: function(data)
      {
        if(data.resultado){
          toastr.error('El estudiante ya existe')
        }else{
          toastr.success('Registro exitoso, actualizando listado...');
          setTimeout(() => {
            location.reload();
          }, 2000);
        }
        
      }
  });
  
});

// Registrar Grupo
$("#frmRegistrarGrupo").submit(function(e) {
  e.preventDefault(); 

  var form = $(this);
  var actionUrl = 'modelo/logica/registrarGrupo.php';
  
  $.ajax({
      type: "POST",
      url: actionUrl,
      data: form.serialize(), 
      dataType: 'json',
      success: function(data)
      {
        if(data.resultado){
          toastr.error('El grupo ya existe')
        }else{
          toastr.success('Registro exitoso, actualizando listado...');
          setTimeout(() => {
            location.reload();
          }, 2000);
        }
        
      }
  });
  
});


// Modificar Estudiante
$("#frmModificarEstudiante").submit(function(e) {
  e.preventDefault(); 

  var form = $(this);
  var actionUrl = 'modelo/logica/modificarEstudiante.php';
  
  $.ajax({
      type: "POST",
      url: actionUrl,
      data: form.serialize(), 
      dataType: 'json',
      success: function(data)
      {
        if(data.resultado){
          toastr.error('El estudiante ya existe')
        }else{
          toastr.success('Modificación exitosa, actualizando listado...');
          setTimeout(() => {
            location.reload();
          }, 2000);
          
        }
        
      }
  });
  
});

// Modificar Profesor
$("#frmModificarProfesor").submit(function(e) {
  e.preventDefault(); 

  var form = $(this);
  var actionUrl = 'modelo/logica/modificarProfesor.php';
  
  $.ajax({
      type: "POST",
      url: actionUrl,
      data: form.serialize(), 
      dataType: 'json',
      success: function(data)
      {
        if(data.resultado){
          toastr.error('El profesor ya existe')
        }else{
          toastr.success('Modificación exitosa, actualizando listado...');
          setTimeout(() => {
            location.reload();
          }, 2000);
          
        }
        
      }
  });
  
});


// Modificar Grupo
$("#frmModificarGrupo").submit(function(e) {
  e.preventDefault(); 

  var form = $(this);
  var actionUrl = 'modelo/logica/modificarGrupo.php';
  
  $.ajax({
      type: "POST",
      url: actionUrl,
      data: form.serialize(), 
      dataType: 'json',
      success: function(data)
      {
        if(data.resultado){
          toastr.error('El grupo ya existe')
        }else{
          toastr.success('Modificación exitosa, actualizando listado...');
          setTimeout(() => {
            location.reload();
          }, 2000);
          
        }
        
      }
  });
  
});


// Eliminar Profesor
$("#frmEliminarProfesor").submit(function(e) {
  e.preventDefault(); 

  var form = $(this);
  var actionUrl = 'modelo/logica/eliminarProfesor.php';
  
  $.ajax({
      type: "POST",
      url: actionUrl,
      data: form.serialize(), 
      dataType: 'json',
      success: function(data)
      {
        if(data.resultado){
          toastr.error('Error, no se pudo eliminar el profesor')
        }else{
          toastr.success('Eliminación exitosa, actualizando listado...');
          setTimeout(() => {
            location.reload();
          }, 2000);
          
        }
        
      }
  });
  
});


// Eliminar estudiante
$("#frmEliminarEstudiante").submit(function(e) {
  e.preventDefault(); 

  var form = $(this);
  var actionUrl = 'modelo/logica/eliminarEstudiante.php';
  
  $.ajax({
      type: "POST",
      url: actionUrl,
      data: form.serialize(), 
      dataType: 'json',
      success: function(data)
      {
        if(data.resultado){
          toastr.error('Error, no se pudo eliminar el estudiante')
        }else{
          toastr.success('Eliminación exitosa, actualizando listado...');
          setTimeout(() => {
            location.reload();
          }, 2000);
          
        }
        
      }
  });
  
});

// Eliminar asignacion
$("#frmEliminarAsignacion").submit(function(e) {
  e.preventDefault(); 

  var form = $(this);
  var actionUrl = 'modelo/logica/eliminarAsignacion.php';
  
  $.ajax({
      type: "POST",
      url: actionUrl,
      data: form.serialize(), 
      dataType: 'json',
      success: function(data)
      {
        if(data.resultado){
          toastr.error('Error, no se pudo eliminar la asignación')
        }else{
          toastr.success('Eliminación exitosa, actualizando listado...');
          setTimeout(() => {
            location.reload();
          }, 2000);
          
        }
        
      }
  });
  
});


// Asignar evaluacion
$(".frmAsignarEvaluacion").submit(function(e) {
  e.preventDefault(); 

  var form = $(this);
  var actionUrl = 'modelo/logica/asignarEvaluacion.php';
  
  $.ajax({
      type: "POST",
      url: actionUrl,
      data: form.serialize(), 
      dataType: 'json',
      success: function(data)
      {
        if(data.resultado){
          toastr.error('El grupo ya tiene esta evaluación');
        }else{
          toastr.success('Se asignó la evaluación, actualizando listado...');
          setTimeout(() => {
            location.reload();
          }, 2000);
          
        }
        
      }
  });
  
});


// Guardar respuestas
$(".frmRespuestas").submit(function(e) {
  e.preventDefault(); 
  $('.btnFinalizarEvaluacion').css('display', 'none');
  $('.btnFinalizarEvaluacion2').css('display', 'block');
  var form = $(this);
  var actionUrl = 'modelo/logica/guardarRespuestas.php';
  
  $.ajax({
      type: "POST",
      url: actionUrl,
      data: form.serialize(), 
      dataType: 'json',
      success: function(data)
      {
        if(data.resultado){
          toastr.error('Ya se guardo las respuestas, no se pueden actualizar');
        }else{
          toastr.success('Guardando respuestas...');
          setTimeout(() => {
            location.reload();
          }, 2000);
          
        }
        
      }
  });
  
});


// Aplicar filtro
$(".frmFiltrar").submit(function(e) {
  e.preventDefault(); 
 
  var form = $(this);
  var actionUrl = 'modelo/logica/aplicarFiltro.php';
  
  $.ajax({
      type: "POST",
      url: actionUrl,
      data: form.serialize(), 
      dataType: 'json',
      success: function(data)
      {
        if(data.resultado){
          toastr.error('No se pudo aplicar el filtro');
        }else{
          toastr.success('Aplicando filtro...');
          setTimeout(() => {
            location.reload();
          }, 2000);
          
        }
        
      }
  });
  
});


//Editar estudiante
$('.ediarEstudiante').on('click', function(){
  
  $('#nombreEstudiante').html($(this).data('nombre'));
  $('#idUsuario').val($(this).attr('id'));
  $('#modal-registrarEstudiante').modal();

});


//Editar profesor
$('.ediarProfesor').on('click', function(){
  
  $('#nombreProfesor').html($(this).data('nombre'));
  $('#idUsuario').val($(this).attr('id'));
  $('#modal-registrarProfesor').modal();

});

//Editar Grupo
$('.editarGrupo').on('click', function(){
  
  $('#nombreGrupo').html($(this).data('nombre'));
  $('#idGrupo').val($(this).attr('id'));
  $('#modal-modificarGrupo').modal();

});

//Eliminar estudiante
$('.eliminarEstudiante').on('click', function(){
  
  $('#nombreEstudianteEliminar').html($(this).data('nombre'));
  $('#idUsuarioEliminar').val($(this).attr('id'));
  $('#modal-eliminarEstudiante').modal();

});

//Eliminar profesor
$('.eliminarProfesor').on('click', function(){
  
  $('#nombreProfesorEliminar').html($(this).data('nombre'));
  $('#idUsuarioEliminar').val($(this).attr('id'));
  $('#modal-eliminarProfesor').modal();

});

//Eliminar asignacion
$('.eliminarAsignacion').on('click', function(){
  
  $('#nombreGrupoEliminarAsignacion').html($(this).data('nombre'));
  $('#idAsignacion').val($(this).attr('id'));
  $('#modal-eliminarAsignacion').modal();

});

//Aplicar Evaluacion
$('.aplicarEvaluacion').on('click', function(){

  var parametros = {
    "id_asignacion" : $(this).attr('id'),
  };
  $.ajax({
    data:  parametros, //datos que se envian a traves de ajax
    url:   'modelo/logica/aplicarEvaluacion.php', //archivo que recibe la peticion
    type:  'post', //método de envio
    dataType: 'json',
    beforeSend: function () {
            
    },
    success:  function (data) { //una vez que el archivo recibe el request lo procesa y lo devuelve
      if(data.resultado){
        toastr.error('Error no se pudo aplicar la evaluación intente de nuevo');
      }else{
        toastr.success('Aplicando evaluación...');
        setTimeout(() => {
          location.reload();
        }, 2000);
        
      }
    }
});


});


$('.clicmenu').on('click', function(){
  var pagina = $(this).attr('id');
  $.ajax({
    url: 'controlador/modificar.php',
    method: "GET",
    async: false,
    data: {ubica: pagina},
    success: function(respuesta) {
      location.href = "index.php";
}
});
});



