function cargar(){
    var resp = new XMLHttpRequest();
    resp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('tabla-contenido').innerHTML=this.responseText;
        }
    };
    resp.open('POST','../controlador/ctrlFinanciamiento.php',true);
    resp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    resp.send('accion=mostrar');
}

function agregar(){
    var numero = document.getElementsByName("lisa").length+1;
    var importe = document.getElementById("importe").value;
    var nombre = document.getElementById("nombre").value;

    var pos = new XMLHttpRequest();
    pos.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            location.reload(true);
        }
    };
    pos.open('POST','../controlador/ctrlFinanciamiento.php');
    pos.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    pos.send("nombre="+nombre+"&importe="+importe+"&numero="+numero+"&accion=agregar")
}

cargar();