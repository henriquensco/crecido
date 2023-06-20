<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'properties';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'image',
        'street',
        'number',
        'reference',
        'city',
        'state',
        'zip_code',
        'owner_id',
        'created_at',
        'updated_at',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
}
