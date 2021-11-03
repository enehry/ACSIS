<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/addadvisor.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    @section('content')
    <div class="workSpace">
        <div class="title1">
            <h3>Add Stakeholder</h3>
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
                        <br>
                        <div class="stakeholder-info">
                            <div class="sCategory">
                                Stakeholder Category<span class="required">*</span><br />

                                <div id="SCGgroup">
                                    <input type="radio" name="sc" value="2" />
                                    Advisory Council
                                    <br>

                                    <div id="SCGroup2" class="desc">
                                        <select id="acOffice" name="acOffice">
                                            <option value="option1">Select your office:</option>
                                            <option value="option2">Secondary Directorial Staff</option>
                                            <option value="option3">National Administrative Support Unit</option>
                                            <option value="option4">National Operations Support Unit</option>
                                            <option value="option5">Police Regional Office</option>
                                        </select>
                                    </div>

                                    <input type="radio" name="sc" value="3" />
                                    Technical Workng Group
                                    <br>

                                    <div id="SCGroup3" class="desc">
                                        <select id="acOffice" name="acOffice">
                                            <option value="option1">Select your office:</option>
                                            <option value="option2">Office 1</option>
                                            <option value="option3">Office 2</option>
                                            <option value="option4">Office 3</option>
                                            <option value="option5">Office 4</option>
                                        </select>
                                    </div>

                                    <input type="radio" name="sc" value="4" />
                                    Police Stategy Management Unit
                                    <br>
                                    <div id="SCGroup4" class="desc" style="display: none;">
                                        <select id="acOffice" name="acOffice">
                                            <option value="option1">Select your office:</option>
                                            <option value="option2">Office 1</option>
                                            <option value="option3">Office 2</option>
                                            <option value="option4">Office 3</option>
                                            <option value="option5">Office 4</option>
                                        </select>
                                    </div>
                                </div>

                                <br>
                                <h2>Basic Information</h2>
                                <hr />
                                <br>
                                <div class="basicInformation">
                                    <div class="name">
                                        <span class="Name">Name</span><span class="required">*</span><br>
                                        <input type="text" placeholder="Last Name" name="lName" required>
                                        <input type="text" placeholder="First Name" name="fName" required>
                                        <input type="text" placeholder="Middle Name" name="mName" required>
                                        <input type="text" placeholder="Suffix" name="suffix">
                                    </div>

                                    <div class="bday-sex">
                                        <div class="bday">
                                            <span class="bday">Birthday</span> <br />
                                            <input type="date" name="bday">
                                        </div>
                                        <div class="sex">
                                            Sex:<br />
                                            <input type="radio" name="sex" id="sex" value="male" required />
                                            <label for="male">Male</label>
                                            <input type="radio" name="sex" id="sex" value="female" required />
                                            <label for="female">Female</label>
                                        </div>
                                    </div>

                                    <div class="address">
                                        <span class="hAddress">Home Address</span><br>
                                        <input type="text" placeholder="House Number / Street / Subdivision" name="hNumber" required>
                                        <input type="text" placeholder="Barangay" name="Brgy" required>
                                        <input type="text" placeholder="City" name="city" required>
                                        <input type="text" placeholder="Province" name="province" required>
                                    </div>

                                    <div class="contactInfo">
                                        <div class="mobileN">
                                            <span class="mNumber">Mobile Number</span><br />

                                            <input type="number" placeholder="0999 999 9999" name="mNumber" required>

                                        </div>
                                        <div class="landlineN">
                                            <span class="lNumber">Landline Number</span><br />
                                            <input type="number" placeholder="0449988" name="lNumber">

                                        </div>
                                        <div class="email">
                                            <span class="eMail">Email Address</span><br />
                                            <input type="text" placeholder="acsis@gmail.com" name="eMail" required>
                                        </div>
                                    </div>

                                    <div class="addStakeholder">
                                        <input type="submit" value="Add Stakeholder">
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
