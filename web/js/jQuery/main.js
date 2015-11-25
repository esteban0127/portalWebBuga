function eliminar(id,url){
    var confirma = confirm('Deseas eliminar la comida');
  if (confirma === true) {
    // alert('Hay que borrarlo');
    window.location = url + '?id='+id;
  }
}

$(document).ready(function() {
    $(".alert").fadeOut(1500);
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});