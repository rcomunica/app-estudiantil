<div>
    <div class="flex justify-center">
        <div class="md:w-2/5 flex grid p-3 items-center">
            <div class="title-container row-span-2 w-full">
                <div class="text-center block">
                    <h2 class="md:text-5xl text-3xl">Refrigerios</h2>
                    <h3 class="block mx-3 mt-4">Recuerda que para proceder con este informe necesitas tener
                        evidencia
                        fotografica, pues este
                        reporte sera enviado al Programa de Alimentacion Escolar (PAE)</h3>
                </div>
            </div>

            <div class="row-span-auto">
                @session('status')
                <div class="bg-green-500 text-green-800 rounded p-2">
                    <span>{{$value}}</span>
                </div>
                @endsession
            </div>

            <div class="row-span-4 w-full ">

                <div class="flex-col flex gap-3">
                    {{-- No visible inputs --}}
                    <div class="hidden">
                        <input type="text" name="studentId" value="{{$user->id}}" wire:model.live='representId'>
                    </div>
                    <div class="block">
                        <label class="block" for="PaeType">Seleccione que problema tiene: </label>

                        <select wire:model.live='type' name="PaeType" class="text-center rounded-full w-full block"
                            id="">
                            <option disabled>Seleccione una...</option>
                            @foreach (\App\Enums\PaeType::cases() as $item)
                            <option value="{{$item}}">{{$item->name}}</option>
                            @endforeach
                        </select>

                        @error('type') <span class="text-red-500">{{ $message }}</span> @enderror

                    </div>
                    <div class="">
                        <label for="studentName">Nombre del estudiante afectado: </label>
                        <input type="text" wire:model.live='studentName' name="studentName"
                            class="rounded-full w-full block" placeholder="Pepito Hernandez">
                        @error('studentName') <span class="text-red-500">{{ $message }}</span> @enderror

                    </div>
                    <div class="block">
                        <label for="studentName">Cuentenos que sucedio: </label>
                        <textarea name="description" wire:model.live='description'
                            placeholder="Agrega una descripción detallada de lo sucedido"
                            class="rounded-md w-full block" id="" cols="60"></textarea>
                        @error('description') <span class="text-red-500">{{ $message }}</span> @enderror

                    </div>
                    <div class="block">
                        <label class="" for="files">Seleccionar foto(s)
                            y/o video(s)</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-full cursor-pointer bg-gray-50 p-2"
                            id="files" type="file" wire:model.live='files' multiple>
                        @error('files') <span class="text-red-500">{{ $message }}</span> @enderror

                    </div>
                    <div class="flex gap-2">
                        <label for="studentName">¿Ya reporto este caso?: </label>
                        <div class="">
                            <div class="">
                                <input wire:model.live='is_notify' id="country-option-1" type="radio" name="is_notify"
                                    value=1 class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-[#474740]"
                                    checked="">
                                <label for="country-option-1" class=" text-sm font-medium text-gray-900  ml-1">
                                    Si
                                </label>
                            </div>
                            <div class="">
                                <input wire:model.live='is_notify' id="country-option-2" type="radio" name="is_notify"
                                    value=0 class="h-4 w-4 border-gray-300 focus:ring-2 focus:bg-[#474740]" checked="">
                                <label for="country-option-2" class="text-sm font-medium text-gray-900 ml-1 ">
                                    No
                                </label>
                            </div>
                        </div>
                        @error('files') <span class="text-red-500">{{ $message }}</span> @enderror
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