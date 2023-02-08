<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Funcionários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table" style="width: 100%">

                    <tr>

                        <thead>

                            <tr>

                                <th style="padding-left:10px">Nome</th>
                                <th style="padding-left:10px">Email</th>
                                <th style="padding-left:10px">Período</th>
                                
                                <th></th>

                            </tr>
                            
                        </thead>

                        <tbody>

                            @foreach ($funcionarios as $funcionario)
                            
                                <tr>
                                    <td style="padding-left:10px; padding-right: 10px">{{ $funcionario->nome }}</td>
                                    <td style="padding-left:10px; padding-right: 10px">{{ $funcionario->email }}</td>
                                    <td style="padding-left:10px; padding-right: 10px">{{ $funcionario->periodo }}</td>

                                    <td>

                                        <a class="btn btn-dark">
                                            <i class="fa-solid fa-eye aux_icon"></i>
                                        </a>

                                        <a class="btn btn-primary">
                                            <i class="fa-solid fa-pen-to-square aux_icon"></i>
                                        </a>

                                        <a class="btn btn-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </tr>

                </table>
            </div>
        </div>
    </div>
</x-app-layout>