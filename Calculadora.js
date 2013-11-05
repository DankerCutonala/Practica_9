
function Suma(){
var n1= document.getElementById("n1").value;
var n2= document.getElementById("n2").value;
var resultado= (parseInt(n1)+parseInt(n2));

alert(resultado);
}

function Resta(){
var n1= document.getElementById("n1").value;
var n2= document.getElementById("n2").value;
var resultado= (parseInt(n1)-parseInt(n2));

alert(resultado);
}

function Multiplicacion(){
var n1= document.getElementById("n1").value;
var n2= document.getElementById("n2").value;
var resultado= (parseInt(n1)*parseInt(n2));

alert(resultado);
}


function Division(){
var n1= document.getElementById("n1").value;
var n2= document.getElementById("n2").value;
var resultado= (parseInt(n1)/parseInt(n2));

alert(resultado);
}

function validar(e) {
    tecla = (document.all)?e.keyCode:e.which;
    patron = /\d/;
    te = String.fromCharCode(tecla);
    return patron.test(te); 
} 
