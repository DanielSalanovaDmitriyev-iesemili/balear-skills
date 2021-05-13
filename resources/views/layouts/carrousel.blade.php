<div>
    <div class='flex flex-col items-center m-8'>
        
        <div class='w-full bg-white rounded overflow-x-hidden flex snap-x' style='height: 40vh'>
            @php
                $num = 0    
            @endphp
            @foreach ($destacados as $destacado)
                <div class='snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative' id='slide-{{$destacado->id}}'>
                    <img src='{{asset('img/' . $destacado->img . $destacado->id . '.png')}}' class='h-full w-full object-cover absolute inset-0 z-10 opacity-25'>
                </div>
            @endforeach
        </div>
        <div class='flex mt-8'>
        <a class='w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center' href='#slide-1'>1</a>
        <a class='w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center' href='#slide-2'>2</a>
        <a class='w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center' href='#slide-3'>3</a>
        <a class='w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center' href='#slide-4'>4</a>
        <a class='w-8 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center' href='#slide-5'>5</a>
        <a class='w-8 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center' href='#slide-6'>6</a>
        </div>
        </div>
</div>