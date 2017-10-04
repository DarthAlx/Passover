<!DOCTYPE html>
<html>
    <head>
        <title>Passover</title>
        <script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    </head>
    <body>
        <div class="container">
          <div id="notificacion">

          </div>
            <div class="content">
                <form class="" id="formulario" action="{{url('/cotizar')}}" method="post">
                  <input type="text" class="form-control" name="nombre" value="" placeholder="Nombre" required>
                  <input type="number" min="0" id="edad" class="form-control" name="edad" value="" placeholder="Edad" required>
                  <input type="text" class="form-control" name="email" value="" placeholder="Correo" required>
                  <label for="habitacion">Que tipo de habitación quieres</label>
                  <select class=""class="form-control" id="habitacion" name="habitacion" value="" required>
                    <option value="">Selecciona</option>
                  </select>
                  <label for="vista">Tipo de vista:</label>
                  <select class=""class="form-control" id="vista" name="vista" value="" required>
                    <option value="">Selecciona</option>
                  </select>
                  <input type="number" id="adultos" class="form-control" name="adultos" min="0" value="" placeholder="Numero de adultos" required>
                  <input type="number" id="ninos" class="form-control" name="niños" min="0" value="" placeholder="Numero de niños" required>
                  <input type="tel" class="form-control" name="tel" value="" placeholder="Teléfono" required>
                  <button type="button" onclick="cotizar()" name="button">Enviar</button>
                </form>
<script type="text/javascript">
//Traer habitaciones
$.getJSON('{{url('/habitaciones')}}',function(data){
        var text= JSON.stringify(data);
        obj = JSON.parse(text);
        var habitacion = document.getElementById("habitacion");
        for (i = 0; i < obj.length; i++) {
          var option = document.createElement("option");
          option.text = obj[i].nombre.toString();
          option.value = obj[i].id.toString();
          habitacion.add(option);
        }
    });

//Traer habitaciones
$.getJSON('{{url('/vistas')}}',function(data){
        var text= JSON.stringify(data);
        obj = JSON.parse(text);
        var vista = document.getElementById("vista");
        for (i = 0; i < obj.length; i++) {
          var option = document.createElement("option");
          option.text = obj[i].nombre.toString();
          option.value = obj[i].id.toString();
          vista.add(option);
        }
    });
</script>
<script type="text/javascript">
function cotizar(){

  adultos=parseInt(document.getElementById("adultos").value);
  ninos=parseInt(document.getElementById("ninos").value);
  personas=adultos+ninos;
  edad = parseInt(document.getElementById("edad").value);
  habitacion = parseInt(document.getElementById("habitacion").value);
alert(personas);
  if (habitacion==1) {//single room
    if (personas>1) {
      notificacion="Error: Esta habitación es para una sola persona.";
      document.getElementById("notificacion").innerHTML="<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+notificacion+"</div>";
    }
    else {

      document.getElementById("formulario").submit();
    }
  }
  if (habitacion==2) {//double room
    if (personas>2) {
      notificacion="Error: Esta habitación es para dos personas.";
      document.getElementById("notificacion").innerHTML="<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+notificacion+"</div>";
    }
    else {
      document.getElementById("formulario").submit();
    }
  }
  if (habitacion==3) {//adult sharing
    if (adultos>4) {
      notificacion="Error: Esta habitación es solo para cuatro personas.";
      document.getElementById("notificacion").innerHTML="<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+notificacion+"</div>";
    }
    else if (ninos>0) {
      notificacion="Error: Esta habitación es solo para mayores de 18 años.";
      document.getElementById("notificacion").innerHTML="<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+notificacion+"</div>";
    }
    else {

      document.getElementById("formulario").submit();
    }
  }
  if (habitacion==4) {//jr sharing
    if (ninos>3) {
      notificacion="Error: Esta habitación es solo para tres personas.";
      document.getElementById("notificacion").innerHTML="<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+notificacion+"</div>";
    }
    else if (adultos>0) {
      notificacion="Error: Esta habitación es solo para personas entre 12 y 17 años.";
      document.getElementById("notificacion").innerHTML="<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+notificacion+"</div>";
    }
    else {

      document.getElementById("formulario").submit();
    }
  }

  if (habitacion==5) {//kids sharing
    if (ninos>3) {
      notificacion="Error: Esta habitación es solo para tres personas.";
      document.getElementById("notificacion").innerHTML="<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+notificacion+"</div>";
    }
    else if (adultos>0) {
      notificacion="Error: Esta habitación es solo para personas entre 3 y 11 años.";
      document.getElementById("notificacion").innerHTML="<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+notificacion+"</div>";
    }
    else {
      document.getElementById("formulario").submit();
    }
  }

  if (habitacion==6) {//extra room kids
    if (ninos>3) {
      notificacion="Error: Esta habitación es solo para tres personas.";
      document.getElementById("notificacion").innerHTML="<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+notificacion+"</div>";
    }
    else if (adultos>0) {
      notificacion="Error: Esta habitación es solo para menores de edad.";
      document.getElementById("notificacion").innerHTML="<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+notificacion+"</div>";
    }
    else {
      document.getElementById("formulario").submit();
    }
  }

  if (habitacion==7) {//extra night
    if (ninos>3) {
      notificacion="Esta habitación solo puede alojar tres menores.";
      document.getElementById("notificacion").innerHTML="<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+notificacion+"</div>";
    }
    else if (adultos>2) {
      notificacion="Error: Esta habitación solo puede alojar dos adultos.";
      document.getElementById("notificacion").innerHTML="<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+notificacion+"</div>";
    }
    else {
      document.getElementById("formulario").submit();
    }
  }


}

</script>

















            </div>
        </div>
    </body>
</html>
