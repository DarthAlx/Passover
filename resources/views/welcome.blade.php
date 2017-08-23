<!DOCTYPE html>
<html>
    <head>
        <title>Passover</title>
        <script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form class="" action="{{url('/cotizar')}}" method="post">
                  {!! csrf_field() !!}
                  <input type="text" class="form-control" name="nombre" value="" placeholder="Nombre" required>
                  <input type="number" min="0" class="form-control" name="edad" value="" placeholder="Edad" required>
                  <input type="text" class="form-control" name="email" value="" placeholder="Correo" required>
                  <label for="habitacion">Que tipo de habitación quieres</label>
                  <select class=""class="form-control" id="habitacion" name="habitacion" value="" required>
                    <option value="">Selecciona</option>
                  </select>
                  <label for="vista">Tipo de vista:</label>
                  <select class=""class="form-control" id="vista" name="vista" value="" required>
                    <option value="">Selecciona</option>
                  </select>
                  <input type="number" class="form-control" name="adultos" min="0" value="" placeholder="Numero de adultos" required>
                  <input type="number" class="form-control" name="niños" min="0" value="" placeholder="Numero de niños" required>
                  <input type="tel" class="form-control" name="tel" value="" placeholder="Teléfono" required>
                  <input type="submit" name="Enviar" value="Enviar">
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

















            </div>
        </div>
    </body>
</html>
