const formulario =  document.getElementById('formulario');  // Seleccionamos el formulario
const inputs = document.querySelectorAll('#formulario input');  // Seleccionamos los inputs del formulario

const expresiones = {
	nombre_: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
  password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, // letras, numeros, puntos, guiones y guion_bajo.
}

inputs.forEach((input) => {
  input.addEventListener('keyup', () => {
    console.log('tecla soltada'); 
  });
}); 

formulario.addEventListener('submit', (e) => {
  e.preventDefault();
});

