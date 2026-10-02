<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollaborationRequest extends Model
{
    /**
     * Everything a visitor is allowed to set on the model.
     *
     * Without this the column would be mass-assignable straight from the
     * request, so a crafted payload could set id, created_at or source_ip.
     */
    protected $fillable = [
        'name',
        'organisation',
        'email',
        'phone',
        'message',
        'source_ip',
    ];
}
