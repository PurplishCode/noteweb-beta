<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Note extends Model
{
    use HasFactory, HasUuids;

protected $guarded = [
"id"
];

// protected $fillable = [
// "title",
// "body",
// "is_published",
// "heart_count",
// "send_date"
// ];

public function users(): BelongsTo
{
    return $this->belongsTo(User::class);
}

}
