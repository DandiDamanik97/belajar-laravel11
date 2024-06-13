<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use PhpParser\Node\Expr\FuncCall;

class Post extends Model
{
    use HasFactory;
    protected $fillable =['title','author','slug','body'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public Function category(): BelongsTo
    {
        return $this->belongsTo((Category::class));
    }
}
