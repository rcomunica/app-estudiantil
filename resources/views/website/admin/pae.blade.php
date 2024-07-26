@php
use \App\Enums\PaeType;
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
                            Estudiante afectado
                        </td>
                        <td class="px-4 py-2">
                            Representante
                        </td>
                        <td class="px-4 py-2">
                            Notificado a conducto?
                        </td>
                        <td class="px-4 py-2">
                            Acciones
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pae as $item)
                    <tr>
                        <td class="border px-4 py-2" NOWRAP>{{ $item->id }}</td>
                        <td class="border px-4 py-2">
                            {{ PaeType::from($item->type)->name }}
                        </td>
                        <td class="border px-4 py-2">{{ $item->student_name }}</td>

                        <td class="border px-4 py-2 ">
                            {{ $item->student->name }}
                        </td>
                        <td class="border px-4 py-2 ">
                            {!! $item->is_report() ? "<box-icon name='badge-check' type='solid' color='#2980B9'
                                size='md'></box-icon>" :
                            "<box-icon name='x-circle' color='#ff0000' size='md'>
                            </box-icon>
                            "!!}
                        </td>
                        <td class="border px-2 py-2 text-center w-40">
                            <a class="bg-sky-500 text-sky-900 px-3 py-2 rounded" href="{{route('admin.pae.show', [
                                'pae' => $item->id
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