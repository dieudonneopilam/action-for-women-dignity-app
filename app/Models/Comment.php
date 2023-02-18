<?php

namespace App\Models;

use App\Models\User;
use App\Models\Publication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'publication_id',
        'dateComment',
        'content'
    ];
    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
