//formulario.js
const formulario =  document.getElementById('formulario');  // Seleccionamos el formulario
const inputs = document.querySelectorAll('#formulario input');  // Seleccionamos los inputs del formulario

const expresiones = {
	nombre_apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
  password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, // letras, numeros, puntos, guiones y guion_bajo.
}

const campos = {
  nombre_apellido: false,
  correo: false,
  password: false,
}

const validarFormulario = (e) => {
  switch (e.target.name) {
    case "nombre_apellido":
      validarCampo(expresiones.nombre_apellido, e.target, 'nombre_apellido');
    break;
    case "correo":
      validarCampo(expresiones.correo, e.target, 'correo');
    break
    case "password":
      validarCampo(expresiones.password, e.target, 'password');
      validarPassword2();
    break;
    case "password2":
      validarPassword2();
    break;
  }

}

const validarCampo = (expresion, input, campo) => {
  if (input.value.trim() === "") {
    // Si el campo está vacío, no mostrar errores
    document.getElementById(grupo_${campo}).classList.remove('formulario__grupo-incorrecto');
    document.getElementById(grupo_${campo}).classList.remove('formulario__grupo-correcto');
    document.querySelector(#grupo_${campo} i).classList.remove('fa-circle-check', 'fa-circle-xmark');
    document.querySelector(#grupo_${campo} .formulario__input-error).classList.remove('formulario__input-error-activo');
    campos[campo] = false;
  } else if (expresion.test(input.value)) {
    // Validación exitosa
    document.getElementById(grupo_${campo}).classList.remove('formulario__grupo-incorrecto');
    document.getElementById(grupo_${campo}).classList.add('formulario__grupo-correcto');
    document.querySelector(#grupo_${campo} i).classList.remove('fa-circle-xmark');
    document.querySelector(#grupo_${campo} i).classList.add('fa-circle-check');
    document.querySelector(#grupo_${campo} .formulario__input-error).classList.remove('formulario__input-error-activo');
    campos[campo] = true;
  } else {
    // Validación fallida
    document.getElementById(grupo_${campo}).classList.add('formulario__grupo-incorrecto');
    document.getElementById(grupo_${campo}).classList.remove('formulario__grupo-correcto');
    document.querySelector(#grupo_${campo} i).classList.remove('fa-circle-check');
    document.querySelector(#grupo_${campo} i).classList.add('fa-circle-xmark');
    document.querySelector(#grupo_${campo} .formulario__input-error).classList.add('formulario__input-error-activo');
    campos[campo] = false;
  }
};

const validarPassword2 = () => {
  const inputPassword1 = document.getElementById('password');
  const inputPassword2 = document.getElementById('password2');

  if (inputPassword1.value !== inputPassword2.value) {
    document.getElementById(grupo_password2).classList.add('formulario__grupo-incorrecto');
    document.getElementById(grupo_password2).classList.remove('formulario__grupo-correcto');
    document.querySelector(#grupo_password2 i).classList.remove('fa-circle-check');
    document.querySelector(#grupo_password2 i).classList.add('fa-circle-xmark');
    document.querySelector(#grupo_password2 .formulario__input-error).classList.add('formulario__input-error-activo');
    campos['password'] = false;
  } else {
    document.getElementById(grupo_password2).classList.remove('formulario__grupo-incorrecto');
    document.getElementById(grupo_password2).classList.add('formulario__grupo-correcto');
    document.querySelector(#grupo_password2 i).classList.remove('fa-circle-xmark');
    document.querySelector(#grupo_password2 i).classList.add('fa-circle-check');
    document.querySelector(#grupo_password2 .formulario__input-error).classList.remove('formulario__input-error-activo');
    campos['password'] = true;
  }
}

inputs.forEach((input) => {
  input.addEventListener('keyup', validarFormulario);
  input.addEventListener('blur', validarFormulario);
});