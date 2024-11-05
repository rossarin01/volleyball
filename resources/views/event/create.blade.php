@extends('layouts.Adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('เพิ่มข้อมูล') }}</div>

                <div class="card-body">
                <div class="col-md-12">
                    <a href="{{ route('event.index') }}" class="btn btn-primary">Back</a>
                </div>
                </div>
                    
<form action="{{ route('event.store') }}" method="post">
 @csrf
<div class="container">
<div class="col-md-8">
        <div class="form-group">
            <strong>วันที่</strong>
            <input type="text" name="date" class="form-control"
placeholder="">
            <strong>อีเว้นท์การแข่งขัน</strong>
            <select name="event" class="form-control">
                
                <option value="">Event</option>
                <option value="Volleyball Challenger Cup">Volleyball Challenger Cup</option>
                <option value="Volleyball Nations League">Volleyball Nations League</option>
                <option value="Volleyball Olympic Games Paris 2024">Volleyball Olympic Games Paris 2024</option>
                <option value="Poland Volleyball Friendly International">Poland Volleyball Friendly International</option>
                <option value="Volleyball World Championship">Volleyball World Championship</option>
                <option value="Volleyball Club World Championship">Volleyball Club World Championship</option>
                <option value="Volleyball European Championship">Volleyball European Championship</option>
                <option value="Volleyball Champions League">Volleyball Champions League</option>
                <option value="Volleyball CEV Cup">Volleyball CEV Cup</option>
                <option value="Volleyball Challenge Cup">Volleyball Challenge Cup</option>
                <option value="Volleyball Golden Europion League">Volleyball Golden Europion League</option>
                <option value="Volleyball Silver Europion League">Volleyball Silver Europion League</option>
                <option value="Volleyball Asian Championship">Volleyball Asian Championship</option>
                <option value="Volleyball Asian Cup">Volleyball Asian Cup</option>
                <option value="Volleyball Asian Game">Volleyball Asian Game</option>
                <option value="Volleyball Southeast Asian Game">Volleyball Southeast Asian Game</option>
                <option value="Volleyball AVC Challenge Cup">Volleyball AVC Challenge Cup</option>
                <option value="China Volleyball">China Volleyball</option>
                <option value="Volleyball SuperLega">Volleyball SuperLega</option>
                <option value="Volleyball Serie A1">Volleyball Serie A1</option>
                <option value="Volleyball Serie A2">Volleyball Serie A2</option>
                <option value="Volleyball Coppa Italia A1">Volleyball Coppa Italia A1</option>
                <option value="Volleyball Coppa Italia A2">Volleyball Coppa Italia A2</option>
                <option value="Volleyball Super Cup">Volleyball Super Cup</option>
                <option value="Volleyball Super Cup A2">Volleyball Super Cup A2</option>
                <option value="Japan Volleyball League">Japan Volleyball League</option>
                <option value="Korea Volleyball League">Korea Volleyball League</option>
                <option value="KOVO Cup">KOVO Cup</option>
            
            </select>
             </div>
         </div>
    </div>
    <div class="container">
         <button type="submit" class="btn btn-primary">submit</button>
        </div>
        <br>


    </form>
        
         



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
