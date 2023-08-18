
<div class="pt-12 pb-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="pt-5 pb-5 px-4 sm:px-6 lg:px-8">
                <div >
                    <div class="px-4 sm:px-0">
                        <h3 class="text-base font-semibold leading-7 text-gray-900">Workspace Information</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Workspace details and tasks informations.</p>
                    </div>
                    <div class="mt-6 border-t border-gray-100">
                        <dl class="divide-y divide-gray-100">
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Name</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$workspace->name}}</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Description</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$workspace->description}}</dd>
                        </div>
                        </dl>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="pb-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="pt-5 pb-5 px-4 sm:px-6 lg:px-8">
                @include('module.task.components.table')
            </div>
        </div>
    </div>
</div>

