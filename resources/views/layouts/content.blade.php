@extends('index')
@section('content')
    @foreach ($spaces as $space)
    <div class="col-span-2">
        <div class='max-w-xs rounded overflow-hidden shadow-lg my-2'>
            <img class='w-full' src='{{asset('img/' . $space->img . $space->id . '.png')}}' alt='Sunset in the mountains'>
            <div class='px-6 py-4'>
            <div class='font-bold text-xl mb-2'><a href="{{route('show.space', $space->id)}}">{{$space->name}}</a></div>
            <p class='text-grey-darker text-base'>
                {{$space->description}}
            </div>
            <div class='px-6 py-4'>
            <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2'>{{$space->direction}}</span>
            <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2'>{{$space->email}}</span>
            <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker'>{{$space->phone}}</span>
            </div>
            </div>
    </div>
    @endforeach   
    {{$spaces->links()}}
@endsection