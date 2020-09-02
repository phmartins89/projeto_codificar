<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    public $timestamps = false;
    protected  $primaryKey = 'id';
    protected $fillable = ['vendedor','nome','descricao','valor','data'];
}
