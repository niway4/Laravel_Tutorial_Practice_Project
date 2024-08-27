@php

use App\Models\Job;

@endphp



<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    @foreach (Job::all() as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="hover:underline text-blue-500">
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
            </a>
    @endforeach
    </li>
</x-layout>
