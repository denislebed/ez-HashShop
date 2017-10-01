<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodOrder extends Model {

    /**
     * 
     */
    public function good() {
        return $this->belongsTo('App\Good');
    }

    public function order() {
        return $this->belongsTo('App\Order');
    }

}
