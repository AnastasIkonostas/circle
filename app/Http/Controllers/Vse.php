<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use App\Models\zakazu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nahid\Talk\Live\Broadcast;
use Carbon\Carbon;
use App\Models\callMe;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Vse extends Controller
{


    public function add(Request $request){
        $users = new User();
        $test = DB::select('select email from users where name = ?', [$request->namee]);
        if ($test != null && ($te = DB::select('select name from users where email = ?', [$request->emaill])) != null ){

            $zakazus = new zakazu();
            $te = DB::select('select ID from users where email = ? AND name = ?', [$request->emaill,$request->namee]);
            foreach ($te as $tt) {$zakazus->user_id = $tt->ID;
                $zakazus->shop_id = $request->idd;
                $zakazus->save();
            }


            return view('/sertificat');
        } else {
            $users->name = $request->namee;
            $users->email = $request->emaill;
            $users->save();

            $zakazus = new zakazu();
            $te = DB::select('select ID from users where email = ? AND name = ?', [$request->emaill,$request->namee]);
            foreach ($te as $tt) {$zakazus->user_id = $tt->ID;
                $zakazus->shop_id = $request->idd;
                $zakazus->save();}


            return view('/sertificat');
        }
    }

    public function addNum(Request $request){
        $callMe = new callMe();
        $test = DB::select('select phone_number from call_mes where name = ?', [$request->namee]);
        if ($test != null && ($te = DB::select('select name from call_mes where phone_number = ?', [$request->phone_number])) != null ){

            


            return view('/main');
        } else {
            $data = array('name' => $request->namee, 'phone_number' => $request->phone_number);
            DB::table('call_mes')->insert($data);
            // $callMe->name = $request->namee;
            // $callMe->phone_number = $request->phone_numberr;
            // $callMe->save();

            

            return view('/main');
        }
    }
   

}

