<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Siswa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='siswa'; //ambil tabel siswa dari database
    protected $fillable =['no_induk','user_id','nama_lengkap','nama_panggilan','tempat_lahir','tgl_lahir','jenis_kelamin','kelas_id','agama','alamat','nama_ortu'];
    protected $primaryKey ='id';

    public function mapel()
    {
        return $this->belongsToMany(Mapel::class)->withPivot(['nilai','uts','uas'])->withTimeStamps();
    }
    public function Catatan()
    {
        return $this->belongsToMany(catatan::class);
    }
    public function guru()
    {
    return $this->belongsToMany(Guru::class)->withPivot(['catatan']);
    }
    public function kelas()
    {
    return $this->belongsTo(Kelas::class,'kelas_id');
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
    
}
