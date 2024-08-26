<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    

        @foreach ($jobs as $job )
        <li> The job <strong> {{$job ['title']}} </strong> with ID <strong>{{$job ['id']}}</strong> pays <strong>{{$job['salary']}}</strong> per year. </li>
        @endforeach

    
</x-layout>
