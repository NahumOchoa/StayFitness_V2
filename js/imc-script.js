function calcularIMC() {
  //declaracion de variables
  var peso, altura, imc, resultado;
  //obtencion de datos desde el formulario en html
  peso = document.getElementById("peso").value;
  altura = document.getElementById("altura").value/100;
  boton = document.getElementById("guardar2");
  //calculo del imc segun el peso y la altura
  imc = peso/(altura*altura);
  
  //condiciones del resultado de imc
  if(imc <= 18.5){
    resultado = "Bajo peso";
  }else if(imc >= 25 && imc <= 29.9){
    resultado = "Sobrepeso";
  }else if(imc >= 30){
    resultado = "Obesidad";
  }
  else{
    resultado = "Peso normal";
  }
  //mostrar los datos obtenidos
  if(imc.toFixed(2) === "NaN" | imc.toFixed(2) === "Infinity" | imc.toFixed(2) === "0" | imc.toFixed(2) === ""){
   
    
    boton.disabled = true;
  }else{
    boton.disabled = false;
    document.getElementById("resultado").value = resultado +", tu IMC es "+imc.toFixed(2);
    document.getElementById("resultado2").innerHTML = resultado +", tu IMC es "+imc.toFixed(2);
  }

  }