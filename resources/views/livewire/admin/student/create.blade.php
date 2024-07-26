<div id="crud-modal" tabindex="-1" aria-hidden="true"
    class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full flex">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                    @if ($editing)
                    Editando estudiante {{$name}} | #0{{$student_id}}
                    @else
                    Creando un nuevo estudiante
                    @endif
                </h3>
                <button type="button" wire:click='closeModal'
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="document" class="block mb-2 text-sm font-medium text-gray-900">Documento: </label>
                        <input type="text" name="document" id="document"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Ingrese el documento" wire:model='document' required="">
                    </div>
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre: </label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Nombre del estudiante" wire:model='name' required="">
                    </div>
                    <div class="col-span-2">
                        <label for="grade" class="block mb-2 text-sm font-medium text-gray-900">Grado: </label>
                        <input type="text" name="grade" id="grade"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Grado o Cargo" wire:model='grade' required="">
                    </div>
                    <div class="col-span-2">
                        <label for="lastIp" class="block mb-2 text-sm font-medium text-gray-900">Ultima ip: </label>
                        <input type="text" name="lastIp" id="lastIp" disabled
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="No hay ultima ip" wire:model='lastIp'>
                    </div>
                </div>
                <button type="submit" wire:click='store'
                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    @if ($editing)
                    Editar a {{$name}} | #0{{$student_id}}
                    @else
                    Crear estudiante
                    @endif
                </button>
            </div>
        </div>
    </div>
</div>