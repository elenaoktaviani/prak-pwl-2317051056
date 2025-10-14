<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    public $incrementing = false; // Wajib kalau pakai UUID
    protected $keyType = 'string'; // Karena UUID disimpan sebagai string

    protected $fillable = [
        'nama_mk',
        'sks',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
