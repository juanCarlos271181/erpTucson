const prueba = document.getElementById('prueba');
const inputs = document.querySelectorAll('#prueba input');




const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    password: /^.{4,12}$/, // 4 a 12 digitos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}


const validarFormulario = (e) => {
    switch (e.target.name) {
        case "usuario":
            validarCampo(expresiones.usuario, e.target, 'usuario');
            break;

        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
            break;

        case "password":
            validarCampo(expresiones.password, e.target, 'password');
            break;

        case "password2":
            validarCampo(expresiones.password2, e.target, 'password2');
            break;

        case "correo":
            validarCampo(expresiones.correo, e.target, 'correo');
            break;

        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
            break;
    }
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`input__${campo}`).classList.remove('formulario_grupo-incorrecto');
        document.getElementById(`input__${campo}`).classList.add('formulario_grupo-correcto');
        document.querySelector(`#input__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#input__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#input__${campo} .formulario_input-error`).classList.remove('formulario_input-error-activo');
    } else {
        document.getElementById(`input__${campo}`).classList.add('formulario_grupo-incorrecto');
        document.getElementById(`input__${campo}`).classList.remove('formulario_grupo-correcto');
        document.querySelector(`#input__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#input__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#input__${campo} .formulario_input-error`).classList.add('formulario_input-error-activo');


    }
}


const validarPassword2 = () => {
    const inputPassword1 = document.getElementById('password');
    const inputPassword2 = document.getElementById('password2');

    if(inputPassword1.value!==inputPassword2.value){
        document.getElementById(`input__password2`).classList.add('formulario_grupo-incorrecto');
        document.getElementById(`input__password2`).classList.remove('formulario_grupo-correcto');
        document.querySelector(`#input__password2 i`).classList.add('fa-times-circle');
        document.querySelector(`#input__password2 i`).classList.remove('fa-check-circle');
        document.querySelector(`#input__password2 .formulario_input-error`).classList.add('formulario_input-error-activo');
  
    }else{
        document.getElementById(`input__password2`).classList.remove('formulario_grupo-incorrecto');
        document.getElementById(`input__password2`).classList.add('formulario_grupo-correcto');
        document.querySelector(`#input__password2 i`).classList.remove('fa-times-circle');
        document.querySelector(`#input__password2 i`).classList.add('fa-check-circle');
        document.querySelector(`#input__password2 .formulario_input-error`).classList.remove('formulario_input-error-activo');
    
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});




prueba.addEventListener('submit', (e) => {
    e.preventDefault();
});