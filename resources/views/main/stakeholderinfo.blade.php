<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/stakeholderinfo.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    @section('content')
    <div class="workSpace">
        <div class="title1">
            <h3>Stakeholder Information</h3>
        </div>
        <div class="content1">

            <div class="centerBox">

                <form action="#">

                    <fieldset id="addAdvisor">

                        <legend>
                            <h2>Information</h2>
                        </legend>

                        <div class="stakeholder-info">
                            <div class="sCategory">
                                Stakeholder Category<span class="required">*</span><br />

                                <input type="radio" name="stakeholderCategory" id="stakeholderCategory" value="ac" required />
                                <label for="male">Advisory Council</label><br />

                                <input type="radio" name="stakeholderCategory" id="stakeholderCategory" value="psmu" required />
                                <label for="female">Technical Working Group</label><br />


                                <input type="radio" name="stakeholderCategory" id="stakeholderCategory" value="psmu" required />
                                <label for="female">Police Stategy Management Unit</label>

                            </div>

                            <div class="duration">
                                Duration<br />

                                Start Date<br />
                                <input type="date" name="start date" required>
                            </div>

                            <div class="acPosition">
                                AC Position<span class="required">*</span><br />
                                <select id="ac-post" name="ac-post">
                                    <option selected="selected">Select One</option>
                                    <option value="post1">Position 1</option>
                                    <option value="post2">Position 2</option>
                                    <option value="post3">Position 3</option>
                                </select>
                            </div>

                            <div class="office">

                                <div class="officeName">

                                    Office Name<br />
                                    <input type="text" placeholder="e.g. ACSIS Department" name="office-number">
                                </div>

                                <div class="officeAdd">
                                    Office Address<br />
                                    <input type="text" placeholder="Street Address / Barangay / City" name="office-address">
                                </div>

                            </div>

                            <div class="units">
                                <div class="one">

                                    <div class="primary">
                                        Office Primary Unit<br />
                                        <select id="primary-info" name="primary-info">
                                            <option value="" disabled selected>Select Office</option>
                                            <option value="office1">Office 1</option>
                                            <option value="office2">Office 2</option>
                                            <option value="office3">Office 3</option>
                                        </select>
                                    </div>

                                    <div class="secondary">
                                        Office Secondary Unit<br />
                                        <select id="secondary-info" name="secondary-info">
                                            <option value="" disabled selected>Select Office</option>
                                            <option value="office1">Office 1</option>
                                            <option value="office2">Office 2</option>
                                            <option value="office3">Office 3</option>
                                        </select>
                                    </div>


                                </div>



                                <div class="two">

                                    <div class="teriary">
                                        Office Tertiary Unit<br />
                                        <select id="tertiary-info" name="tertiary-info">
                                            <option value="" disabled selected>Select Office</option>
                                            <option value="office1">Office 1</option>
                                            <option value="office2">Office 2</option>
                                            <option value="office3">Office 3</option>
                                        </select>
                                    </div>

                                    <div class="quarternary">
                                        Office Quarternary Unit<br />
                                        <select id="quarternary-info" name="quarternary-info">
                                            <option value="" disabled selected>Select Office</option>
                                            <option value="office1">Office 1</option>
                                            <option value="office2">Office 2</option>
                                            <option value="office3">Office 3</option>
                                        </select>
                                    </div>



                                </div>

                            </div>

                            <div class="submitButton">

                                <input type="submit" value="Submit">
                            </div>

                        </div>

                    </fieldset>

                </form>

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
