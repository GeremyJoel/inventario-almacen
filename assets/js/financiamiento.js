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
    var nombre = document.getElementById("nombre").value;

    var pos = new XMLHttpRequest();
    pos.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            location.reload(true);
        }
    };
    pos.open('POST','../controlador/ctrlFinanciamiento.php');
    pos.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    pos.send("nombre="+nombre+"&numero="+numero+"&accion=agregar");
}

function delFin(valor){
    var v = valor;
    var env = new XMLHttpRequest();
    env.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            location.reload(true);
        }
    };
    env.open('POST','../controlador/ctrlFinanciamiento.php');
    env.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    env.send("valor="+v+"&accion=eliminar");
}
cargar();