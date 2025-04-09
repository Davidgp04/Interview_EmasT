<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getProducts()
    {
        return $this->products()->get();
    }

    public function setDescription(string $description): void
    {
        $this->attributes['description'] = $description;
    }
}
