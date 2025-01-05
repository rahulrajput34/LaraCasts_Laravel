<x-layout>
    <x-slot name="heading">
        Edit Job: {{ $job->title }}
    </x-slot>
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Edit new Job</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="title" id="title"
                                    class="block min-w-0 grow py-1.5 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                    placeholder="Web Developer" value="{{ $job->title }}" required>
                            </div>
                            @error('title')
                                <div class="text-red-500 italic text-sm/6">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="salary" id="salary"
                                    class="block min-w-0 grow py-1.5 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                    placeholder="$100000 per year" value="{{ $job->salary }}" required>
                            </div>
                            @error('salary')
                                <div class="text-red-500 italic text-sm/6">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button 
                form="delete-form"
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300"
                >
                    Delete
                </button>
            </div>
            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <div>
                    <button type="submit"
                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">Update
                    </button>
                </div>

            </div>
        </div>
    </form>
    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')

    </form>
</x-layout>
