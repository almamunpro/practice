<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    <h1 class="text-2xl font-bold">{{$job['title']}} </h1>
    <p class="text-2xl ">This Job pay per year {{$job['salary']}}</p>
</x-layout>
