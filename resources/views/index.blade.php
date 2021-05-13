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
            <div>
                <div class='flex flex-col items-center m-8'>
                    <div class='w-full bg-white rounded overflow-x-hidden flex snap-x' style='height: 40vh'>
                        <div class='snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative' id='slide-1'>
                            <img src='{{asset('img/espacio1.png')}}' class='h-full w-full object-cover absolute inset-0 z-10 opacity-25'>
                            <h1 class='z-20 text-center'>Any kind of content here, images too!</h1>
                        </div>
                    <div class='snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative' id='slide-2'>
                        <img src='{{asset('img/espacio2.png')}}' class='h-full w-full object-cover absolute inset-0 z-10 opacity-25'>
                        <h1 class='z-20 text-center'>Any kind of content here, images too!</h1>
                    </div>
                    <div class='snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative' id='slide-3'>
                        <img src='{{asset('img/espacio3.png')}}' class='h-full w-full object-cover absolute inset-0 z-10 opacity-25'>
                        <h1 class='z-20 text-center'>Any kind of content here, images too!</h1>
                    </div>
                    <div class='snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative' id='slide-4'>
                        <img src='{{asset('img/espacio4.png')}}' class='h-full w-full object-cover absolute inset-0 z-10 opacity-25'>
                        <h1 class='z-20 text-center'>Any kind of content here, images too!</h1>
                    </div>
                    <div class='snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative' id='slide-5'>
                        <img src='{{asset('img/espacio5.png')}}' class='h-full w-full object-cover absolute inset-0 z-10 opacity-25'>
                        <h1 class='z-20 text-center'>Any kind of content here, images too!</h1>
                    </div>
                    <div class='snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative' id='slide-6'>
                        <img src='{{asset('img/espacio1.png')}}' class='h-full w-full object-cover absolute inset-0 z-10 opacity-25'>
                        <h1 class='z-20 text-center'>Any kind of content here, images too!</h1>
                    </div>
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
                        <div class="col-span-2">
                            <div class='max-w-xs rounded overflow-hidden shadow-lg my-2'>
                                <img class='w-full' src='https://tailwindcss.com/img/card-top.jpg' alt='Sunset in the mountains'>
                                <div class='px-6 py-4'>
                                <div class='font-bold text-xl mb-2'>The Coldest Sunset</div>
                                <p class='text-grey-darker text-base'>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>
                                </div>
                                <div class='px-6 py-4'>
                                <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2'>#photography</span>
                                <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2'>#travel</span>
                                <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker'>#winter</span>
                                </div>
                                </div>
                        </div>
                        <div class="col-span-2">
                            <div class='max-w-xs rounded overflow-hidden shadow-lg my-2'>
                                <img class='w-full' src='https://tailwindcss.com/img/card-top.jpg' alt='Sunset in the mountains'>
                                <div class='px-6 py-4'>
                                <div class='font-bold text-xl mb-2'>The Coldest Sunset</div>
                                <p class='text-grey-darker text-base'>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>
                                </div>
                                <div class='px-6 py-4'>
                                <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2'>#photography</span>
                                <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2'>#travel</span>
                                <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker'>#winter</span>
                                </div>
                                </div>
                        </div>
                        <div class="col-span-2">
                            <div class='max-w-xs rounded overflow-hidden shadow-lg my-2'>
                                <img class='w-full' src='https://tailwindcss.com/img/card-top.jpg' alt='Sunset in the mountains'>
                                <div class='px-6 py-4'>
                                <div class='font-bold text-xl mb-2'>The Coldest Sunset</div>
                                <p class='text-grey-darker text-base'>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>
                                </div>
                                <div class='px-6 py-4'>
                                <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2'>#photography</span>
                                <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2'>#travel</span>
                                <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker'>#winter</span>
                                </div>
                                </div>
                        </div>
                        <div class="col-span-2">
                            <div class='max-w-xs rounded overflow-hidden shadow-lg my-2'>
                                <img class='w-full' src='https://tailwindcss.com/img/card-top.jpg' alt='Sunset in the mountains'>
                                <div class='px-6 py-4'>
                                <div class='font-bold text-xl mb-2'>The Coldest Sunset</div>
                                <p class='text-grey-darker text-base'>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>
                                </div>
                                <div class='px-6 py-4'>
                                <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2'>#photography</span>
                                <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2'>#travel</span>
                                <span class='inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker'>#winter</span>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.footer')
    
</body>
</html>