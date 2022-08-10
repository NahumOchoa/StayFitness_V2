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
function comprobarPassword(valor, campo) {
    
    const alert2 = document.querySelector("#alert-form2");
    var mensaje = "";
    
    if (this.value == "") {
      mensaje = "El password no puede estar vacío";
      alert2.innerText = mensaje;  
    } else if (this.value.length < 8) {
      mensaje = "El password debe tener al menos 8 caracteres";
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
      mensaje = "El usuario no puede estar vacío";
      alert2.innerText = mensaje;  
    }
    // mostrar/resetear mensaje (el mensaje se resetea poniendolo a "")
    this.setCustomValidity(mensaje);
    alert2.innerText = mensaje;
  }

  function comprobarEdad(valor, campo) {
    
    const alert2 = document.querySelector("#alert-form4");
    var mensaje = "";
    
    if (this.value == "") {
      mensaje = "La edad no puede estar vacío";
      alert2.innerText = mensaje;  
    }
    // mostrar/resetear mensaje (el mensaje se resetea poniendolo a "")
    this.setCustomValidity(mensaje);
    alert2.innerText = mensaje;
  }
  if(document.querySelector("#txt-email")===null){
    
  }else{
    const email = document.querySelector("#txt-email");
    email.addEventListener("invalid", comprobarNombre);
    email.addEventListener("input", comprobarNombre);
  }
  if(document.querySelector("#txt-age")===null){
    
  }else{
    const email = document.querySelector("#txt-age");
    email.addEventListener("invalid", comprobarEdad);
    email.addEventListener("input", comprobarEdad);
  }
  
  const password = document.querySelector("#txt-password");
  const usuario = document.querySelector("#txt-name");
  
  
  
  
  
  // cuando se cambie el valor del campo o sea incorrecto, mostrar/resetear mensaje
  
  password.addEventListener("invalid", comprobarPassword);
  password.addEventListener("input", comprobarPassword);
  usuario.addEventListener("invalid", comprobarUsuario);
  usuario.addEventListener("input", comprobarUsuario);