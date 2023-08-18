<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div>
                    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                      <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                        <dt>
                          <div class="absolute rounded-md bg-indigo-500 p-3">
                            <svg class="h-6 w-6 text-white"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                              </svg>

                          </div>
                          <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Workspace</p>
                        </dt>
                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                          <p class="text-2xl font-semibold text-gray-900">{{$stats['total_workspace']}}</p>
                          <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                          </p>
                          <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                            <div class="text-sm">
                              <a href="{{route('workspace.index')}}" class="font-medium text-indigo-600 hover:text-indigo-500">View all<span class="sr-only"> Total Subscribers stats</span></a>
                            </div>
                          </div>
                        </dd>
                      </div>
                      <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                        <dt>
                          <div class="absolute rounded-md bg-indigo-500 p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.875 14.25l1.214 1.942a2.25 2.25 0 001.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 011.872 1.002l.164.246a2.25 2.25 0 001.872 1.002h2.092a2.25 2.25 0 001.872-1.002l.164-.246A2.25 2.25 0 0116.954 9h4.636M2.41 9a2.25 2.25 0 00-.16.832V12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 01.382-.632l3.285-3.832a2.25 2.25 0 011.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0021.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 002.25 2.25z" />
                              </svg>

                          </div>
                          <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Tasks</p>
                        </dt>
                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                          <p class="text-2xl font-semibold text-gray-900">{{$stats['total_task']}}</p>
                          <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                            <div class="text-sm">
                              <a href="{{route('workspace.index')}}" class="font-medium text-indigo-600 hover:text-indigo-500">View all<span class="sr-only"> Avg. Open Rate stats</span></a>
                            </div>
                          </div>
                        </dd>
                      </div>
                      <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                        <dt>
                          <div class="absolute rounded-md bg-indigo-500 p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                          </svg>

                          </div>
                          <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Complete Task</p>
                        </dt>
                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                          <p class="text-2xl font-semibold text-gray-900">{{$stats['total_completed_task']}}</p>
                          <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                            <div class="text-sm">
                              <a href="{{route('workspace.index')}}" class="font-medium text-indigo-600 hover:text-indigo-500">View all<span class="sr-only"> Avg. Click Rate stats</span></a>
                            </div>
                          </div>
                        </dd>
                      </div>
                      <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                        <dt>
                          <div class="absolute rounded-md bg-indigo-500 p-3">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                              </svg>


                          </div>
                          <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Incomplete Task</p>
                        </dt>
                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                          <p class="text-2xl font-semibold text-gray-900">{{$stats['total_incomplete_task']}}</p>
                          <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                            <div class="text-sm">
                              <a href="{{route('workspace.index')}}" class="font-medium text-indigo-600 hover:text-indigo-500">View all<span class="sr-only"> Avg. Click Rate stats</span></a>
                            </div>
                          </div>
                        </dd>
                      </div>
                    </dl>
                  </div>


        </div>
    </div>
</x-app-layout>
