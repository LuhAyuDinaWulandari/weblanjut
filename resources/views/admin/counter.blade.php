@extends('layouts.tes')
@section('content')
<div class="panel">
     <div class="panel-body">
         <div class="col lg 12">
         <h1> Daftar Pembeli</h1>
        <table class="table bordered">
            <tr>
                <td width="400"><br> BIODATA</br></td>
                <td><br> STUDI KASUS</br></td>

            </tr>
            <tr>
                <td><br> NAMA  : LUH AYU DINA WULANDARI</br></td>
                <td><br> JUDUL : Sistem Manajemen Counter Pulsa(SJubel)</br></td>

            </tr>
            <tr>
                <td><br> NIM  : 1815051111</br></td>
                <td><br> PENJELASAN : Sistem Counter Pulsa merupakan suatu toko yang mudah diakses, untuk melayani pembelian pulsa </br></td>

            </tr>
            <tr>
                <td><br> PROGRAM STUDI : PENDIDIKAN TEKNIK INFORMATIKA</br></td>
                <td><br> </br></td>

            </tr>
        </table>

    </div>
    </div>
    <div class="col lg 12">
        <a href="{{route('counter.create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
                <tr><th>No</th><th>Id_pembeli</th><th>Nama_pembeli</th><th>No_hp</th></tr>
            </thead>
            <tbody>
                @foreach ( $tesconten as $in=>$val )
                <tr>
                <td>{{($in+1)}}</td><td> {{$val->id_pembeli}}</td><td>{{$val->nama_pembeli}}</td><td>{{$val->no_hp}}</td>
            </tr>
            <td>
           <a href = "{{route('counter.edit',$val->id_pembeli)}}">Update</a>
                   <form action="{{route('counter.destroy',$val->id_pembeli)}}"method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit">Delete</button>
                   </form>
                   </td>
                   </tr>

               
                @endforeach
            </tbody>
        </table>
        {{$tesconten->links()}}
    </div>
    </div>
 </div>
@endsection
