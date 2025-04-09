<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Selling extends Model
{
    protected $fillable = [
        'total_price',
    ];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getTotalPrice(): float
    {
        return $this->attributes['total_price'];
    }

    public function setTotalPrice(float $price): void
    {
        $this->attributes['total_price'] = $price;
    }
}
