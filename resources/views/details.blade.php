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
            <h1 class='text-5xl font-bold my-6 text-center' >Detalles de un articulo</h1>
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
            <h2 class='mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl'>Titulo</h2>
            <p class='text-gray-500 text-sm'>By <a href='#' class='text-indigo-600 hover:underline'>Blog Company</a></p>
            <p class='text-gray-500 my-2  '>Descripción de articulos</p>
            <div class='border-t-2 border-gray-300 my-3'>
            <label>Fecha: 12/12/2021</label>
            </div>
            <div class='border-t-2 border-gray-300 my-3'>
                <label>Valoracion: 4</label>
                </div>
            </div>
            </div>
            </div>
            <div class="row ml-96">
                <h1>Exposiciones</h1>
                <div class="grid grid-cols-6">
                <div class="col-span-1">
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
                <div class="col-span-1">
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
                <div class="col-span-1">
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
                <div class="col-span-1">
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
            <div class="ml-96">
                <div class="flex">
                    <form action="">
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