<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    @foreach ($jobs  as $job)
    <li><a href="/jobs/{{$job['id']}}">
        {{$job['title']}} pay per year {{$job['salary']}}
    </a>
    </li>

    @endforeach
</x-layout>
