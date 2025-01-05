<x-layout>
    <x-slot name="heading">
        Jobs Listing
    </x-slot>
    <ul class="space-y-6">
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                    <div class=" text-blue-500 font-bold">{{ $job->employer->name }}</div>
                    <strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }} per year
                </a>
            </li>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </ul>
</x-layout>
