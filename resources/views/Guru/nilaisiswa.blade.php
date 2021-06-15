@extends('layout.templateuser')
@extends('layout.navbardashboard')

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@stop

<!-- untuk mengirimkan title ke template -->
@section('tittle','VIEW SISWA')
<!-- untuk mengirimkan isi conten ke template -->
<link rel="shortcut icon" type="text/css" href="/gambar/iconguru.png">
<link rel="stylesheet" href="/css/view.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&family=Noto+Serif:ital,wght@1,700&display=swap" rel="stylesheet">
@section('content')

<div class="container">
            @if(session('gagal'))
            <div class="alert alert-danger" role="alert">
                {{session('gagal')}}
            </div>
            @endif
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
            </div>
            @endif
     <!-- Tombol tambah data  -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top:10px;">
                Tambah nilai
            </button>  
      <!-- akhir tombol tambah -->

    <div class="judul">
        <form action="" class="form1" style="color:white">
            <fieldset>
            <div class="judulatas">
                <p>Data Diri Siswa</p>
            </div>
            <p>
            <label>Nama</label>
            <input type="text" style="color:white;" value=":{{$data_siswa->nama_lengkap}}" readonly>
            </p>
            <p>
            <label>No Induk</label>
            <input type="text" style="color:white;" value=":{{$data_siswa->no_induk}}" readonly>
            </fieldset>
        </form> 
    </div> 
</div>

    <div class="tabel">

        <!-- Tabel view Siswa -->
            <table class="table" cellpadding="150" cellspacing="117" style="width:60%; margin-left:15%; margin-top:5%;">
                    <thead>
                        <tr style="background-color:rgb(65, 105, 225,0.6);color:white;" class="tabel1">
                            <th >Kode Mapel</th>
                            <th>Mata Pelajaran</th>
                            <th width="8%">Nilai Tugas</th>
                            <th width="8%">Nilai Uts</th>
                            <th width="8%">Nilai Uas</th>
                            <th width="">Total</th>
                            <th width="">Rata Rata</th>
                            <th width="">Aksi</th>
                    </thead>
                    <tbody>
                        @foreach($data_siswa->mapel as $nl)
                        <tr class="pengguna" style="color:white;">
                            <td>{{$nl->kode_mapel}}</td>
                            <td>{{$nl->nama_mapel}}</td>
                            <td><a href="#" class="penilaian" data-type="text" data-pk="{{$nl->id}}" data-url="/post" data-title="Enter username">{{$nl->pivot->nilai}}</a></td>
                            <td>{{$nl->pivot->uts}}</td>
                            <td>{{$nl->pivot->uas}}</td>
                            <td>{{($nl->pivot->uts + $nl->pivot->uas + $nl->pivot->nilai)}}</td>
                            <td>{{($nl->pivot->uts + $nl->pivot->uas + $nl->pivot->nilai)/3}}</td>
                            <td>
                            <a href="/Guru/{{$data_siswa->id}}/{{$nl->id}}/deletenilai" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data ')"><i class="fa fa-trash"></i></a>
                            </td>
                        @endforeach
                        </tr>
                    </tbody>
            </table>
    </div>
                <!-- akhr tabel -->

        
     

<br><br><br><br><br><br><br><br><br>



<!-- modal untuk tambah data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:535px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/Guru/{{$data_siswa->id}}/addnilai" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="nilai" class="form-label">Mapel</label>
                        <select class="form-select" aria-label="Default select example" name="mapel">
                                @foreach($mapel as $mapel)
                                    <option value="{{$mapel->id}}">{{$mapel->nama_mapel}}</option>
                                @endforeach
                         </select>
                    </div>

                    <div class="mb-3">
                        <label for="nilai" class="form-label">Nilai Tugas</label>
                        <input type="number" class="form-control" id="nilai" name="nilai">
                    </div>
                    
                    <div class="mb-3">
                        <label for="uts" class="form-label">Nilai Uts</label>
                        <input type="number" class="form-control" id="uts" name="uts">
                    </div>
                    <div class="mb-3">
                        <label for="uas" class="form-label">Nilai uas</label>
                        <input type="number" class="form-control" id="uas" name="uas">
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('footer')
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script>
$(document).ready(function() {
    $('.penilaian').editable();
});
</script>
@stop
