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
    @include('layouts.footer')
</body>
</html>