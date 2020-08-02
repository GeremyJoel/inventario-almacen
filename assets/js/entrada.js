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
    var partida = document.getElementById("partida").value;
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
    envia.send('folio='+folio+'&tipo='+tipo+'&programa='+programa+'&lote='+lote+'&fuente='+fuente+'&cantidad='+cantidad+'&costo='+costo+'&producto='+producto+'&fecha='+fecha+'&partida='+partida+'&accion=agregar');
}

function setEntrada(id){
    var idE = id;
    var folio = document.getElementById("Efolio").value;
    var tipo = document.getElementById("Etipo").value;
    var programa = document.getElementById("Eprograma").value;
    var lote = document.getElementById("Elote").value;
    var fuente = document.getElementById("Efuente").value;
    var cantidad = document.getElementById("Ecantidad").value;
    var costo = document.getElementById("Ecosto").value;
    var producto = document.getElementById("Eproducto").value;
    var fecha = document.getElementById("Efecha").value;
    var pro = document.getElementById("Eproducto");
    var prod =pro.options[pro.selectedIndex].text;
    

    var envia = new XMLHttpRequest();
    envia.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("mostrar_entradas").innerHTML='<div class="alert alert-primary" role="alert">Se edito Correctamente '+prod+'</div>';
            location.reload(true);
        }
    };
    envia.open('POST','../controlador/ctrlEntrada.php');
    envia.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    envia.send('id='+idE+'&folio='+folio+'&tipo='+tipo+'&programa='+programa+'&lote='+lote+'&fuente='+fuente+'&cantidad='+cantidad+'&costo='+costo+'&producto='+producto+'&fecha='+fecha+'&accion=editar');
}

function delen(n){
    var val = n;
    var con = new XMLHttpRequest();
    con.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            location.reload(true);
        }
    };
    con.open('POST','../controlador/ctrlEntrada.php');
    con.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    con.send('valor='+val+'&accion=del');
}

cargar();