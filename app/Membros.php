<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Membros extends Model
{

    protected $fillable = [
        'nome', 'email', 'imagem','data_nascimento','data_batismo',
    ];
//    public static function getEnumValues($table, $column)
//    {
//        $type = DB::select(DB::raw("SHOW COLUMNS FROM $table WHERE Field = '$column'"))[0]->Type;
//        preg_match('/^enum\((.*)\)$/', $type, $matches);
//        $enum = array();
//        foreach (explode(',', $matches[1]) as $value) {
//            $v = trim($value, "'");
//            $enum = array_add($enum, $v, $v);
//        }
//        return $enum;
//    }

}
