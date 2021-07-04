const formulario = document.getElementById('formulario'); //constante usada para el evento botón Enviar
const intputs = document.querySelectorAll('#formulario input'); //constante usada para hacer eventos en los inputs del formulario

/** Expresiones Regulares */
const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    notValid: /\w+\./   
}

const campos ={
    nombre_empleado   
} 
///////////////////////////////////////////////////////////////////////////////////////////////////////
/**Comportamiento dinámico del formulario */
const validarFormulario = (e)=> {
    switch(e.target.name){
        case "nombre_empleado":
          noSpace(document.getElementById("nombre_empleado").value);  
          validarCampo(expresiones.nombre, e.target,'nombre_empleado');
        break;

        case "empleado_edad": 
          esEntero((document.getElementById("empleado_edad").value));
        break;   
    }
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////

/**Funcion validarCampo prueba */
const validarCampo = (expresion, input, campo) =>{
    if(expresion.test(input.value) ){  //si el input nombre_empleado corresponde a la expresion regular...
        document.getElementById(`${campo}`).classList.remove("formulario_input-error");  //... no muestras
        document.querySelector(".formulario_input_error").classList.remove("formulario_input_error1"); //este mensaje de error
        campos[campo] = true;   //por lo que asignas a campo nombre_empleado un true
    } 
    else {
        document.getElementById(`${campo}`).classList.add("formulario_input-error");  // muesrtras el
        document.querySelector(".formulario_input_error").classList.add("formulario_input_error1"); //mensaje de error
        campos[campo] = false;   //por lo que asignas un false en el campo nombre_empleado
    }
}


/** Funcion para evaluar si es un entero o decimal la edad y entre un rango de 18-65años */
function esEntero(numero){
    parseInt(numero);
    if(numero % 1 == 0){
        if(numero>=18 && numero<=65 && !(expresiones.notValid.test(numero))){ //si edad esta en 18-65 años y no corresponde a la expresion regular notValid
            document.getElementById("empleado_edad").classList.remove("formulario_input-error");  //entonces no muestres
            document.querySelector(".formulario_input_error2").classList.remove("formulario_input_error1");  //el mensaje de error
            edad = true;   //y asigna un true a la variable edad
        }
        else{
            document.getElementById("empleado_edad").classList.add("formulario_input-error");   //muestra el mensaje de
            document.querySelector(".formulario_input_error2").classList.add("formulario_input_error1");  //error
           edad = false;                                                //asigna un falso a  variable edad
        }
        
    }
    else {
        document.getElementById("empleado_edad").classList.add("formulario_input-error");
        document.querySelector(".formulario_input_error2").classList.add("formulario_input_error1");
        edad = false;
    }
}

/**funcion para tener datos de manera obligatoria en el campo nombre_empleado */
function noSpace(valor){
    if(valor == null || valor.lenght == 0 || /^\s+$/.test(valor)){     //si en el campo nombre_empleado no hay datos o está compuesto de puros espacios
        document.getElementById("nombre_empleado").classList.add("formulario_input-error");  //muestra el
        document.querySelector(".formulario_input_error").classList.add("formulario_input_error1");  //mensaje de error
        e.preventDefault();                             //y no envíes los datos del formulario
    }
    

}
///////////////////////////////////////////////////////////////////////////////////////////////////////

/** Eventos de los input del formulario */
intputs.forEach((input) => {    // realiza un evento
    input.addEventListener('keyup',validarFormulario);  //cada vez que al levantar la tecla te vas a la 
                                                        //funcion validarFormulario
});
/**Evento botón Enviar */
formulario.addEventListener('submit',(e)=>{
   if(campos.nombre_empleado && edad){     //si sonn true el formulario está lleno de forma correcta
    
    }
    else{
        e.preventDefault();     //manten la página intacta y no envíes los datos
    }
});