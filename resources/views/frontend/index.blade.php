<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MCQ Question Test</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    @include('frontend.nav')
    <div class="container">
        <div class="jumbotron">
            <p>How good is your general knowledge?</p>

        </div>

        <div class="card border-info mb-4 ">
            <div class="alert alert-success" id="success" style="display: none"><h3 class="text-center" id="message"></h3></div>

            <div class="d-flex justify-content-between align-items-center card-header bg-info text-white" id="h1">
                <span>Question 1</span>
            </div>
            <div id="q1" class="collapse show">
                <div class="card-body">
                    <p>{{$question['question']}}</p>
                    <div id="question" question-id="{{$question['uuid']}}">
                        <x-frontend.input-radio :question=$question></x-frontend.input-radio>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.scripts')
</body>

</html>
