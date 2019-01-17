function insertTable(){
    $.ajax({
        url:"php/getTable.php",
        }).done(function(arreglo){
            var datos = JSON.parse(arreglo);
            var html = '';
            for(var i in datos){
                html += "<tr><td><img src='img/students/"+datos[i].NumControl+"%20.JPG' style='width:100px; height:auto;'></img></td><td>"+datos[i].NombreAlumno+"</td><td>"+datos[i].NumControl+"</td><td>"+datos[i].NombreTutor+"</td><td>"+'<a href="detalle_alumno.php?nc='+datos[i].NumControl+'&&idmateria='+datos[i].idmateria+'"><i class="fas fa-chalkboard-teacher" style="font-size:40px; color:gray;"></a></i>'+"</td></tr>";
            }
            $('#setTable').html(html);
    });
}

function filtrarMateria(){
    var option = $('#selectMateria').val();
    $.ajax({
        type:"POST",
        url:"php/filterTable.php",
        data:{idmateria:option},
    }).done(function(arreglo){
        var datos = JSON.parse(arreglo);
        var html = '';
        for(var i in datos){
                html += "<tr><td><img src='img/students/"+datos[i].NumControl+"%20.JPG' style='width:100px; height:auto;'></img></td><td>"+datos[i].NombreAlumno+"</td><td>"+datos[i].NumControl+"</td><td>"+datos[i].NombreTutor+"</td><td>"+'<a href="detalle_alumno.php?nc='+datos[i].NumControl+'&&idmateria='+datos[i].idmateria+'"><i class="fas fa-chalkboard-teacher" style="font-size:40px; color:gray;"></a></i>'+"</td></tr>";
        }
        $('#setTable').html(html);

    });

}

function filtrarTutor(){
    var option = $('#selectMateria').val();
    var optionT = $('#selectTutor').val();
    $.ajax({
        type:"POST",
        url:"php/filterTableTutor.php",
        data:{idmateria:option,idtutor:optionT},
    }).done(function(arreglo){
        var datos = JSON.parse(arreglo);
        var html = '';
        for(var i in datos){
                html += "<tr><td><img src='img/students/"+datos[i].NumControl+"%20.JPG' style='width:100px; height:auto;'></img></td><td>"+datos[i].NombreAlumno+"</td><td>"+datos[i].NumControl+"</td><td>"+datos[i].NombreTutor+"</td><td>"+'<a href="detalle_alumno.php?nc='+datos[i].NumControl+'&&idmateria='+datos[i].idmateria+'"><i class="fas fa-chalkboard-teacher" style="font-size:40px; color:gray;"></a></i>'+"</td></tr>";
        }
        $('#setTable').html(html);

    });

}

function guardaObs(obser, id){
    var observacion = $('#'+obser).val();
    var idk = id;
    $.ajax({
        type:"POST",
        url:"php/guardaObs.php",
        data:{idkardex:idk,observacion:observacion, fila:obser},
    }).done(function(arreglo){
        var datos = JSON.parse(arreglo);
        console.log(datos);
        swal(
            'Guardado correctamente!',
            'Tu observación se guardo!',
            'success'
          );
    });

}

//Metodos del módulo del tutor--------------------------------------------------------------------------------------------------------------------------------------------------------------

function insertTableMT(){
    $.ajax({
        url:"php/getTable.php",
        }).done(function(arreglo){
            var datos = JSON.parse(arreglo);
            var html = '';
            for(var i in datos){
                html += "<tr><td><img src='img/students/"+datos[i].NumControl+"%20.JPG' style='width:100px; height:auto;'></img></td><td>"+datos[i].NombreAlumno+"</td><td>"+datos[i].NumControl+"</td><td>"+datos[i].NombreMateria+"</td><td>"+'<a href="detalle_alumno_tutor.php?nc='+datos[i].NumControl+'&&idmateria='+datos[i].idmateria+'"><i class="fas fa-chalkboard-teacher" style="font-size:40px; color:gray;"></a></i>'+"</td></tr>";
            }
            $('#setTable').html(html);
    });
}

function filtrarMateriaMT(){
    var option = $('#selectMateria').val();
    $.ajax({
        type:"POST",
        url:"php/filterTable.php",
        data:{idmateria:option},
    }).done(function(arreglo){
        var datos = JSON.parse(arreglo);
        var html = '';
        for(var i in datos){
                html += "<tr><td><img src='img/students/"+datos[i].NumControl+"%20.JPG' style='width:100px; height:auto;'></img></td><td>"+datos[i].NombreAlumno+"</td><td>"+datos[i].NumControl+"</td><td>"+datos[i].NombreMateria+"</td><td>"+'<a href="detalle_alumno_tutor.php?nc='+datos[i].NumControl+'&&idmateria='+datos[i].idmateria+'"><i class="fas fa-chalkboard-teacher" style="font-size:40px; color:gray;"></a></i>'+"</td></tr>";
        }
        $('#setTable').html(html);

    });

}
function guardaObsT(obser, id){
    var observacion = $('#'+obser).val();
    var idk = id;
    $.ajax({
        type:"POST",
        url:"php/guardaObs.php",
        data:{idkardexT:idk,observacionT:observacion,filaT:obser},
    }).done(function(arreglo){
        var datos = JSON.parse(arreglo);
        console.log(datos);
        swal(
            'Guardado correctamente!',
            'Tu observación se guardo!',
            'success'
          );
    });

}