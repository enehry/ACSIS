@extends('layouts.app')

@section('content')
    <div class="container1">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Meeting Details

                    </div>
                    <div class="content1">
                        <form method="POST" action="{{ route('create-meetings.update', $meeting->id) }}">
                            @csrf
                            {{ method_field('PUT') }}

                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    {{ session()->get('message') }}
                                    {{-- <a class="float-right" href="/technical-working-group">Back to Meetings List</a> --}}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-4">
                                    {{-- <div class="col-md-4"><input class="@error('password') is-invalid @enderror"
                                        type="password" placeholder="password" name="password" required
                                        value="{{ old('password') }}"></div> --}}
                                    <div class="form-group">
                                        <br />What<span class="required">*</span><br />
                                        <input type="text" class="form-control" name="what"
                                            value="{{ $meeting->what }}">
                                    </div>
                                    <div class=" form-group">
                                        <br />Where<span class="required">*</span><br />
                                        <input type="text" class="form-control" name="where"
                                            value="{{ $meeting->where }}">
                                    </div>
                                    <div class=" form-group">
                                        <br />When<span class="required">*</span><br />
                                        <input type="date" class="form-control" name="when"
                                            value="{{ $meeting->when }}">
                                    </div>
                                    <div class="form-group">
                                        <br />Who<span class="required">*</span><br />
                                        <input type="text" class="form-control" name="who" value="{{ $meeting->who }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <br />Why<span class="required">*</span><br />
                                        <input type="text" class="form-control" name="why" value="{{ $meeting->why }}">
                                    </div>
                                    <div class="form-group">
                                        <br />How<span class="required">*</span><br />
                                        <input type="text" class="form-control" name="how" value="{{ $meeting->how }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <br />Description<span class="required">*</span><br />
                                        <input type="text" class="form-control" name="description" style="height: 300px"
                                            value="{{ $meeting->description }}">
                                    </div>
                                </div>

                            </div>

                    </div>
                    </fieldset>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    {{-- <button type="submit" class="button pointer ripple" data-dismiss="modal"><span>Create
                                            Meeting</span></button> --}}
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
