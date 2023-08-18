
<div class="pt-12 pb-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="pt-5 pb-5 px-4 sm:px-6 lg:px-8">

                    <form  action="{{route('task.store',['workspace'=> $workspace])}}" method="post" >
                        @csrf
                        <div class="space-y-12">
                        <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
                            <div>
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Task Information</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Information required to be inputted</p>
                            </div>

                            <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
                            <div class="sm:col-span-3">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Task Name</label>
                                <div class="mt-2">
                                <input type="text" name="name" id="name" value="{{old('name')}}" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Task Description</label>
                                <div class="mt-2">
                                    <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>{{old('description')}}</textarea>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="start" class="block text-sm font-medium leading-6 text-gray-900"> Start Date</label>
                                <div class="mt-2">
                                    <input type="date" name="start" id="start" value="{{old('start')}}" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                </div>
                            </div>


                            <div class="col-span-full">
                                <label for="end" class="block text-sm font-medium leading-6 text-gray-900"> End Date</label>
                                <div class="mt-2">
                                    <input type="date" name="end" id="end" value="{{old('end')}}" autocomplete="given-name" required onchange="validateEndDate()" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                </div>
                            </div>

                            <input type="hidden" name="workspace_id" value="{{$workspace->id}}">

                            </div>
                        </div>


                    <x-validation-errors class="mt-4" />
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="{{route('workspace.show',['workspace'=>$workspace])}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </form>


            </div>
        </div>
    </div>
</div>

@push('custom-js')
<script>
    function validateEndDate() {
        var startDate = new Date(document.getElementById('start').value);
        var endDate = new Date(document.getElementById('end').value);

        if (endDate <= startDate) {
            alert("End date must be greater than the start date.");
            document.getElementById('end').value = '';
        }
    }
    </script>
@endpush
