<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'PublicationDate',
        'Stock',
        'Author',
        'Category_Id'
    ];

    // 1 kategori
    public function category(){
        return $this->belongsTo(Category::class, 'Category_Id');
    }

    public function buyers(){
        return $this->belongsToMany(Buyer::class, 'book_buyer', 'book_id', 'buyer_id');
    }

}
