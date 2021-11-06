{{-- <!DOCTYPE html>
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
@endsection --> --}}

@extends('layouts.app')

@section('content')
    <h3>Advisory </h3>
    <div class="row">
        <div class="col-md-6">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <i class="fas fa-trash mr-2"></i>
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-success">
                    <i class="fas fa-trash mr-2"></i>
                    {{ session()->get('error') }}
                </div>
            @endif
        </div>
        <div class="col-md-6 mb-2">
            <a href="/technical-working-group/create">
                <button class="btn btn-primary float-right">Create New</button>
            </a>
        </div>
    </div>
    <table class="table table-striped table-bordered dt-responsive" style="width:100%" id="tchWrkGrpStakeHolder">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User ID</th>
                <th scope="col">Position</th>
                <th scope="col">Sector</th>
                <th scope="col">Other Title</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($advcons as $advcon)
                <tr>
                    <th scope="row"> {{ $advcon->id }}</th>
                    <td>{{ $advcon->user_id }}</td>
                    <td>{{ $advcon->position }}</td>
                    <td>{{ $advcon->sector }}</td>
                    <td>{{ $advcon->other_title }}</td>
                    <td>
                        <a href="/advisory-council/{{ $advcon->id }}/edit" class="btn btn-primary"><i
                                class="fas fa-pencil-alt"></i></a>
                        <form method="POST" action="/advisory-council/{{ $advcon->id }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger delete-user">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#tchWrkGrpStakeHolder').DataTable({
                lengthMenu: [
                    [10, 25, 50, -1],
                    ['10', '25', '50', 'All']
                ],
                dom: "<'row'<'col-md-6'B><'col-md-6'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                buttons: [{
                        extend: 'print',
                        text: '<i class="fas fa-print fa-1x"></i> Print',
                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fas fa-file-pdf fa-1x" aria-hidden="true"></i> PDF',
                    },
                    {
                        extend: 'excel',
                        text: '<i class="fas fa-file-excel" aria-hidden="true"></i> Excel',
                    },
                    'pageLength'
                ],
                responsive: true,
            });
        });
    </script>
@endsection
