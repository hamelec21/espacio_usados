



/**
 *   Función para limitar y validar un textarea
 */

function limitAndValidateTextarea(elemento, max_chars) {
    const patronEmail = /[\w.-]+@[a-zA-Z_-]+?\.[a-zA-Z]{2,6}/g; // Patrón Regex para correos electrónicos
    const patronTelefono = /\b\d{6}\b/g; // Patrón Regex para exactamente 6 dígitos consecutivos
    const palabrasProhibidas = ['gmail', 'hotmail', 'outlook', 'yahoo'];
    let valor = elemento.value.toLowerCase(); // Convertir el valor a minúsculas para comparación insensible a mayúsculas
    if (patronEmail.test(valor)) {
        valor = valor.replace(patronEmail, ''); // Eliminar patrones de correo electrónico
    }
    if (patronTelefono.test(valor)) {
        valor = valor.replace(patronTelefono, ''); // Eliminar patrones de números de teléfono
    }
    palabrasProhibidas.forEach(palabra => {
        valor = valor.replace(new RegExp(palabra, 'g'), ''); // Eliminar palabras prohibidas
    });
    if (valor.includes('@')) {
        valor = valor.replace('@', ''); // Eliminar el carácter '@'
    }
    if (valor.length > max_chars) {
        valor = valor.substr(0, max_chars);
    }
    elemento.value = valor;
    actualizarConteoCaracteres(valor.length, max_chars);
}

// Función para actualizar el conteo de caracteres
function actualizarConteoCaracteres(conteoActual, conteoMaximo) {
    const elementoConteoCaracteres = document.getElementById('charCount');
    elementoConteoCaracteres.textContent = conteoActual + ' / ' + conteoMaximo + ' caracteres';
}

