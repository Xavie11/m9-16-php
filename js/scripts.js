function confirmarEliminacion() {
    // Mostrar una ventana emergente de confirmación
    var confirmacion = confirm("¿Estás seguro de que quieres eliminar este elemento?");
    // Si el usuario hace clic en "Aceptar", retorna true; de lo contrario, retorna false
    return confirmacion;
}