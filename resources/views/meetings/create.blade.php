{{-- @section('content')
    {{-- <div class="workSpace">
        <div class="title1">
            <h3>Create Meeting</h3>
        </div>

        {{-- <div class="content1">
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
    </div> --
    <div class="jumbotron">
        <h2>Create Meetings</h2>
    </div>
    <div class="row">
        <div>
            <form method="post">

                <input type="text" required name="who">
                <span class="Name">Who</span><span class="required">*</span><br>
                <input type="text" required name="what">
                <span class="Name">What</span><span class="required">*</span><br>
                <input type="date" required name="when">
                <span class="Name">When</span><span class="required">*</span><br><br>
                <input type="text" required name="where">
                <span class="Name">Where</span><span class="required">*</span><br>
                <input type="text" required name="why">
                <span class="Name">Why</span><span class="required">*</span><br>
                <input type="text" required name="how">
                <span class="Name">How</span><span class="required">*</span><br>
                <span class="Name">Description</span><span class="required">*</span><br>
                <input type="text" name="description"><br>
                <span class="Name">User ID</span><span class="required">*</span><br>
                <input type="number" name="user_id" placeholder="temp sample user_id">
                {{-- <input type="text" name="description"> --


                <div class="button">
                    <button type="submit" class="button pointer ripple"><span>Create Meeting</span></button>
                </div>
            </form>
        </div>
        <div style="padding: 18px; margin-left:18px; background-color: grey; width: 70%;">
            display table here
        </div>
    </div>



    <script src="../js/loading.js "></script>

@endsection --}}

@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Create Students
                </div>
                <div class="card-body">
                    <form action="{{ route('create-meetings.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="">What</label>
                            <input type="text" class="form-control" name="what">
                        </div>
                        <div class="form-group">
                            <label for="">When</label>
                            <input type="text" class="form-control" name="when">
                        </div>
                        <div class="form-group">
                            <label for="">Where</label>
                            <input type="text" class="form-control" name="where">
                        </div>
                        <div class="form-group">
                            <label for="">Who</label>
                            <input type="text" class="form-control" name="who">
                        </div>
                        <div class="form-group">
                            <label for="">Why</label>
                            <input type="text" class="form-control" name="why">
                        </div>
                        <div class="form-group">
                            <label for="">How</label>
                            <input type="text" class="form-control" name="how">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" class="form-control" name="description">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
