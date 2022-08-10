function comprobarNombre(valor, campo) {
    
    const alert2 = document.querySelector("#alert-form");
    var mensaje = "";
    
    if (this.value == "") {
      mensaje = "El email no puede estar vacío";
      alert2.innerText = mensaje;  
    } else if (this.value.indexOf("@") < 0) {
      mensaje = "El email debe contener una @";
      alert2.innerText = mensaje;  
    } else if (this.value.indexOf(".com", this.value.indexOf("@")) < 0) {
      mensaje = "El email debe contener .com detras de la @";
      alert2.innerText = mensaje;  
    } 
    
    // mostrar/resetear mensaje (el mensaje se resetea poniendolo a "")
    this.setCustomValidity(mensaje);
    alert2.innerText = mensaje;
  }

  function comprobarUsuario(valor, campo) {
    
    const alert2 = document.querySelector("#alert-form3");
    var mensaje = "";
    
    if (this.value == "") {
      mensaje = "El url no puede estar vacío";
      alert2.innerText = mensaje;  
    }
    // mostrar/resetear mensaje (el mensaje se resetea poniendolo a "")
    this.setCustomValidity(mensaje);
    alert2.innerText = mensaje;
  }

  
  
  
  const usuario = document.querySelector("#txt-url");
  
  
  
  
  
  // cuando se cambie el valor del campo o sea incorrecto, mostrar/resetear mensaje
  
  usuario.addEventListener("invalid", comprobarUsuario);
  usuario.addEventListener("input", comprobarUsuario);