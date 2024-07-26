<div>
    <div class="flex h-screen justify-center">
        <div class="md:w-2/5 flex grid grid-rows-6 p-3 items-center">
            <div class="title-container w-full">
                <div class="text-center block">
                    <h2 class="md:text-5xl text-3xl">PQS</h2>
                    <h3 class="block mx-3 mt-4">Si tiene alguna duda, queja o sugerencia hacia el gobierno escolar,
                        puede dejar su comentario aca abajo</h3>
                </div>
            </div>

            <div class="row-span-1">
                @session('status')
                <div class="bg-green-500 text-green-800 rounded p-2">
                    <span>{{$value}}</span>
                </div>
                @endsession
            </div>

            <div class="w-full row-span-3">

                <div class="flex-col flex gap-3">
                    {{-- No visible inputs --}}
                    <div class="hidden">
                        <input type="text" name="studentId" value="{{$user->id}}" wire:model.live='representId'>
                    </div>
                    <div class="block">
                        <label class="block" for="PaeType">Seleccione el tipo de solicitud: </label>

                        <select wire:model.live='type' name="PaeType" class="text-center rounded-full w-full block"
                            id="">
                            <option disabled>Seleccione una...</option>
                            @foreach (\App\Enums\PqsType::cases() as $item)
                            <option value="{{$item}}">{{$item->name}}</option>
                            @endforeach
                        </select>

                        @error('type') <span class="text-red-500">{{ $message }}</span> @enderror

                    </div>
                    <div class="">
                        <label for="studentName">Nombre: </label>
                        <input type="text" wire:model.live='studentName' name="studentName"
                            class="rounded-full w-full block" value="{{$user->name}}" disabled>
                        @error('studentName') <span class="text-red-500">{{ $message }}</span> @enderror

                    </div>
                    <div class="block">
                        <label for="studentName">Deje aca su mensaje: </label>
                        <textarea name="description" wire:model.live='description'
                            placeholder="Agrega una descripción detallada de lo sucedido"
                            class="rounded-md w-full block" id="" cols="80"></textarea>
                        @error('description') <span class="text-red-500">{{ $message }}</span> @enderror

                    </div>
                    <div class="flex justify-between">
                        <button type="button" wire:click='store'
                            class="border-2 border-stone-500 hover:bg-stone-500 hover:text-slate-50 w-2/5 p-2 rounded">Enviar
                            reporte</button>
                        <a href="{{route('home')}}"
                            class="border-2 border-stone-500 hover:bg-stone-500 hover:text-slate-50 p-3 rounded">Volver</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>