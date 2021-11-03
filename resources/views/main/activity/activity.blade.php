<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/activity.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    @section('content')
    <div class="workSpace">
        <div class="title1">
            <h3>Activity</h3>
        </div>
        <div class="content1">
            <div class="contentBox">
                <div class="contentBoxTitle">
                    <h3>Accomplished</h3>
                </div>
                <div class="contentBoxBottom">123</div>
            </div>

            <div class="contentBox">
                <div class="contentBoxTitle">
                    <h3>In-Progress</h3>
                </div>
                <div class="contentBoxBottom">123</div>
            </div>

            <div class="contentBox">
                <div class="contentBoxTitle">
                    <h3>Upcoming</h3>
                </div>
                <div class="contentBoxBottom">123</div>
            </div>
        </div>


        <div class="three col">
            <div class="loader" id="loader-1"></div>
        </div>

        <script src="../js/loading.js "></script>
        @endsection

</body>

</html>



<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
