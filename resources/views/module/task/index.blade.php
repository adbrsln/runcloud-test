<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task') }}
        </h2>
    </x-slot>
    @if($view === 'index')
        <div class=" py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="pt-5 pb-5 px-4 sm:px-6 lg:px-8">
                        @include('module.task.components.table')
                    </div>
                </div>
            </div>
        </div>

    @elseif($view === 'show')
        @include('module.task.components.info')

    @elseif($view === 'create')
        @include('module.task.components.form')


    @endif





</x-app-layout>
