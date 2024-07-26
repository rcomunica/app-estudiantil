@php
use \App\Enums\PqsType;
@endphp
<div class="">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="alert-4" class="flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    Recuerde que este programa es de uso EXCLUSIVO de la Jornada Tarde y Gobierno Estudiantil 2024 -
                    2025
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8"
                    data-dismiss-target="#alert-4" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-3">
                    <div class="">
                        <div class="stats_card flex justify-between flex-col p-5 h-32">
                            <div class="text-2xl">
                                <h3>Reportes de PAE:</h3>
                            </div>
                            <div class="text-right font-bold">
                                <span class="text-xl">{{$pae->count()}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="stats_card flex flex-col justify-between p-5 h-32">
                            <div class="text-2xl">
                                <h3>Reportes de PQS:</h3>
                            </div>
                            <div class="text-right font-bold">
                                <span class="text-xl">{{$pqs->count()}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="stats_card flex flex-col justify-between p-5 h-32">
                            <div class="text-2xl">
                                <h3>Estudiantes activos:</h3>
                            </div>
                            <div class="text-right font-bold">
                                <span class="text-xl">{{$students->count()}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-2">
                    <div class="">
                        <div class="stats_card flex justify-between flex-col p-5">
                            <div class="text-2xl">
                                <h3>Ultimos reportes PAE:</h3>
                            </div>
                            <div class="text-right font-bold">
                                <ul class="max-w-md divide-y divide-gray-200 mt-5">
                                    @foreach ($lastPae as $item)

                                    <li class="mt-2 pb-3 sm:pb-4">
                                        <a href="{{route('admin.pae.show', [
                                                'pae' => $item->id
                                            ])}}">
                                            <div class="flex items-center space-x-4 rtl:space-x-reverse">
                                                <div class="flex-shrink-0">
                                                    <span class="w-8 h-8 rounded-full" alt="Neil image">
                                                        {!! $item->is_report() ? "<box-icon name='badge-check'
                                                            type='solid' color='#2980B9' size='md'></box-icon>" :
                                                        "<box-icon name='x-circle' color='#ff0000' size='md'>
                                                        </box-icon>
                                                        "!!}
                                                    </span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate">
                                                        Rpr. {{$item->student->name}} / St. {{$item->student_name}}
                                                    </p>
                                                    <p class="text-sm text-gray-500 truncate">
                                                        {{$item->description}}
                                                    </p>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900">
                                                    #{{$item->id}}
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="stats_card flex justify-between flex-col p-5">
                            <div class="text-2xl">
                                <h3>Ultimos reportes PQS:</h3>
                            </div>
                            <div class="text-right font-bold">
                                <ul class="max-w-md divide-y divide-gray-200 mt-5">
                                    @foreach ($lastPqs as $item)

                                    <li class="mt-2 pb-3 sm:pb-4">
                                        <a href="{{route('admin.pqs.show', [
                                            'pqs' => $item->id
                                        ])}}">
                                            <div class="flex items-center space-x-4 rtl:space-x-reverse">
                                                <div class="flex-shrink-0">
                                                    <span class="w-8 h-8 rounded-full" alt="Neil image">
                                                        @switch($item->type)
                                                        @case(PqsType::Pregunta->name)
                                                        <box-icon name='question-mark' color="#FF0000" size='md'>
                                                        </box-icon>
                                                        @break
                                                        @case(PqsType::Queja->name)
                                                        <box-icon name='alarm-exclamation' color='#ffee00' size='md'>
                                                        </box-icon>
                                                        Queja
                                                        @break
                                                        @case(PqsType::Sugerencia)
                                                        <box-icon name='paper-plane' color='#2980B9' size='md'>
                                                        </box-icon>
                                                        @break
                                                        @endswitch
                                                    </span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate">
                                                        Rpr. {{$item->student->name}}
                                                    </p>
                                                    <p class="text-sm text-gray-500 truncate">
                                                        {{$item->description}}
                                                    </p>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900">
                                                    #{{$item->id}}
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>