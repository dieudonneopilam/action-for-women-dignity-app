<?php

namespace App\Models;

use App\Models\Publication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'publication_id',
        'dateComment'
    ];
        public function publication()
    {
        return $this->belongsTo(Publication::class);
    }
}
