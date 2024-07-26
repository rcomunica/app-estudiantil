<div>
    @if ($modal)
    @include('livewire.admin.pqs.create')
    @endif
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-16">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 ">

            @if (session()->has("message"))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message') }}</h4>
                    </div>
                </div>
            </div>
            @endif


            <div class="overflow-x-auto w-full">
                <table class="table-auto w-full my-2 max-w-full">
                    <thead>
                        <tr class="bg-blue-700 text-white">
                            <td class="px-4 py-2">
                                ID
                            </td>
                            <td class="px-4 py-2">
                                Representante
                            </td>
                            <td class="px-4 py-2">
                                Descripcion
                            </td>
                            <td class="px-4 py-2">
                                Actions
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($modelPqs as $item)
                        <tr>
                            <td class="border px-4 py-2" NOWRAP>{{ $item->id }}</td>
                            <td class="border px-4 py-2">
                                {{ $item->student->name}}
                            </td>
                            {{-- <td class="border px-4 py-2">{{ $item->student-> }}</td> --}}
                            <td class="border px-4 py-2 ">
                                {{ $item->description }}
                            </td>
                            <td class="border px-2 py-2 text-center w-40">
                                <button class="bg-sky-500 text-sky-900 p-2 rounded" wire:click="edit({{ $item->id }})">
                                    Editar
                                </button>
                                <button wire:click="delete({{ $item->id }})"
                                    wire:confirm="Esta seguro de eliminar a este estudiante?"
                                    class="bg-red-500  p-2 rounded">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>



    </div>

</div>