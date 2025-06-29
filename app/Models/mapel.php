<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    use HasFactory;
    protected $table = 'mapels';
    protected $fillable = [
        'nama',
        'id_guru'
    ];
    public function guru()
    {
        return $this->belongsTo(GuruModel::class );
    }
}
