<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKesehatanSiswa extends Model
{
    public function CalonSiswa(){
        return $this->belongsTo('App\CalonSiswa');
    }
}
