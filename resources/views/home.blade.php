@extends('layout.template')
<!-- untuk mengirimkan title ke template -->
@section('tittle','HOME')
<!-- untuk mengirimkan isi conten ke template -->
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
    @media only screen and (max-width:600px) {
        .card-img {
            width: 10%;
        }
    }

    @media only screen and (max-width:780px) {
        .card-img {
            width: 20%;
        }
    }

    @media only screen and (max-width:480px) {
        .card-img {
            width: 20%;
        }
    }
</style>



<!-- Brand logo dan nama sistem monitoring  -->
<nav class="navbar" style="background-color: rgb(0, 191, 255); height:80px;">
    <a class="navbar-brand" href="#" style="color:black; margin-left:80px; font-family: 'Oswald', sans-serif;">
        <img src="/gambar/wuri.png" alt="" width="60" class="d-inline-block align-top">
        SISTEM MONITORING KEGIATAN SISWA
        <p class="text-center" style="margin-top: -24px; font-size:15px;">SMAN Surabaya</p>
    </a>
</nav>

<div class=" container">
    <!-- tulisan tengah pembuka  -->
    <h2 class="text-center" style="font-family: 'Oswald', sans-serif; font-size:23px;">Selamat Datang di Website Resmi </h2>
    <p class="text-center" style="font-family: 'Oswald', sans-serif; font-size:18px;">SMA Negeri Surabaya</p>
    <p class="text-center" style="font-family: 'Akaya Telivigala', cursive; font-size:22px; font-weight:bold; font-style:italic; margin-top:-15px;">"Bersatu bersinergi membangun negeri"</p>

    <!-- Ikon Admin  -->
    <div class="row mx-auto" style="background-color:rgb(0, 191, 255,0.5);">
        <div class=" card " style=" width: 18rem; border:none; text-align:center; margin-left:250px; background-color:rgb(0, 191, 255,0.1); ">
            <a href="/Admin/Homeadmin" style="color:black; background:none; text-decoration:none; font-weight:bold;">
                <img src=" /gambar/Admin.png" class="card-img" alt="..." style="width:50%; background:none; padding-top:13px; margin-right:80px;">
                <p class="card-tittle" style="background: none; font-size:20px; color:black; margin-right:80px;">Admin</p>
            </a>
        </div>

        <!-- Ikon Guru -->
        <div class="card mr-1 ml-1" style="width: 18rem; border:none;background-color:rgb(0, 191, 255,0.1); ">
            <a href="/Guru/Homeguru" style="color:black; background:none; text-decoration:none; font-weight:bold;">
                <img src=" /gambar/Guru.png" class="card-img" alt="..." style="width:50%; background:none; padding-top:13px; margin-left:130px;">
                <p class="card-tittle" style="background: none; font-size:20px; color:black; margin-left:177px;">Guru</p>
            </a>
        </div>
    </div>
    <!-- akhir ikon admin dan guru  -->

    <!-- ikon siswa -->
    <div class="row mx-auto" style="background-color:rgb(0, 191, 255,0.5);  ">
        <div class=" card " style=" width: 18rem; border:none; text-align:center; margin-left:250px; background-color:rgb(0, 191, 255,0.1); ">
            <a href="/Siswa/Homesiswa" style="color:black; background:none; text-decoration:none; font-weight:bold;">
                <img src=" /gambar/Siswa.png" class="card-img" alt="..." style="width:50%; background:none; padding-top:10px; margin-right:80px;">
                <p class="card-tittle" style="background: none; font-size:20px; color:black; margin-right:80px;">Siswa</p>
            </a>
        </div>

        <!-- Ikon Ortu -->
        <div class="card mr-1 ml-1" style="width: 18rem; border:none;background-color:rgb(0, 191, 255,0.1); ">
            <a href="/Ortu/Homeortu" style="color:black; background:none; text-decoration:none; font-weight:bold;">
                <img src=" /gambar/Ortu.png" class="card-img" alt="..." style="width:50%; background:none; padding-top:10px; margin-left:130px;">
                <p class="card-tittle" style="background: none; font-size:20px; color:black; margin-left:147px;">Orang tua</p>
            </a>
        </div>
    </div>
</div>
<br>
@endsection