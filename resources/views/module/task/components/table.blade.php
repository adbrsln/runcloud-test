<div>
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-bold leading-6 text-gray-900">Tasks</h1>
        <p class="mt-2 text-sm text-gray-700">List of Tasks that you can view</p>
      </div>
      <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
        <button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Tasks</button>
      </div>
    </div>
    <div class="mt-5 flow-root">
      <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
          <table class="min-w-full divide-y divide-gray-300">
            <thead>
              <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Description</th>
                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Start</th>
                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">End</th>
                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Status</th>
                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Remarks</th>
                <th scope="col" class="px-3 py-3.5 ">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($tasks as $task)
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{$task->name}}</td>
                        <td class=" px-3 py-4 text-sm text-gray-500 ">{{$task->description}}</td>

                        <td class=" px-3 py-4 text-sm text-gray-500 text-center">{{$task->start}}</td>
                        <td class=" px-3 py-4 text-sm text-gray-500 text-center">{{$task->end}}</td>
                        @if ($task->status == 'completed')
                            <td class=" px-3 py-4 text-sm text-gray-500 text-center">
                                <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Complete</span>
                            </td>

                            <td class=" px-3 py-4 text-sm text-gray-500 text-center"> {{$task->status =='completed' ? $task->completed_at->diffForHumans() :'-'}}</td>
                        @else
                            <td class=" px-3 py-4 text-sm text-gray-500 text-center">
                                <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">Incomplete</span>
                            </td>

                            <td class=" px-3 py-4 text-sm text-gray-500 text-center"> {{$task->status =='incomplete' ? $task->end->diff(now())->format('%d days %h hours %i minutes remaining'): '-'}}</td>
                        @endif
                        <td class="px-3 py-4">
                            <a href="{{route('task.show',['task'=> $task->uuid])}}" class="text-indigo-600 hover:text-indigo-900">View</a>
                        </td>
                    </tr>
                @empty

                <tr>
                    <td colspan="3" class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Empty</td>
                </tr>
                @endforelse
            </tbody>
          </table>
          <div class="mt-4">
                    {{$tasks->links()}}
            </div>
        </div>
      </div>
    </div>
  </div>
