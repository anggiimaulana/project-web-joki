<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="{{ asset('images/programming.png') }}" type="image/png">
    @vite('resources/css/app.css')
    {{-- <title>@yield('title')</title> --}}
    <title>JOKI</title>
    <style>
        a.active {
            color: rgb(234 179 8);
        }

        .tab-button {
            transition: none;
        }

        .active-tab {
            /* color: rgb(56 189 248); */
            color: rgb(251 191 36);

            /* border-bottom: 2px solid rgb(56 189 248); */
            border-bottom: 2px solid rgb(251 191 36);
            ;
        }

        .overflow-x-auto::-webkit-scrollbar {
            height: 6px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb {
            background: #cccccc;
            border-radius: 10px;
        }

        .overflow-x-auto::-webkit-scrollbar-track {
            background: #f5f5f5;
        }

        .overflow-x-auto {
            scrollbar-width: thin;
            scrollbar-color: #cccccc #f5f5f5;
        }

        footer {
            background: rgb(8, 134, 223);
            background: linear-gradient(90deg, rgba(8, 134, 223, 1) 0%, rgba(15, 117, 184, 0.949258927203694) 0%, rgba(0, 162, 224, 0.43945500563506656) 100%);
        }
    </style>

</head>
