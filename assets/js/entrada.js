function cargar(){
    var emp = new XMLHttpRequest();
    emp.onreadystatechange = function(){
        if(this.readyState== 4 && this.status == 200){
            document.getElementById("mostrar").innerHTML=this.responseText;
        }
    };
    emp.open('POST','../controlador/ctrlEntrada.php');
    emp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    emp.send('accion=listar');
}

function addEntrada(){
    var folio = document.getElementById("folio").value;
    var tipo = document.getElementById("tipo").value;
    var programa = document.getElementById("programa").value;
    var lote = document.getElementById("lote").value;
    var fuente = document.getElementById("fuente").value;
    var cantidad = document.getElementById("cantidad").value;
    var costo = document.getElementById("costo").value;
    var producto = document.getElementById("producto").value;
    var fecha = document.getElementById("fecha").value;
    var pro = document.getElementById("producto");
    var prod =pro.options[pro.selectedIndex].text;
    

    var envia = new XMLHttpRequest();
    envia.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("mostrar_entradas").innerHTML='<div class="alert alert-primary" role="alert">Se agrego Correctamente '+prod+'</div>';
            cargar();
        }
    };
    envia.open('POST','../controlador/ctrlEntrada.php');
    envia.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    envia.send('folio='+folio+'&tipo='+tipo+'&programa='+programa+'&lote='+lote+'&fuente='+fuente+'&cantidad='+cantidad+'&costo='+costo+'&producto='+producto+'&fecha='+fecha+'&accion=agregar');
}

cargar();