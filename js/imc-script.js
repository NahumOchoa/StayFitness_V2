function calcularIMC() {

  var peso, altura, imc, resultado;
  peso = document.getElementById("peso").value;
  altura = document.getElementById("altura").value/100;
  imc = peso/(altura*altura);

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
  document.getElementById("resultado").value = resultado + ", tu IMC es " +imc.toFixed(2);

  }