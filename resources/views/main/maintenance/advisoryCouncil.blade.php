<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/maintenance/advisoryCouncil.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    @section('content')
    <div class="workSpace">
        <div class="title1">
            <h3>Advisory Council</h3>
        </div>

        <div class="content1">

            <div class="centerBox">

                <form action="#">
                    <fieldset id="addAdvisor">
                        <legend>
                            <h2>Profile Information</h2>
                        </legend>

                        <h2>Stakeholder Information</h2>
                        <hr />
                        <br />

                        Add Category<span class="required">*</span><br />
                        <div class="addCate">
                            <div class="acPos">
                                <span class="Name">AC Position</span><span class="required">*</span><br>
                                <select id="acOffice" name="acOffice">
                                    <option value="" disabled selected>Select One</option>
                                    <option value="option1">Select your office:</option>
                                    <option value="option2">Secondary Directorial Staff</option>
                                    <option value="option3">National Administrative Support Unit</option>
                                    <option value="option4">National Operations Support Unit</option>
                                    <option value="option5">Police Regional Office</option>
                                </select>
                            </div>

                            <div class="acSec">
                                <span class="Name">AC Sector</span><span class="required">*</span><br>
                                <select id="acOffice" name="acOffice">
                                <option value="" disabled selected>Select One</option>
                                    <option value="option1">Select your office:</option>
                                    <option value="option2">Secondary Directorial Staff</option>
                                    <option value="option3">National Administrative Support Unit</option>
                                    <option value="option4">National Operations Support Unit</option>
                                    <option value="option5">Police Regional Office</option>
                                </select>
                            </div>

                            <div class="oTitle">
                                <span class="Name">Other Title</span><br>
                                <input type="text" placeholder="Last Name" name="lName" required>
                            </div>
                        </div>
                        <br />

                        <h2>Basic Information</h2>
                        <hr />

                        <div class="basicInformation">
                            <div class="name">

                                <span class="Name">Name</span><span class="required">*</span><br>
                                <input type="text" placeholder="Last Name" name="lName" required>
                                <input type="text" placeholder="First Name" name="lName" required>
                                <input type="text" placeholder="Middle Name" name="lName" required>
                                <input type="text" placeholder="Suffix" name="lName" required>

                            </div>
                            <div class="bday-sex">



                                <div class="bday">
                                    <span class="Name">Birthday:</span> <br />
                                    <input type="date" name="bday">
                                </div>
                                <div class="sex">
                                    <span class="Name">Sex:</span> <br />
                                    <select id="acOffice" name="acOffice placeholder">
                                        <option value="option1">Select sex</option>
                                        <option value="option2">Male</option>
                                        <option value="option3">Female</option>
                                    </select>
                                </div>
                                <div class="bsempty">

                                </div>
                                <div class="bsempty">

                                </div>
                                <div class="bsempty">

                                </div>

                            </div>
                            <div class="haddress">
                                <div class="hnumber">
                                    <span class="Name">Home Address/Office Address</span><br>
                                    <input type="text" placeholder="Number / Street / Subdivision" name="lName" required>
                                </div>
                                <div class="brngy">
                                    <span class="Name"> </span><br>
                                    <input type="text" placeholder="Barangay" name="lName" required>
                                </div>
                                <div class="city">
                                    <span class="Name"> </span><br><input type="text" placeholder="City" name="lName" required>
                                </div>
                                <div class="province">
                                    <span class="Name"> </span><br>
                                    <input type="text" placeholder="Province" name="lName" required>
                                </div>
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
