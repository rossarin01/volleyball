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
        <div class="card-header"> <a href="{{ route('world.create')
        }}"> </a> </div>

        <div class="card-body">
        <div class="col-md-12">

        <h2>รายละเอียดข้อมูล</h2>
        <a href="{{ route('world.index') }}" class="btn btn-primary">Back</a>
        </div>
        </div>

        <div class="col-md-12">
        <div class="card p-3">
        <div class="card-title">
        <strong>วันที่:</strong>
        {{ $world->w_date }}
        </div>

        <div class="card-title">
        <strong>round:</strong>
        {{ $world->w_round }}
        </div>


        <div class="card-title">
        <strong>เวลา:</strong>
        {{ $world->w_time }}
        </div>

        <div class="card-title">
        <strong>กลุ่ม:</strong>
        {{ $world->w_event }}
        </div>

        <div class="card-title">

        <strong>ทีม1:</strong>
        {{ $world->w_teamone }}
        </div>

        <strong>คะแนน:</strong>
        {{ $world->w_score }}
        </div>

        <div class="card-title">
        <strong>ทีม2:</strong>
        {{ $world->w_teamtwo }}
        </div>

        </div>

        </div>

        </div>
        </div>
        </div>
        </div>
        </div>
        @endsection