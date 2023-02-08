<?php

namespace App\Repository;
use App\Models\User;
class QuoteRepo implements IQuoteRepo{

    function all() {
        $res = User::all();
       return $res;
    }

}