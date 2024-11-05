@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="card-header">
                        <a href="{{ route('world.create') }}"> เพิ่มข้อมูล</a>
                    </div>

                    <div class="card-body">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Round</th>
                                    <th>Time</th>
                                    <th>Team1</th>
                                    <th>Score</th>
                                    <th>Team2</th>
                                    <th>Event</th>
                                </tr>
                                @foreach ($data as $key => $value)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $value->w_date }}</td>
                                    <td>{{ $value->w_round }}</td>
                                    <td>{{ $value->w_time }}</td>
                                    <td>{{ $value->w_teamone }}</td>
                                    <td>{{ $value->w_score }}</td>
                                    <td>{{ $value->w_teamtwo }}</td>
                                    <td>{{ $value->w_event }}</td>
                                    <td>
                                        <form action="{{ route('world.destroy', $value->id) }}" method="post">
                                            <a href="{{ route('world.edit', $value->id) }}" class="btn btn-circle btn-edit">Edit</a>
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
