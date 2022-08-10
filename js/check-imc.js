
function comprobarPeso(valor, campo) {
    const alert2 = document.querySelector("#alert-peso");
    var mensaje = "";
    
    if (this.value == "") {
      mensaje = "El peso no puede estar vacío";
      alert2.innerText = mensaje;  
    }else if(this.value =="0"){
        mensaje = "La altura no puede ser 0";
        alert2.innerText = mensaje;
    } 
    
    // mostrar/resetear mensaje (el mensaje se resetea poniendolo a "")
    this.setCustomValidity(mensaje);
    alert2.innerText = mensaje;
  }
  function comprobarAltura(valor, campo) {
    const alert2 = document.querySelector("#alert-altura");
    var mensaje = "";
    
    if (this.value == "") {
         mensaje = "La altura no puede estar vacío";
        alert2.innerText = mensaje;  
    }else if(this.value =="0"){
        mensaje = "La altura no puede ser 0";
        alert2.innerText = mensaje;
    } 
    // mostrar/resetear mensaje (el mensaje se resetea poniendolo a "")
    this.setCustomValidity(mensaje);
    alert2.innerText = mensaje;
  }
  
  const peso = document.querySelector("#peso");
  const altura = document.querySelector("#altura");
  
  
  
  
  
  // cuando se cambie el valor del campo o sea incorrecto, mostrar/resetear mensaje
  
  peso.addEventListener("invalid", comprobarPeso);
  peso.addEventListener("input", comprobarPeso);
  altura.addEventListener("invalid", comprobarAltura);
  altura.addEventListener("input", comprobarAltura);