function calcularIMC() {
  //declaracion de variables
  var peso, altura, imc, resultado;
  //obtencion de datos desde el formulario en html
  peso = document.getElementById("peso").value;
  altura = document.getElementById("altura").value/100;
  //calculo del imc segun el peso y la altura
  imc = peso/(altura*altura);
  console.log("si jala bro");
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
  document.getElementById("resultado").innerHTML = resultado + ", tu IMC es " +imc.toFixed(2);

  }