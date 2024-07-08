<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    /**
     * Get the category associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    /**
     * Get the seller associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function seller(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    
}
