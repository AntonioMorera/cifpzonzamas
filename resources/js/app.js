document.addEventListener("DOMContentLoaded", function() {
    console.log("JS de Dashboard cargado");

    const mainContent = document.getElementById("main-content-area");

    const loadContent = (url) => {
        if (!mainContent) return;
        
        fetch(url, {
            headers: { "X-Requested-With": "XMLHttpRequest" }
        })
        .then(response => response.text())
        .then(html => {
            mainContent.innerHTML = html;
        })
        .catch(error => console.error('Error:', error));
    };

    // Usamos delegación de eventos para capturar clicks en el menú y en la paginación
    document.addEventListener("click", function(e) {
        // Click en "Libros"
        const linkLibros = e.target.closest('#link-libros');
        if (linkLibros) {
            e.preventDefault();
            console.log("Click en Libros detectado");
            loadContent('/libro');
        }

        // Click en paginación (dentro de la tabla inyectada)
        const paginationLink = e.target.closest('#main-content-area .pagination a');
        if (paginationLink) {
            e.preventDefault();
            loadContent(paginationLink.href);
        }
    });
});