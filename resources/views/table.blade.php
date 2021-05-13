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
            </tr>
            </thead>
            <tbody>
            <tr class='bg-gray-100 text-center border-b text-sm text-gray-600'>
            <td class='p-2 border-r'>
            <input type='checkbox'>
            </td>
            <td class='p-2 border-r'>1</td>
            <td class='p-2 border-r'>John Doe</td>
            <td class='p-2 border-r'>john@gmail.com</td>
            <td class='p-2 border-r'>Sydney, Australia</td>
            <td>
            <a href='#' class='bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin'>Edit</a>
            <a href='#' class='bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin'>Remove</a>
            </td>
            </tr>
            </tbody>
            </table>
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