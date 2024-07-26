@php
use \App\Enums\PaeType;
use Carbon\Carbon;
$images = json_decode($pae->images);
@endphp
<div class="flex flex-col items-center justify-center">
    <div class="title text-center font-bold">
        <h3 class="text-3xl ">Reporte P.A.E #{{$pae->id}}</h3>
        <h4 class="text-xl">Grado: {{$pae->student->grade}}</h4>
    </div>
    <!-- component -->
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                Nombre de representante:
                            </label>
                            <input type="text" name="fName" id="fName" disabled value="{{$pae->student->name}}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                Estudiante afectado:
                            </label>
                            <input type="text" name="lName" id="lName" value="{{$pae->student_name}}" disabled
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-full">
                        <div class="mb-5">
                            <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                Tipo de reporte:
                            </label>
                            <input type="text" name="lName" id="lName" value="{{PaeType::from($pae->type)->name}}"
                                disabled class=" w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base
                                font-medium outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]">
                        Descripción:
                    </label>
                    <textarea name="guest" disabled
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                        id="" cols="30" rows="10">{{$pae->description}}</textarea>
                </div>

                <div class="flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                Date
                            </label>
                            <input type="date" name="date" id="date"
                                value="{{Carbon::parse($pae->created_at)->format('Y-m-d')}}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <label class="mb-3 block text-base font-medium text-[#07074D]">
                        Caso reportado?
                    </label>
                    <div class="flex items-center space-x-6">
                        <div class="flex items-center">
                            <input type="radio" name="radio1" disabled {{$pae->is_report() ?
                            'checked': ''}}
                            id="radioButton1"
                            class="h-5 w-5" />
                            <label for="radioButton1" class="pl-3 text-base font-medium text-[#07074D]">
                                Yes
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="radio1" disabled id="radioButton2" {{$pae->is_report() ?
                            '': 'checked'}} class="h-5 w-5" />
                            <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <label class="mb-3 block text-base font-medium text-[#07074D]">
                        Imagenes
                    </label>
                    <div class="flex items-center space-x-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                            @foreach ($images as $item)
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{$item}}"
                                    alt="{{$pae->student_name}} Report image">
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>