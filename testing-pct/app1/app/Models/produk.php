<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class produk extends Model
{
    use HasFactory;

    /**
     * Get the getKategori that owns the produk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getKategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class, 'category_id', 'id');
    }

    /**
     * Get the getSeller that owns the produk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getSeller(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
