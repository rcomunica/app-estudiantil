@php
use \App\Enums\PqsType;
@endphp
<div class="flex flex-col items-center justify-center">
    <div class="title text-center font-bold">
        <h3 class="text-3xl ">Reporte P.Q.S #{{$pqs->id}}</h3>
        <h4 class="text-xl">Grado: {{$pqs->student->grade}}</h4>
    </div>
    <!-- component -->
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[880px]">
            <form>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3">
                        <div class="mb-5">
                            <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                Nombre de representante:
                            </label>
                            <input type="text" name="fName" id="fName" disabled value="{{$pqs->student->name}}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="px-3 w-full">
                        <div class="mb-5">
                            <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                Tipo:
                            </label>
                            <input type="text" name="lName" id="lName" value="{{PqsType::from($pqs->type)->name}}"
                                disabled
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]">
                        Descripción:
                    </label>
                    <textarea name="guest" disabled
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                        id="" rows="10">{{$pqs->description}}</textarea>
                </div>
            </form>
        </div>
    </div>
</div>