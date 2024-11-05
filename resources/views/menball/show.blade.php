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
        <div class="card-header"> <a href="{{ route('menball.create')
        }}"> </a> </div>

        <div class="card-body">
        <div class="col-md-12">

        <h2>รายละเอียดข้อมูล</h2>
        <a href="{{ route('menball.index') }}" class="btn btn-primary">Back</a>
        </div>
        </div>

        <div class="col-md-12">
        <div class="card p-3">
        <div class="card-title">
        <strong>วันที่:</strong>
        {{ $menball->date }}
        </div>

        <div class="card-title">
        <strong>round:</strong>
        {{ $menball->round }}
        </div>

        <div class="card-title">
        <strong>เวลา:</strong>
        {{ $menball->time }}
        </div>

        <div class="card-title">
        <strong>กลุ่ม:</strong>
        {{ $menball->event }}
        </div>

        <div class="card-title">

        <strong>ทีม1:</strong>
        {{ $menball->teamone }}
        </div>

        <strong>คะแนน:</strong>
        {{ $menball->score }}
        </div>

        <div class="card-title">
        <strong>ทีม2:</strong>
        {{ $menball->teamtwo }}
        </div>

        </div>

        </div>

        </div>
        </div>
        </div>
        </div>
        </div>
        @endsection