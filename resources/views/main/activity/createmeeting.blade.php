<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/createmeeting.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    @section('content')
    <div class="workSpace">
        <div class="title1">
            <h3>Create Meeting</h3>
        </div>

        <div class="content1">
            <div class="contentBox">
                <div class="contentBoxTitle">
                    <div class="fivews">
                        <span class="Name">Who</span><span class="required">*</span><br>
                        <input type="text" required>
                        <span class="Name">What</span><span class="required">*</span><br>
                        <input type="text" required>
                        <span class="Name">When</span><span class="required">*</span><br>
                        <input type="text" required>
                        <span class="Name">Where</span><span class="required">*</span><br>
                        <input type="text" required>
                        <span class="Name">Why</span><span class="required">*</span><br>
                        <input type="text" required>
                    </div>
                    <div class="afterfivews">
                        <span class="Name">How</span><span class="required">*</span><br>
                        <input type="text" required><br />
                        <span class="Name">Description</span><span class="required">*</span><br>
                        <textarea id="textArea" name="textArea" rows="4" cols="36" placeholder="Type here..."></textarea>
                        <div class="button">
                            <button type="submit" class="button pointer ripple"><span>Create Meeting</span></button>
                        </div>
                    </div>
                </div>
                <div class="contentBoxBottom">
                    adsf
                </div>
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
