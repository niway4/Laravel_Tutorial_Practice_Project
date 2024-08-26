<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $work['title'] }}</h2>

    <p>
        This job pays {{ $work['salary'] }} per year.
    </p>
</x-layout>