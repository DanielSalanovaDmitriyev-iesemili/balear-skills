<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('layouts.header')
        <main>
            <h1 class='text-5xl font-bold my-6 text-center' >Detalles de un Espacio</h1>
            <div class='grid grid-cols-1 items-start'>
            <div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6'>
            <div class='flex flex-col md:flex-row -mx-4'>
            <div class='md:flex-1 px-4'>
            <div>
            <img src='https://picsum.photos/id/29/2106/1404' class='h-64 md:h-80 rounded-lg bg-gray-100 mb-4'>
            <div class='flex -mx-2 mb-4'>
            <template>
            <div class='flex-1 px-2'>
            <button
            class='focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center'>
            <span class='text-2xl'></span>
            </button>
            </div>
            </template>
            </div>
            </div>
            </div>
            <div class='md:flex-1 px-4'>
            <h2 class='mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl'>{{$space->title}}</h2>
            <p class='text-gray-500 my-2  '>{{$space->description}}</p>
            <div class='border-t-2 border-gray-300 my-3'>
            <label>Fecha: 12/12/2021</label>
            </div>
            <div class='border-t-2 border-gray-300 my-3'>
                <label>Valoracion: {{$space->valoration}}</label>
                </div>
            </div>
            </div>
            </div>
            <div class="row ml-96">
                <h1>Exposiciones</h1>
                <div class="grid grid-cols-6">
                    @foreach ($space->expositions as $exposition)
                    <div class="col-span-1">
                        <div class='max-w-xs rounded overflow-hidden shadow-lg my-2'>
                            <img class='w-full' src='https://tailwindcss.com/img/card-top.jpg' alt='Sunset in the mountains'>
                            <div class='px-6 py-4'>
                            <div class='font-bold text-xl mb-2'>{{$exposition->title}}</div>
                            <p class='text-grey-darker text-base'>
                                {{$exposition->description}}
                            </p>
                            </div>
                            </div>
                    </div>
                    @endforeach
               
               
                
                 </div>
            </div>
            <div class="ml-96">
                <div class="flex">
                    <form action="{{route('comment')}}" method="POST">
                        <h1>Comenta!</h1>
                        <textarea name="" id="" cols="30" rows="5" required  minlength="3" maxlength="150"></textarea>
                        <button class="bg-blue-600 rounded-lg p-2" type="submit">Comentar</button>
                    </form>
                    <form action="">
                        <h1>Valoracion</h1>
                        <select name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                        <button class="bg-blue-600 rounded-lg p-2" type="submit">Valorar</button>
                    </form>
                </div>
                
                <div>
                    <h1>Comentarios</h1>
                    <div class="flex">
                        <h1>Usuario: Test</h1>
                    </div>
                    <div>Mensaje</div>
                    <div>Date: DD/MM/YYYY</div>
                </div>
            </div>
        </main>
        @include('layouts.footer')
</body>
</html>