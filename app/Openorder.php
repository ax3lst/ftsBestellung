<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Openorder extends Model {

    protected $fillable = ['order', 'code'];

    public function calculatePrice() {
        $price = 0;
        foreach (explode("|%", $this->order) as $value) {
            $price += \App\Order::where('slug', $value)->first()->price;
        }
        return $price;
    }

}