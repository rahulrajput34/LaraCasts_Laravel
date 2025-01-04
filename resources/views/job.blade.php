<x-layout>
    <x-slot name="heading">
        <h1 class="text-2xl font-bold text-center my-6">Jobs Listing</h1>
    </x-slot>
    
    <div class="border border-gray-300 rounded-lg shadow-md p-4 bg-white hover:shadow-lg transition-shadow">
        <h2 class="font-bold text-lg text-gray-800 mb-2">
            {{ $job['title'] }}
        </h2>
        <p class="text-gray-600">
            This job pays 
            <span class="font-medium text-pink-500">{{ $job['salary'] }} per year.</span>
        </p>
    </div>
</x-layout>
