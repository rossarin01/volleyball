@extends('layouts.Adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



            <div class="row justify-content-center">
                        <div class="col-md-15 mx-auto text-center">
                            <img src="{{ asset('images/ball02.jpg') }}" alt="Image 1" class="img-fluid" style="max-width780px; max-height: 500px;">
                        </div>
                    </div> 
                    </div>
            </div>
        </div>
    </div>
 

</div>
@endsection
