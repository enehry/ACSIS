@extends('layouts.app')

@section('content')
    <div class="container1">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Meeting Details

                    </div>
                    <table id="mytable" class="display">
                        <thead>
                            <tr>
                                <th>What</th>
                                <th>When</th>
                                <th>Where</th>
                                <th>Who</th>
                                <th>Why</th>
                                <th>How</th>
                                <th>Description</th>
                                <th colspan="3"> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($meetings as $meeting)
                                <tr>
                                    <td>{{ $meeting->what }}</td>
                                    <td>{{ $meeting->when }}</td>
                                    <td>{{ $meeting->where }}</td>
                                    <td>{{ $meeting->who }}</td>
                                    <td>{{ $meeting->why }}</td>
                                    <td>{{ $meeting->how }}</td>
                                    <td>{{ $meeting->description }}</td>
                                    <td><a href="/create-meetings/{{ $meeting->id }}" class="btn btn-info btn-sm">View</a>
                                    </td>
                                    <td><a href="/create-meetings/{{ $meeting->id }}/edit"
                                            class="btn btn-warning btn-sm">Edit</a></td>
                                    <td>
                                        <form action="{{ route('create-meetings.destroy', $meeting->id) }}" method="POST">
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
@endsection
