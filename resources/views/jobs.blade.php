<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    
    <ul>

    </ul>
    @foreach ($jobs as $job)
    <li>
        <x-link type="a" color="dark">
            <b>
            {{ $job['title'] }}:
            </b>
            pays {{ $job['salary'] }} per year.
        </x-link>
    </li>
    @endforeach
</x-layout>