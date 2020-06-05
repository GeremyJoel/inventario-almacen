function inicio(){
  xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    document.getElementById("lista-productos").innerHTML = this.responseText;
  }
};
xhttp.open("POST", "../controlador/ctrlProducto.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("accion=mostrar");

}

function eliminarDato(id){
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      location.reload();
    }
  };
  xhttp.open("POST", "  ../controlador/ctrlProducto.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("accion=borrar&id="+id);
}

inicio();