<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .snap-x {
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
        }
        .snap-start {
        scroll-snap-align: start;
        }
    </style>
</head>
<body>
    @include('layouts.header')
        <main>
            @include('layouts.carrousel')
            <div class="grid grid-cols-4">
                <div class="col-span-1">
                    <form class='grid grid-cols-2 border-b-2 border-opacity-20 border-gray-300 col-span-3'>
                        <label class='text-sm font-semibold uppercase m-2'>
                        <input class='rounded ml-2' type='search' name='search' id='' placeholder='Search'>
                        </label>
                        <div class='px-10 py-2'>
                        <button type='submit'><svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6 hover:text-blue-400' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z' />
                        </svg></button>
                        </div>
                        </form>
                        <div class='flex col-span-3'>
                        <form>
                        <div>
                        <h4 class='border-b-2 border-gray-600'>Select Languages:</h4>
                        <div class='relative inline-flex mt-2'>
                        <svg class='w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 412 232'><path d='M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z' fill='#648299' fill-rule='nonzero'/></svg>
                        <select class='border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none'>
                        <option value='action'>EN</option>
                        <option value='adventure'>ES</option>
                        </select>
                        </div>
                        </div>
                        <div>
                        <h4 class='border-b-2 border-gray-600'>Poblacion</h4>
                        <div class='relative inline-flex mt-2'>
                        <svg class='w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 412 232'><path d='M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z' fill='#648299' fill-rule='nonzero'/></svg>
                        <select class='border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none'>
                        <option>Elige una Poblacion</option>
                        <option value='Servicio1'>MAllorca</option>
                        <option value='Servicio1'>MArratxi</option>
                        <option value='Servicio1'>MArratxi</option>
                        <option value='Servicio1'>MArratxi</option>
                        </select>
                        </div>
                        </div>
                        <div>
                            <h4 class='border-b-2 border-gray-600'>Tipos de Servicios:</h4>
                            <div class='relative inline-flex mt-2'>
                            <svg class='w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 412 232'><path d='M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z' fill='#648299' fill-rule='nonzero'/></svg>
                            <select class='border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none'>
                            <option>Elige un servicio</option>
                            <option value='Servicio1'>Servicio1</option>
                            </select>
                            </div>
                            </div>
                        <div>
                            <h4 class='border-b-2 border-gray-600'>Tipos de Espacios:</h4>
                            <div class='relative inline-flex mt-2'>
                            <svg class='w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 412 232'><path d='M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z' fill='#648299' fill-rule='nonzero'/></svg>
                            <select class='border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none'>
                            <option>Elige un espacio</option>
                            <option value='Espacio1'>Espacio1</option>
                            </select>
                            </div>
                            </div>
                        <div class='mt-4'>
                        <h4 class='border-b-2 border-gray-600'>Modalidades:</h4>
                        <div class='relative inline-flex mt-2'>
                        <svg class='w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 412 232'><path d='M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z' fill='#648299' fill-rule='nonzero'/></svg>
                        <select class='border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none'>
                        <option>ELige una modalidad</option>
                        <option value='Modalidad1'>Modalidad1</option>
                        </select>
                        </div>
                        </div>
                        <div class='mt-4'>
                            <h4 class='border-b-2 border-gray-600'>Poblacion:</h4>
                            <div class='relative inline-flex mt-2'>
                            <svg class='w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 412 232'><path d='M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z' fill='#648299' fill-rule='nonzero'/></svg>
                            <select class='border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none'>
                            <option>ELige una poblacion</option>
                            <option value='Modalidad1'>Modalidad1</option>
                            </select>
                            </div>
                        </div>
                        <div class='mt-4'>
                            <h4 class='border-b-2 border-gray-600'>Valoracion:</h4>
                            <div class='relative inline-flex mt-2'>
                            <svg class='w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 412 232'><path d='M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z' fill='#648299' fill-rule='nonzero'/></svg>
                            <select class='border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none'>
                            <option>ELige una modalidad</option>
                            <option value='Modalidad1'>Modalidad1</option>
                            </select>
                            </div>
                            </div>
                        </form>
                        </div>
                </div>
                <div class="col-span-3">
                    <div class="grid grid-cols-6">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.footer')
    
</body>
</html>