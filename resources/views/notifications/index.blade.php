@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>Notifications</h4>
        </div>
        <div class="panel-body">
          @if(count($notifications) > 0)
          @foreach($notifications as $notification)
          @if($notification->meeting)
          <div class="card mb-2">

            <div class="card-body">
              <h5 class="card-title"> {{ $notification->title }}</h5>
              <p class="card-text">{{$notification->description }} @ {{ $notification->meeting->when }}</p>
              <a href="create-meetings/{{ $notification->table_id }}">
                <p class="card-text">Title @ {{ $notification->meeting->what }}</p>
              </a>
            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                  <div class="icon mr-2"><span>
                      @if($notification->meeting->user->avatar != null)
                      <img style="height: 40px;" class="rounded-circle border border-light" src="{{ $notification->meeting->user->avatar }}" alt="Avatar" class="avatar">
                      @else
                      <img style="height: 40px;" class="rounded-circle border border-light" src="https://avatars.dicebear.com/api/initials/{{$notification->meeting->user->fname}}.svg?background=%23211838">
                      @endif
                    </span>
                  </div>
                  <div class="ms-2 c-details">
                    <h6 class="mb-0">{{ $notification->meeting->user->fname }} {{ $notification->meeting->user->lname }}</h6> <small class="-mt-2">created {{ $notification->created_at->diffForHumans() }}</small>
                  </div>
                </div>
                <a href="{{ route('notification.viewed', $notification->id) }}">
                  <button class="btn btn-sm"> <small>Mark as read</small> </button>
                </a>
              </div>
            </div>
          </div>
          @endif


          @endforeach
          @else
          <p>You have no notifications</p>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection