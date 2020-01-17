<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet"/>


    </head>
    <body>

    @include('layouts.main2')
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Add and Drop System
                </div>
                <div>
                    Welcome to the add and drop system
                </div>


            </div>
        </div>
    </body>
</html>
