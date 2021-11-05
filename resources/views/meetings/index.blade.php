{{-- @extends('layouts.app')

@section('content')
    <div class="container1">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Meeting List
                        <a href="/create-meetings/create" class="btn btn-primary btn-xs float-right">Add Meeting</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>What</th>
                                    <th>When</th>
                                    {{-- <th>Where</th> -
                                    <th>Who</th>
                                    {{-- <th>Why</th> --}}
{{-- <th>How</th> --}}
{{-- <th>Description</th> 
                                    <th colspan="3"> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($meetings as $meeting)
                                    <tr>
                                        <td>{{ $meeting->what }}</td>
                                        <td>{{ $meeting->when }}</td>
                                        <td>{{ $meeting->who }}</td>
                                        <td><a href="/create-meetings/{{ $meeting->id }}"
                                                class="btn btn-info btn-sm">View</a>
                                        </td>
                                        <td><a href="/create-meetings/{{ $meeting->id }}/edit"
                                                class="btn btn-warning btn-sm">Edit</a></td>
                                        <td>
                                            <form action="{{ route('create-meetings.destroy', $meeting->id) }}"
                                                method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
@extends('layouts.app')

@section('content')

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
        <!-- Button trigger modal -->
        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
        </button> --}}

        <!-- Modal -->
        {{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <table class="table table-striped table-bordered dt-responsive" style="width:100%" id="actMeetings">
        <thead>
            <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">What</th>
                <th scope="col">When</th>
                <th scope="col">Where</th>
                <th scope="col">Who</th>
                <th scope="col">Why</th>
                <th scope="col">How</th>
                <th scope="col">Description</th>
                {{-- <th scope="col">Address</th>
                <th scope="col">bday</th>
                <th scope="col">position</th>
                <th scope="col">sector</th>
                <th scope="col">Actions</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($meetings as $meeting)
                <tr>
                    {{-- <th scope="row"> {{ $meeting->id }}</th> --}}
                    <td>{{ $meeting->what }}</td>
                    <td>{{ $meeting->where }}</td>
                    <td>{{ $meeting->when }}</td>
                    <td>{{ $meeting->who }}</td>
                    <td>{{ $meeting->why }}</td>
                    <td>{{ $meeting->how }}</td>
                    <td>{{ $meeting->description }}</td>
                    <td>
                        <a href="/create-meetings/edit/{{ $meeting->id }}" class="btn btn-primary"><i
                                class="fas fa-pencil-alt"></i></a>
                        <form method="POST" action="/create-meetings/delete/{{ $meeting->id }}">
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
            $('#actMeetings').DataTable({
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
