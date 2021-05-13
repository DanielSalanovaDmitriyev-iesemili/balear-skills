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
    <header>
        <nav class='bg-white shadow' role='navigation'>
        <div class='container mx-auto p-4 flex flex-wrap items-center md:flex-no-wrap'>
        <div class='mr-4 md:mr-8'>
        <a href='#' rel='home'>
        <img class='w-15 h-15 text-purple-600' width='128' height='128' src="{{asset('img/logo.png')}}">
        <title>TailwindCSS</title>
        <path fill='currentColor' d='M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z'></path>
        </svg>
        </a>
        </div>
        <div class='ml-auto md:hidden'>
        <button class='flex items-center px-3 py-2 border rounded' type='button'>
        <svg class='h-3 w-3' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'>
        <title>Menu</title>
        <path d='M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z'/>
        </svg>
        </button>
        </div>
        <div class='w-full md:w-auto md:flex-grow md:flex md:items-center'>
        <ul class='flex flex-col mt-4 -mx-4 pt-4 border-t md:flex-row md:items-center md:mx-0 md:mt-0 md:pt-0 md:mr-4 lg:mr-8 md:border-0'>
        <li>
        <a class='block px-4 py-1 md:p-2 lg:px-4' href='#' title='MEnu'>Menu</a>
        </li>
        <li>
        <a class='block px-4 py-1 md:p-2 lg:px-4 text-blue-600' href='#' title='Active Link'>Contact</a>
        </li>
        <li>
        <a class='block px-4 py-1 md:p-2 lg:px-4' href='#' title='Link'>Admin</a>
        </li>
        </ul>
        <ul class='flex flex-col mt-4 -mx-4 pt-4 border-t md:flex-row md:items-center md:mx-0 md:ml-auto md:mt-0 md:pt-0 md:border-0'>
        <li>
        <a class='block px-4 py-1 md:p-2 lg:px-4' href='#' title='Link'>User</a>
        </li>
        <li>
        <a class='block px-4 py-1 md:p-2 lg:px-4 text-blue-600' href='#' title='Active Link'>Logout</a>
        </li>
 
        </ul>
        </div>
        </div>
        </nav>
        </header>
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
        <footer>
            <div class='w-full bg-black text-white'>
                <div class='xl:px-40 pb-12 lg:px-20 md:px-10 sm:px-5 px-10'>
                <div class='w-full pt-12 flex flex-col sm:flex-row space-y-2 justify-start'>
                <div class=w'-full sm:w-2/5 pr-6 flex flex-col space-y-4'>
                <p class='opacity-60'>Concord Royal Court (3rd floor) Dhanmondi, Dhaka 1209, Bangladesh.</p>
                </div>
                <div class='w-full sm:w-1/5 flex flex-col space-y-4'>
                <a class='opacity-60'>About Us</a>
                <a class='opacity-60'>Responsibilities</a>
                <a class='opacity-60'>Out Services</a>
                <a class='opacity-60'>Contact</a>
                </div>
                <div class='w-full sm:w-1/5 flex flex-col space-y-4'>
                <a class='opacity-60'>About Us</a>
                <a class='opacity-60'>Responsibilities</a>
                <a class='opacity-60'>Out Services</a>
                <a class='opacity-60'>Contact</a>
                </div>
                <div class='w-full sm:w-1/5 pt-6 flex items-end mb-1'>
                <div class='flex flex-row space-x-4'>
                <i class='fab fa-facebook-f'></i>
                <i class='fab fa-twitter'></i>
                <i class='fab fa-instagram'></i>
                <i class='fab fa-google'></i>
                </div>
                </div>
                </div>
                <div class='opacity-60 pt-2'>
                <p>© 2020 Executive Trade International.</p>
                </div>
                </div>
                </div>
        </footer>
    
</body>
</html>