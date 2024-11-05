@extends('layouts.adminapp')

        @section('content')
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">{{ __('รายละเอียดข้อมูล :') }}</div>
        @if($message = Session::get('success'))
        <div class="alert alert-success">
        <p> {{$message}} </p>
        </div>
        @endif
        <div class="card-header"> <a href="{{ route('event.create')
        }}"> </a> </div>

        <div class="card-body">
        <div class="col-md-12">

        <h2>รายละเอียดข้อมูล</h2>
        <a href="{{ route('event.index') }}" class="btn btn-primary">Back</a>
        </div>
        </div>

        <div class="col-md-12">
        <div class="card p-3">
        <div class="card-title">
        <strong>วันที่:</strong>
        {{ $event->w_date }}
        </div>


        <div class="card-title">
        <strong>อีเว้นท์การแข่งขัน:</strong>
        {{ $event->w_event }}
        </div>


        </div>

        </div>

        </div>
        </div>
        </div>
        </div>
        </div>
        @endsection