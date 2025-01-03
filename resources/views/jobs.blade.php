<x-layout>
    <x-slot name="heading">
        Jobs Listing
    </x-slot>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
                <strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }} per year
            </a>
            </li>
        @endforeach
    </ul>
</x-layout>
