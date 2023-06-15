<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'owners';

    protected $primaryKey = 'id';

    protected $fillable = [
        'full_name',
        'occupation',
        'cpf',
        'created_at',
        'updated_at',
    ];
}
