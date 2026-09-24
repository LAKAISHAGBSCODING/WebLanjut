<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $fillable = ['nama', 'npm', 'kelas_id'];

    public function getUser()
    {
        return $this->join('kelas', function ($join) {
                        $join->whereRaw('kelas.id::text = "user".kelas_id::text');
                    })
                    ->select('user.*', 'kelas.nama_kelas as nama_kelas')
                    ->get();
    }
}