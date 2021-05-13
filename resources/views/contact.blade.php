<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
</head>
<body>  
    @include('layouts.header')
    <main>
        
            <div class='w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12'>
                <h2 class='mb-16 uppercase underline font-bold grid justify-items-center roboto'>Contact</h2>
                <form class='min-w-min'>
                <div class='grid grid-flow-col auto-cols-max'>
                <div class='relative'>
                <label class='absolute bottom-12 font-semibold roboto'>Name</label>
                <input class='shadow-md border-2 border-gray-300 bg-gray-200 py-2 rounded-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent' type='text' required minlength="2" maxlength="20">
                </div>
                <div class='relative ml-20'>
                <label class='absolute bottom-12 font-semibold roboto'>Surname</label>
                <input class='shadow-md border-2 border-gray-300 bg-gray-200 py-2 rounded-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent' type='text' required  minlength="2" maxlength="40">
                </div>
                </div>
                <div class='mt-16 relative'>
                <label for='email2' class='absolute bottom-10 font-semibold roboto'>Email</label>
                <input class='w-full shadow-md border-2 border-gray-300 bg-gray-200 py-1 rounded-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent'  type='email' id='email2' name='email2' minlength="7" maxlength="35" required>
                </div>
                <div class='mt-16 relative'>
                <textarea class='w-full shadow-md border-2 border-gray-300 bg-gray-200 py-1 rounded-sm h-45 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent roboto' required maxlength="150"></textarea>
                </div>
                </div>
                <div class='mt-16 relative'>
                <button class='p-4 rounded-lg bg-green-400 hover:bg-green-200'>Send</button>
                </div>
                </form>
                </div>
    </main>
    @include('layouts.footer')
</body>
</html>