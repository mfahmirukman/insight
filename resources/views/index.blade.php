@extends('layouts.app')

@section('content')



    <div class="container-fluid" id="header">
        <div class="row" style="margin-top:100px">
            <h1>Delve into the world of Insight!</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4" id="left">
                    <img src="/images/firewatchleft.jpg">
                </div>


                <div class="col-md-4" id="center">
                    <img src="/images/firewatchcenter.jpg">
                </div>

                <div class="col-md-4" id="right">
                    <img src="/images/firewatchright.jpg">

                </div>
            </div>
        </div>
        <div class="row">
            <img src="/images/watertemple.png" style="margin-top:-500px;z-index:2000; display:inline">
        </div>
    </div>

    <div class="container-fluid" id="menu2">
        <div class="row" style="background-image:'/images/watertemple.png'; max-height: 100%; height: 80%;clear:left">

        </div>
    </div>



        

    
@endsection('content')