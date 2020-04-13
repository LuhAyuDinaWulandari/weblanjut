@extends('layouts.admin')
@section('content')
<div class="panel">
<form action="{{(isset($counter))?counter('counter.update',$counter->id_pembeli):route('counter.store')}}" method="POST">
@csrf
@if(isset($counter))?@method('PUT')@endif
     <div class="panel-body">
          <h1> Input Pembeli</h1>
          <div class="form-group">
          <label class="col-sm-2 control-label text-right">Id Pembeli</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($counter))?$counter->id_pembeli:old('id_pembeli')}}" name="id_pembeli" class="form-control"></div>
                @error('id_pembeli')<small style="color:red">{{$message}}</small>@enderror
          </div>
          <div class="form-group">
          <label class="col-sm-2 control-label text-right">Nama Pembeli</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($counter))?$counter->nama:old('nama')}}" name="nama" class="form-control"></div>
                @error('nama_pembeli')<small style="color:red">{{$message}}</small>@enderror
          </div>
                <div class="form-group"><label class="col-sm-2 control-label text-right">No Hp</label>
                     <div class="col-sm-10"><input type="text"  value="{{(isset($counter))?$counter->no_hp:old('no_hp')}}" name="no_hp" class="form-control"></div>
                 </div>
                 @error('no_hp')<small style="color :red">{{$message}}</small>@enderror
                <div class="form-group">
                    <button type="submit">Simpan</button>
                </div>

    </div>
    </form>
    </div>
    @endsection
