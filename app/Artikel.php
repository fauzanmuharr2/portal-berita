<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $filllable = ['judul','slug','deskripsi','foto','user_id','kategori_id'];

    public $timestamps = true;

    public function kategori()
    {
        // data Model 'Artikel' bisa dimiliki oleh model 'Kategori';
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }
    public function user()
    {
        // data Model 'Artikel' bisa dimiliki oleh model 'Kategori';
        return $this->belongsTo('App\User', 'user_id');
    }
    public function tag()
    {
        // data Model 'Artikel' bisa dimiliki oleh model 'Kategori';
        return $this->belongsToMany('App\Artikel', 'artikel_tag', 'artikel_id', 'tag_id');
    }
}
