<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">

        <div class="container">
            <div class="title m-b-md">
                Quiz
            </div>
            <div>Press Enter to check if your answer is correct!</div>
                @if(Session::has('message'))
                    <p class="col-3 alert {{ Session::get('alert-class') }}">{{ Session::get('message') }}</p>
                @endif

            @foreach($quizQuestions as $index => $quiz)
                    @if ($index == 0)
                <div>{{ $quiz->title }}</div>

                <form  action="{{ route('quizzes.answer', ['id' => $quiz->id]) }}" method="post">

                        @csrf
                    <input type="text" name="answer">

                </form>
                    @endif
                        @if ($index == 1)
                            <div>{{ $quiz->title }}</div>

                            <form  action="{{ route('quizzes.answer', ['id' => $quiz->id]) }}" method="post">

                                @csrf
                                <input type="text" name="answer">

                            </form>
                        @endif
                        @if ($index == 2)
                            <div>{{ $quiz->title }}</div>

                            <form  action="{{ route('quizzes.answer', ['id' => $quiz->id]) }}" method="post">

                                @csrf
                                <input type="text" name="answer">

                            </form>
                        @endif
                        @if ($index == 3)
                            <div>{{ $quiz->title }}</div>

                            <form  action="{{ route('quizzes.answer', ['id' => $quiz->id]) }}" method="post">

                                @csrf
                                <input type="text" name="answer">

                            </form>
                        @endif
                        @if ($index == 4)
                            <div>{{ $quiz->title }}</div>

                            <form  action="{{ route('quizzes.answer', ['id' => $quiz->id]) }}" method="post">

                                @csrf
                                <input type="text" name="answer">

                            </form>
                        @endif
            @endforeach


            <div>Your score is : {{ $score}}% </div>
        </div>
    </div>
</div>
</body>
</html>
