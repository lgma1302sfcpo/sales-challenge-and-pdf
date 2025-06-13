<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'user_id', // precisa estar aqui!
        'total',
        'status',
    ];

    protected $table = 'sales';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function itemSales()
    {
        return $this->hasMany(ItemSale::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
