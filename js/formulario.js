const formulario = document.getElementById('formulario');  // Seleccionamos el formulario
const inputs = document.querySelectorAll('#formulario input');  // Seleccionamos los inputs del formulario

const expresiones = {
  nombre_apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
  password: /^.{4,12}$/, // 4 a 12 dígitos.
  correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, // letras, números, puntos, guiones y guion_bajo.
};

const validarCampo = (expresion, input, campo) => {
  if (input.value.trim() === "") {
    // Si el campo está vacío, no mostrar errores
    document.getElementById(`grupo_${campo}`).classList.remove('formulario__grupo-incorrecto');
    document.querySelector(`#grupo_${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
  } else if (!expresion.test(input.value)) {
    // Si el valor no cumple con la expresión regular, mostrar error
    document.getElementById(`grupo_${campo}`).classList.add('formulario__grupo-incorrecto');
    document.querySelector(`#grupo_${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
  } else {
    // Si es válido, simplemente ocultamos el error sin mostrar éxito
    document.getElementById(`grupo_${campo}`).classList.remove('formulario__grupo-incorrecto');
    document.querySelector(`#grupo_${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
  }
};

const validarPassword2 = () => {
  const inputPassword1 = document.getElementById('password');
  const inputPassword2 = document.getElementById('password2');

  // Verificar si password es válida
  const passwordValida = expresiones.password.test(inputPassword1.value);

  // Si password no es válida, restablecer el estado de password2
  if (!passwordValida) {
    document.getElementById(`grupo_password2`).classList.remove('formulario__grupo-incorrecto');
    document.querySelector(`#grupo_password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
    return; // Salir de la función
  }

  // Si password2 está vacío, ocultar el error
  if (inputPassword2.value.trim() === "") {
    document.getElementById(`grupo_password2`).classList.remove('formulario__grupo-incorrecto');
    document.querySelector(`#grupo_password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
    return; // Salir de la función
  }

  // Si las contraseñas no coinciden, mostrar error
  if (inputPassword1.value !== inputPassword2.value) {
    document.getElementById(`grupo_password2`).classList.add('formulario__grupo-incorrecto');
    document.querySelector(`#grupo_password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
  } else {
    // Si coinciden, ocultar el error
    document.getElementById(`grupo_password2`).classList.remove('formulario__grupo-incorrecto');
    document.querySelector(`#grupo_password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
  }
};

const validarFormulario = (e) => {
  switch (e.target.name) {
    case "nombre_apellido":
      validarCampo(expresiones.nombre_apellido, e.target, 'nombre_apellido');
      break;
    case "correo":
      validarCampo(expresiones.correo, e.target, 'correo');
      break;
    case "password":
      validarCampo(expresiones.password, e.target, 'password');
      // Solo validar password2 si password es válida
      if (expresiones.password.test(e.target.value)) {
        validarPassword2();
      }
      break;
    case "password2":
      // Solo validar password2 si password es válida
      if (expresiones.password.test(document.getElementById('password').value)) {
        validarPassword2();
      }
      break;
  }
};

inputs.forEach((input) => {
  input.addEventListener('keyup', validarFormulario);
  input.addEventListener('blur', validarFormulario);
});
