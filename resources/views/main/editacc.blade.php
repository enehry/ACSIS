@extends('layouts.app')

@section('assets')
<link rel="stylesheet" href="../css/editAccount.css">
@endsection

@section('title', 'Edit Account')
@section('content')

<div class="title1">
            <h3>Edit Account</h3>
        </div>

        <div class="content1">

            <form action="" class="editAccountForm">

                <div class="name1 inputs">one</div>
                <div class="name2 inputs">two</div>
                <div class="oldPassword inputs">three</div>
                <div class="newPassword inputs">four</div>
                <div class="retypeNewPassword inputs">five</div>
                <div class="buttons">
                    <div class="bCenter">
                        <button type="submit">Submit</button>
                        <button>Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection