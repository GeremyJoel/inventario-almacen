function agregar(){
    var pro = document.getElementById("producto").value;
    var cant = document.getElementById('cantidad').value;
    var http = new XMLHttpRequest();
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status== 200){
            mostrar();
            console.log('datos enviados correctamente');
        }
    };
    http.open('POST','../controlador/ctrlSalida.php',true);
    http.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    http.send('producto='+pro+'&cantidad='+cant+'&accion=agregar');
}

function mostrar(){
    var env = new XMLHttpRequest();
    env.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
            document.getElementById('tabla-reg').innerHTML=this.responseText;
        }
    };
    env.open('POST','../controlador/ctrlSalida.php',true);
    env.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    env.send('accion=mostrar');
}
mostrar();