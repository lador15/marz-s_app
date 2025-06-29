<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GuruModel extends Model
{
    use HasFactory;
    protected $table = 'guru';

    public function mapel()
    {
        return $this->hasOne(Mapel::class, 'id_guru', 'id');
    }
}
