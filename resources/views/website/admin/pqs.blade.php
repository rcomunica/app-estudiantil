@php
use \App\Enums\PqsType;
@endphp

@extends('app')

@section('section')
<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-16">
        <div class="overflow-x-auto w-full">
            <table class="table-auto w-full my-2 max-w-full">
                <thead>
                    <tr class="bg-blue-700 text-white">
                        <td class="px-4 py-2">
                            ID
                        </td>
                        <td class="px-4 py-2">
                            Type
                        </td>
                        <td class="px-4 py-2">
                            Representante
                        </td>
                        <td class="px-4 py-2">
                            Grado
                        </td>
                        <td class="px-4 py-2">
                            Acciones
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pqs as $item)
                    <tr>
                        <td class="border px-4 py-2" NOWRAP>{{ $item->id }}</td>
                        <td class="border px-4 py-2">
                            {{ PqsType::from($item->type)->name }}
                        </td>
                        <td class="border px-4 py-2">{{ $item->student->name }}</td>

                        <td class="border px-4 py-2 ">
                            {{ $item->student->grade}}
                        </td>
                        <td class="border px-2 py-2 text-center w-40">
                            <a class="bg-sky-500 text-sky-900 px-3 py-2 rounded" href="{{route('admin.pqs.show', [
                                'pqs' => $item->id
                            ])}}">
                                Ver
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


    </div>

</div>
@endsection