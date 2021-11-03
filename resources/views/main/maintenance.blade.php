<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/maintenance.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
</head>

<body>

    @section('content')
    <div class="workSpace">
        <div class="title1">
            <h3>Maintenance</h3>
        </div>

        <div class="content1">


            <div class="box1">

                <div class="contentBox topbox">
                    <div class="contentBoxTitle">
                        <h3>Advisory Council (AC)</h3>
                    </div>
                    <div class="contentBoxBottom">


                        <table>
                            <tbody>
                                <tr>
                                    <td>Primary Unit/Office</td>
                                </tr>
                                <tr>
                                    <td>Secondary Unit/Office</td>
                                </tr>
                                <tr>
                                    <td>Tertiary Unit/Office</td>
                                </tr>
                                <tr>
                                    <td>Querternary Unit/Office</td>
                                </tr>
                                <tr>
                                    <td>Advisory Council Position</td>
                                </tr>
                                <tr>
                                    <td>Advisory Council Sector</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="contentBox bottombox">
                    <div class="contentBoxTitle">
                        <h3>PSMU & TWG</h3>
                    </div>
                    <div class="contentBoxBottom">


                        <table>
                            <tbody>
                                <tr>
                                    <td>Advisory Council Sector</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>

            <div class="box2">

                <div class="box2 contentBox">
                    <div class="contentBoxTitle">
                        <h3>Primary Unit/Office</h3>
                    </div>
                    <div class="boxbottom2 contentBoxBottom">

                        <div class="left">

                            <div class="primaryOffice">
                                Primary Office<span class="required">*</span>
                            </div>

                            <div class="description">
                                Description
                            </div>
                        </div>
                        <div class="right">

                            <div class="right1">
                                <input type="text" placeholder="Enter Primary Office Name e.g. PP">
                            </div>

                            <div class="right2">
                                <textarea id="textArea" name="textArea" rows="4" cols="36" placeholder="Type here..."></textarea>
                            </div>

                            <div class="right3">
                                <input type="checkbox" name="hasSecondary" id="hasSecondary" value="hasSecondary" required />
                                <label for="hasSecondary">Has Secondary</label>
                            </div>

                            <div class="right4">
                                <input type="submit" value="Save">
                                <button>Cancel</button>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <div class="box3">

                <div class="contentBox">
                    <div class="contentBoxTitle">
                        <h3>Testing</h3>
                    </div>
                    <div class="contentBoxBottom">

                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Primary Office Name</th>
                                    <th>Description</th>
                                    <th>Has Secondary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Christian</td>
                                    <td>Paolo</td>
                                    <td>Dagdag</td>
                                </tr>
                                <tr>
                                    <td>Dagdag</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>
                                    <td>Paolo</td>
                                    <td>Row 2 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                            </tbody>
                        </table>

                        <script>
                            $(document).ready(function() {
                                $('#table_id').DataTable();
                            });
                        </script>

                    </div>
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
