@extends('formCreate')
@section('content')
<div class='w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12'>
    <h2 class='mb-16 uppercase underline font-bold grid justify-items-center'>Create</h2>
    <form class='min-w-min' method="POST" action="{{route('store.type')}}">
        @csrf
        <div class='grid grid-flow-col auto-cols-max'>
            <div class='relative'>
                <label class='absolute bottom-12 font-semibold'>Name</label>
                <input class='shadow-md border-2 border-gray-300 bg-gray-200 py-2 rounded-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent' type='text' name="title">
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
    </div>
@endsection