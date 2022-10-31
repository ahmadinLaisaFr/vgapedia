<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function getAll(string $table, string $column = null)
    {
        if ($column == null) {
            return DB::table($table)->select()->get();
        }else if($column != null){
            return DB::table($table)->select($column)->get();
        }
        return abort(403, 'not found');
    }

    function getInRandom(string $table, int $take = null)
    {
        if ($take == null) {
            return DB::table($table)->inRandomOrder()->get();
        }else if($take != null){
            return DB::table($table)->inRandomOrder()->get()->take($take);
        }
        return abort(403, 'not found');
    }
}
