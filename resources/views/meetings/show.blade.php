@extends('layouts.app')

@section('content')
    <div class="container1">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Meeting Details

                    </div>
                    <div class="card-body">
                        <div class="container">
                            What: {{ $meeting->what }} <br>
                            Where: {{ $meeting->where }} <br>
                            When: {{ $meeting->when }} <br>
                            Who: {{ $meeting->who }} <br>
                            Why: {{ $meeting->why }} <br>
                            How: {{ $meeting->how }} <br>
                            Description: {{ $meeting->description }} <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
