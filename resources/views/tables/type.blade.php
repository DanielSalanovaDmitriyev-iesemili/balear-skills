@extends('table')
@section('content')
<div>
    <button class="p-4 bg-blue-600 rounded-lg"><a href="{{route('create.type')}}">Crear</a></button>
</div>
<main>
    <div class='table w-full p-2'>
        <table class='w-full border'>
        <thead>
        <tr class='bg-gray-50 border-b'>
        <th class='border-r p-2'>
        <input type='checkbox'>
        </th>
        <th class='p-2 border-r cursor-pointer text-sm font-thin text-gray-500'>
        <div class='flex items-center justify-center'>
        ID
        </div>
        </th>
        <th class='p-2 border-r cursor-pointer text-sm font-thin text-gray-500'>
            <div class='flex items-center justify-center'>
            Name
            </div>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($types as $type)
            <tr class='bg-gray-100 text-center border-b text-sm text-gray-600'>
        <td class='p-2 border-r'>{{$type->id}}</td>
        <td class='p-2 border-r'>{{$type->title}}</td>

        <td>
        <a href='{{route('edit.type', $type->id)}}' class='bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin'>Edit</a>
        <a href='{{route('delete.type', $type->id)}}' class='bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin' >Remove</a>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>
</main>
@endsection