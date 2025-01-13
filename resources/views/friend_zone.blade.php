<x-layout>
    <x-slot:heading>
        Friend zone Page
    </x-slot:heading>
   @foreach ($Friend_zones as $friend)
   <h1>{{$friend['Name']}}</h1>
   <p>{{$friend['Number']}}</p>

   @endforeach
</x-layout>
