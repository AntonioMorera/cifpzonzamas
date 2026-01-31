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

    <!-- Script inyectado directamente para evitar problemas de compilación con Vite -->
    @push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const mainContent = document.getElementById("main-content-area");

            const loadContent = (url) => {
                if (!mainContent) return;
                
                fetch(url, {
                    headers: { "X-Requested-With": "XMLHttpRequest" }
                })
                .then(response => {
                    if (!response.ok) throw new Error('Error al cargar');
                    return response.text();
                })
                .then(html => {
                    mainContent.innerHTML = html;
                })
                .catch(error => console.error('Error:', error));
            };

            // Delegación de eventos para capturar clicks
            document.addEventListener("click", function(e) {
                // Click en el enlace Libros
                const linkLibros = e.target.closest('#link-libros');
                if (linkLibros) {
                    e.preventDefault();
                    loadContent("{{ route('libro.index') }}");
                    return;
                }

                // Click en la paginación dentro del área de contenido
                const paginationLink = e.target.closest('#main-content-area .pagination a');
                if (paginationLink) {
                    e.preventDefault();
                    loadContent(paginationLink.href);
                }
            });
        });
    </script>
    @endpush
</x-app-layout>