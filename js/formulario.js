const formulario =  document.getElementById('formulario');  // Seleccionamos el formulario
const inputs = document.querySelectorAll('#formulario input');  // Seleccionamos los inputs del formulario

const expresiones = {
	nombre_apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
  password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, // letras, numeros, puntos, guiones y guion_bajo.
}

const validarFormulario = (e) => {
  switch (e.target.name) {
    case "nombre_apellido":
      if(expresiones.nombre_apellido.test(e.target.value)) {
        document.getElementById('grupo_nombre_apellido').classList.remove('formulario__grupo-incorrecto');
        document.getElementById('grupo_nombre_apellido').classList.add('formulario__grupo-correcto');
        document.querySelector('#grupo_nombre_apellido i').classList.add('fa-circle-check');
        document.querySelector('#grupo_nombre_apellido i').classList.remove('fa-circle-xmark');
        document.querySelector('#grupo_nombre_apellido .formulario__input-error').classList.remove('formulario__input-error-activo')
        
      } else {
        document.getElementById('grupo_nombre_apellido').classList.add('formulario__grupo-incorrecto');
        document.getElementById('grupo_nombre_apellido').classList.remove('formulario__grupo-correcto');
        document.querySelector('#grupo_nombre_apellido i').classList.add('fa-circle-xmark');
        document.querySelector('#grupo_nombre_apellido i').classList.remove('fa-circle-check');
        document.querySelector('#grupo_nombre_apellido .formulario__input-error').classList.add('formulario__input-error-activo')
      }
    break;
    case "correo":
      if (expresiones.correo.test(e.target.value)) {
        
      } else {

      }
    break
    case "password":
      console.log('funciona!');
    break
    case "password2":
      console.log('funciona!');
    break
  }

}

inputs.forEach((input) => {
  input.addEventListener('keyup', validarFormulario);
  input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
  e.preventDefault();
});

