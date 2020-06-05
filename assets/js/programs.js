function cargar(){
    var resp = new XMLHttpRequest();
    resp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('tabla-contenido').innerHTML=this.responseText;
        }
    };
    resp.open('POST','../controlador/ctrlPrograma.php',true);
    resp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    resp.send('accion=mostrar');
}
function addProgram(){
    var nombre = document.getElementById("nombre").value;
    var importe = document.getElementById("importe").value;
    var numero = document.getElementById("numero").value;

    var env = new XMLHttpRequest();
    env.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            location.reload(true);
        }
    };
        env.open("POST",'../controlador/ctrlPrograma.php',true);
        env.setRequestHeader('Content-type','application/x-www-form-urlencoded');
        env.send("nombre="+nombre+"&importe="+importe+"&numero="+numero+"&accion=agregar");
    
}
cargar();