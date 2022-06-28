@extends('layouts.voice-tv.master.amp')
@section('customjs')

@endsection
@section('customCss')

@endsection
@section('content')
    <!-- header -->
    @include('layouts.voice-tv.widgets.header')
    <!-- header End -->
    <main class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-section">
                          <h4><b>Welcome to Voice Television.</b></h4> 
                          <p>The number one online news portal in Bangladesh</p> 
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    @include('layouts.voice-tv.widgets.footer')
    <!-- footer End-->
@endsection