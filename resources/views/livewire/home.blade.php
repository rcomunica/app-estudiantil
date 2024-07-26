@extends('app')

@section('section')
<div>
    <div class="w-screen h-screen home_background">
        <div class="w-full h-full grid bg-cyan-100/25 grid-rows-6 justify-center flex-col items-center">
            <div class="titles row-span-2 text-center text-white">
                <h1 class="text-6xl">Hola {{$user->name}}</h1>
                <h3 class="text-3xl">¡El gobierno estudiantil te escucha!</h3>
            </div>
            <div class="row-span-4 md:w-5/5 md:h-2/6 h-3/6 p-5 w-full bg-slate-50 rounded-lg">
                <div class="w-full h-full grid grid-cols-3 items-center justify-items-center gap-5">
                    <div class="card-item text-center">
                        <a href="{{route('student.snack')}}">
                            <div class="">
                                <box-icon type='solid' name='bowl-hot' size='lg'></box-icon>
                            </div>
                            <div class="">
                                Inconveniente con refrigerios
                            </div>
                        </a>
                    </div>
                    <div class="card-item text-center">
                        <a href="{{route('student.pqs')}}">
                            <div class="">
                                <box-icon type='solid' name='envelope' size='lg'></box-icon>
                            </div>
                            <div class="">
                                PQS
                            </div>
                        </a>
                    </div>
                    <div class="card-item text-center">
                        <a href="{{route('student.calendar')}}">
                            <div class="">
                                <box-icon type='solid' name='calendar' size='lg'></box-icon>
                            </div>
                            <div class="">
                                Calendario
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center text-white">
                <a href="{{route('login')}}"><span>Administrador</span></a>
            </div>
        </div>

    </div>
</div>
@endsection