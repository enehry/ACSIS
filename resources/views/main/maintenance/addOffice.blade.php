<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/maintenance/addOffice.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    @section('content')
    <div class="workSpace">
        <div class="title1">
            <h3>Add Office</h3>
        </div>

        <div class="content1">

            <div class="centerBox">

                <form action="#">
                    <fieldset id="addAdvisor">
                        <legend>
                            <h2>Profile Information</h2>
                        </legend>

                        <h2>Office Information</h2>
                        <hr />

                        <div class="officeInformation">
                            <div class="offices">
                                <div class="pri">
                                    <span class="Name">Primary</span><br>
                                    <select id="acOffice" name="acOffice">
                                        <option value="option1">Select one</option>
                                        <option value="option2">Secondary Directorial Staff</option>
                                        <option value="option3">National Administrative Support Unit</option>
                                        <option value="option4">National Operations Support Unit</option>
                                        <option value="option5">Police Regional Office</option>
                                    </select>
                                </div>
                                <div class="sec">
                                    <span class="Name">Secondary</span><br>
                                    <select id="acOffice" name="acOffice">
                                        <option value="option1">Select one</option>
                                        <option value="option2">Secondary Directorial Staff</option>
                                        <option value="option3">National Administrative Support Unit</option>
                                        <option value="option4">National Operations Support Unit</option>
                                        <option value="option5">Police Regional Office</option>
                                    </select>
                                </div>
                                <div class="tert">
                                    <span class="Name">Tertiary</span><br>
                                    <select id="acOffice" name="acOffice">
                                        <option value="option1">Select one</option>
                                        <option value="option2">Secondary Directorial Staff</option>
                                        <option value="option3">National Administrative Support Unit</option>
                                        <option value="option4">National Operations Support Unit</option>
                                        <option value="option5">Police Regional Office</option>
                                    </select>
                                </div>
                                <div class="quarte">
                                    <span class="Name">Quartenary</span><br>
                                    <select id="acOffice" name="acOffice">
                                        <option value="option1">Select one</option>
                                        <option value="option2">Secondary Directorial Staff</option>
                                        <option value="option3">National Administrative Support Unit</option>
                                        <option value="option4">National Operations Support Unit</option>
                                        <option value="option5">Police Regional Office</option>
                                    </select>
                                </div>
                            </div>
                            <div class="categorycontrolno">
                                <div class="acate">
                                    <span class="Name">Add Category</span><br>
                                    <select id="acOffice" name="acOffice">
                                        <option value="option1">Select one</option>
                                        <option value="option2">Secondary Directorial Staff</option>
                                        <option value="option3">National Administrative Support Unit</option>
                                        <option value="option4">National Operations Support Unit</option>
                                        <option value="option5">Police Regional Office</option>
                                    </select>
                                </div>
                                <div class="cno">
                                    <span class="Name">Control Number</span><br>
                                    <select id="acOffice" name="acOffice">
                                        <option value="option1">Select one</option>
                                        <option value="option2">Secondary Directorial Staff</option>
                                        <option value="option3">National Administrative Support Unit</option>
                                        <option value="option4">National Operations Support Unit</option>
                                        <option value="option5">Police Regional Office</option>
                                    </select>
                                </div>
                                <div class="cateempty"></div>
                                <div class="cateempty"></div>
                            </div>

                            <div class="desc">
                                <span class="Name">Description</span><br>
                                <textarea rows="4" cols="50"></textarea>
                            </div>
                        </div>


                    </fieldset>

                </form>

            </div>

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
