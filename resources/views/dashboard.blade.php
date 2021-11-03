@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

    <div class="workSpace">
<!--         <div class="title1">
            <h3>Dashboard</h3>
        </div>
        <div class="content1">
            <div class="top">
                <div class="left">
                    Temporary Space Chart 1
                </div>
                <div class="right">
                    Temporary Space Chart 2
                </div>
            </div>
            <div class="bottom">
                <div class="bottomBox contentBox">
                    <div class="boxTitle contentBoxTitle">
                        <h3>New Stakeholders</h3>
                    </div>
                    <div class="boxNumbers contentBoxBottom">
                        <h1>123</h1>
                    </div>
                </div>

                <div class="bottomBox contentBox">
                    <div class="boxTitle contentBoxTitle">
                        <h3>Total Projects</h3>
                    </div>
                    <div class="boxNumbers contentBoxBottom">

                    </div>
                </div>

                <div class="bottomBox contentBox">
                    <div class="boxTitle contentBoxTitle">
                        <h3>Total Unit Offices</h3>
                    </div>
                    <div class="boxNumbers contentBoxBottom">
                        <h1>123</h1>
                    </div>
                </div>
            </div>
        </div> -->

        <canvas id="myChart" width="400" height="400"></canvas>

    </div>

    <div class="three col">
        <div class="loader" id="loader-1"></div>
    </div>

    <script src="../js/loading.js "></script>

@endsection
