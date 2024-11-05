@extends('layouts.Adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('เพิ่มข้อมูล') }}</div>

                <div class="card-body">
                <div class="col-md-12">
                    <a href="{{ route('world.index') }}" class="btn btn-primary">Back</a>
                </div>
                </div>
                    
<form action="{{ route('world.store') }}" method="post">
 @csrf
<div class="container">
<div class="col-md-8">
        <div class="form-group">
            <strong>วันที่</strong>
            <input type="date" name="w_date" class="form-control" 
placeholder="">
            
            
            <strong>round</strong>
            <select name="w_round" class="form-control">
                
                <option value="">Pools</option>
                <option value="Preliminary Phase">Preliminary Phase</option>
                <option value="Quarter Finals">Quarter Finals</option>
                <option value="Semi Finals">Semi Finals</option>
                <option value="3rd Place Game">3rd Place Game</option>
                <option value="Finals">Finals</option>

            </select>

            <strong>เวลา</strong>
            <input type="time" name="w_time" class="form-control"
placeholder="">

            <strong>กลุ่ม</strong>
            <select name="w_event" class="form-control">
                
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

            <strong>ทีม1</strong>
            <select name="w_teamone" class="form-control">

                <option value="">Team1</option>
                <option value="Argentina">Argentina</option>
                <option value="Belgium">Belgium</option>
                <option value="เบลเยี่ยม">เบลเยี่ยม</option>
                <option value="Brazil">Brazil</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Canada">Canada</option>
                <option value="China">China</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="Italy">Italy</option>
                <option value="Japan">Japan</option>
                <option value="Kenya">Kenya</option>
                <option value="Korea">Korea</option>
                <option value="Netherland">Netherland</option>
                <option value="Philipines">Philipines</option>
                <option value="Poland">Poland</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Serbia">Serbia</option>
                <option value="Sweden">Sweden</option>
                <option value="Thailand">Thailand</option>
                <option value="Türkiye">Türkiye</option>
                <option value="USA">USA</option>
                <option value="Vietnam">Vietnam</option>
            </select>

            <strong>คะแนน</strong>
            <input type="text" name="w_score" class="form-control"
placeholder="">

            <strong>ทีม2</strong>
            <select name="w_teamtwo" class="form-control">
                
            <option value="">Team2</option>
            <option value="Argentina">Argentina</option>
                <option value="Belgium">Belgium</option>
                <option value="Brazil">Brazil</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Canada">Canada</option>
                <option value="China">China</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="Italy">Italy</option>
                <option value="Japan">Japan</option>
                <option value="Kenya">Kenya</option>
                <option value="Korea">Korea</option>
                <option value="Netherland">Netherland</option>
                <option value="Philipines">Philipines</option>
                <option value="Poland">Poland</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Serbia">Serbia</option>
                <option value="Sweden">Sweden</option>
                <option value="Thailand">Thailand</option>
                <option value="Türkiye">Türkiye</option>
                <option value="USA">USA</option>
                <option value="Vietnam">Vietnam</option>
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
