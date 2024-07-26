@extends('app')

@section('section')
<div class="h-screen w-screen flex justify-center">
    <div class="h-full md:w-2/6 grid grid-rows-6 items-center">
        <div class="row-span-2">
            <div class="text-center text-[#474740]">
                <h2 class="text-5xl mb-5">¡Bienvenido!</h2>
                <h4 class="text-xl">El Gobierno escolar OEA jornada tarde lo escucha
                </h4>
            </div>
        </div>

        <div class="row-span-3">
            @if (session('error'))
            <div class="row-span-2 mb-5">
                <div class="flex justify-center">
                    <div class="bg-red-500 p-5 text-red-50 w-4/5 rounded-md flex justify-center">
                        {{ session('error') }}
                    </div>
                </div>
            </div>
            @endif
            <div class="w-full flex justify-center">
                <form action="{{route('student.setUser')}}" class="flex items-center w-5/6 flex-col" method="POST">
                    @csrf
                    <input type="text" placeholder="Documento" autocomplete="off" class="rounded-full w-full"
                        name="document">
                    <button type="submit"
                        class="border-2 border-stone-500 hover:bg-stone-500 hover:text-slate-50 w-2/5 p-2 m-3 rounded-full">Ingresar</button>
                </form>
            </div>
        </div>
    </div>


</div>
@endsection