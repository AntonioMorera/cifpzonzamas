<x-app-layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div id="main-content-area" class="p-6 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Bootstrap -->
    <div class="modal fade" id="libroModal" tabindex="-1" aria-labelledby="libroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="libroModalLabel">Formulario de Libro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body" id="modal-libro-body">
                    <div class="text-center py-4">
                        <div class="spinner-border text-primary"></div>
                        <p class="mt-2">Cargando...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const mainContent = document.getElementById("main-content-area");
            const modalBody   = document.getElementById("modal-libro-body");
            const modalEl    = document.getElementById("libroModal");
            const libroModal = new bootstrap.Modal(modalEl);

            function ajaxLoad(url, target) {
                fetch(url, {
                    headers: { "X-Requested-With": "XMLHttpRequest" }
                })
                .then(r => {
                    if (!r.ok) throw new Error("HTTP " + r.status);
                    return r.text();
                })
                .then(html => {
                    target.innerHTML = html;
                })
                .catch(err => {
                    console.error(err);
                    target.innerHTML = `<div class="alert alert-danger">No se pudo cargar el contenido</div>`;
                });
            }

            document.addEventListener("click", function (e) {

                /* -------- LIBROS (cargar tabla en dashboard) -------- */
                const linkLibros = e.target.closest("#link-libros");
                if (linkLibros) {
                    e.preventDefault();
                    ajaxLoad("{{ route('libro.index') }}", mainContent);
                    return;
                }

                /* -------- BOTONES DEL MODAL (ver, editar, borrar) -------- */
                const btnModal = e.target.closest(".btn-modal");
                if (btnModal) {
                    e.preventDefault();
                    const url = btnModal.dataset.url;
                    if (!url) return;

                    modalBody.innerHTML = `
                        <div class="text-center py-4">
                            <div class="spinner-border text-primary"></div>
                            <p class="mt-2">Cargando...</p>
                        </div>
                    `;

                    libroModal.show();
                    ajaxLoad(url, modalBody);
                    return;
                }

                /* -------- PAGINACIÓN AJAX -------- */
                const pagination = e.target.closest("#main-content-area .pagination a");
                if (pagination) {
                    e.preventDefault();
                    ajaxLoad(pagination.href, mainContent);
                }

            });
        });
    </script>
    @endpush
</x-app-layout>
