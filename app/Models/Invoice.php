<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model {
  protected $fillable = ['order_id', 'total'];

  public function order() {
    return $this->belongsTo(Order::class);
  }
}
