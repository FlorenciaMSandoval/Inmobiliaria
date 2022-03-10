const formulario=document.getElementById('formulario');
const inputs=document.querySelectorAll('#formulario input');

const expresiones={
    nombre:/^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    apellidos:/^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    contrasenia:/^.{4,12}$/,
    telefono:/^[\d]{3}[-]*([\d]{2}[-]*){2}[\d]{2}$/,
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/
}


const campos={
    nombre:false,
    apellidos:false,
    contrasenia:false,
    telefono:false,
    email:false
}

const validarFormulario =(e) => {
    switch( e.target.name){
        case "nombre":
            validarCampo(expresiones.nombre , e.target,'nombre');
        break;
        case "apellidos":
            validarCampo(expresiones.apellidos , e.target,'apellidos');
        break;
        case "telefono":
            validarCampo(expresiones.telefono , e.target,'telefono');
        break;
        case "email":
            validarCampo(expresiones.email , e.target,'email');
        break;
        case "contrasenia":
            validarCampo(expresiones.contrasenia , e.target,'contrasenia');
        break;
    }
}

const validarCampo = (expresion,input,campo) => {

    if(expresion.test(input.value)){
        document.getElementById(`grupo_${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo_${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo]=true;

    }else{
        document.getElementById(`grupo_${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo_${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo]=false;
    }

}


inputs.forEach((input)=> {
input.addEventListener('keyup',validarFormulario);
input.addEventListener('blur',validarFormulario);
});


/*formulario.addEventListener('submit',(e)=>{
//e.preventDefault();
/*if(campos.nombre && campos.apellidos && campos.telefono && campos.email && campos.contrasenia){
    formulario.reset();
}else{
    document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
}

});*/