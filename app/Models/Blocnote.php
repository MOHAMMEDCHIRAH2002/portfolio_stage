<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blocnote extends Model
{
    public function user()
{
    return $this->belongsTo(User::class);
}
    use HasFactory;

}
