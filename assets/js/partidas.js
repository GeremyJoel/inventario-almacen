function cargar(){
    var resp = new XMLHttpRequest();
    resp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('tabla-content').innerHTML=this.responseText;
        }
    };
    resp.open('POST','../controlador/ctrlPartida.php',true);
    resp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    resp.send('accion=mostrar');
}

function addPartida(){
    var nombre = document.getElementById("nombre").value;
    var numero = document.getElementById("numero").value;

    var env = new XMLHttpRequest();
    env.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            location.reload(true);
        }
    };
        env.open("POST",'../controlador/ctrlPartida.php',true);
        env.setRequestHeader('Content-type','application/x-www-form-urlencoded');
        env.send("nombre="+nombre+"&numero="+numero+"&accion=agregar");
    
}

function delPar(v){
    var valor = v;

    var env = new XMLHttpRequest();
    env.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            location.reload(true);
        }
    };
        env.open("POST",'../controlador/ctrlPartida.php',true);
        env.setRequestHeader('Content-type','application/x-www-form-urlencoded');
        env.send("valor="+valor+"&accion=eliminar");
}
cargar();