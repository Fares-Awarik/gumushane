<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'subtitle',
        'description',
        'price',
        'unit',
        'quantity',
        'image',
        'active',
    ];

    public function getWhatsappMessageAttribute(): string
    {
        return urlencode("Merhaba, {$this->name} ürünü hakkında bilgi almak istiyorum.");
    }

    public function isInStock(): bool
    {
        return $this->quantity > 0;
    }

    public function getFormattedPriceAttribute(): string
    {
        return number_format($this->price, 0, ',', '.') . '₺';
    }
}
