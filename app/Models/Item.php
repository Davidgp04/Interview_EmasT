<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Collection;

class Item extends Model
{
    protected $fillable = [
        'product_id',
        'selling_id',
        'total_price',
    ];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getSellingId(): int
    {
        return $this->attributes['selling_id'];
    }

    public function setSellingId(int $id): void
    {
        $this->attributes['selling_id'] = $id;
    }

    public function getProductId(): int
    {
        return $this->attributes['product_id'];
    }

    public function setProductId(int $id): void
    {
        $this->attributes['product_id'] = $id;
    }

    public function selling(): BelongsTo
    {
        return $this->belongsTo(Selling::class);
    }

    public function getSelling(): Collection
    {
        return $this->order;
    }

    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }

    public function getProduct(): Collection
    {
        return $this->product;
    }

    public function getCreatedAt(): string
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return $this->attributes['updated_at'];
    }
}
