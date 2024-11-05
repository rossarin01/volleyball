@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="card-header"> <a href="{{ route('event.create')}}"> เพิ่มข้อมูล</a> </div>

                    <div class="card-body">
                        <div class="col-md-12">
                            <table class="table table-borderd">
                                <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Event</th>
                                </tr>
                                @foreach ($data as $key =>$value)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $value->date}}</td>
                                    <td>{{ $value->event}}</td>
                                    <td>
                                        <form action="{{ route('event.destroy', $value->id)}}" method="post">
                                            <a href="{{ route('event.edit', $value->id) }}" class="btn btn-circle btn-edit">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-circle btn-delete" onclick="return confirm('Are you sure you want to delete this record?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
