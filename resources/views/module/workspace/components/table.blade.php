<div>
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-bold leading-6 text-gray-900">Workspace</h1>
        <p class="mt-2 text-sm text-gray-700">List of Workspace that you can view</p>
      </div>
      <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
        <button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Workspace</button>
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
                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">No. Task</th>
                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Completed Task</th>
                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($workspaces as $workspace)
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{$workspace->name}}</td>
                        <td class=" px-3 py-4 text-sm text-gray-500 ">{{$workspace->description}}</td>
                        <td class=" px-3 py-4 text-sm text-gray-500 text-center">{{$workspace->tasks()->count()}}</td>
                        <td class=" px-3 py-4 text-sm text-gray-500 text-center">{{$workspace->tasks()->where('status','completed')->count()}}</td>
                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-left text-sm font-medium sm:pr-0">
                            <a href="{{route('workspace.show',['workspace'=> $workspace->uuid])}}" class="text-indigo-600 hover:text-indigo-900">View</a>
                        </td>
                    </tr>
                @empty

                <tr>
                    <td colspan="3" class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Empty</td>
                </tr>
                @endforelse



              <!-- More people... -->
            </tbody>
          </table>
          <div class="mt-4">
                    {{$workspaces->links()}}

            </div>
        </div>
      </div>
    </div>
  </div>
