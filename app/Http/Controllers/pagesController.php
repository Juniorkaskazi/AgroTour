<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\farm;
use App\Models\User;
use Spatie\MediaLibrary\Support\MediaStream;

class pagesController extends Controller
{
    public function index(){
        return view('index', [
            'farm_details' => farm::with(['media', 'review','userFarms'])->latest()->take(6)->get(),
            'farm_tourGuides' => User::with(['media', 'userFarms'])->take(1)->get(),
            'farm_image' => farm::with('media')->get(),
        ]);
    }

    public function findFarm(Request $request): RedirectResponse
    {
        $validate = $request->validate([
            'location' => ['required', 'alpha_num'], 
        ]);

        if($validate->fails()){
            return redirect('/')->wuthInput();
        }else {
            $farmid = farm::where('location', 'LIKE', "{$request->location}%")->latest()->take(1)->get('id');
            return redirect('/viewFarm/'.$farmId);
        }
    }

    public function viewFarm(Request $request, $farmId){
      return view('destination-detail', [
        'farmDetails' => farm::with(['media', 'review','userFarms'])->where('id', '=',$farmId)->get(),
        'farmGuide' => User::with(['media', 'userFarms'])->oldest()->take(1)->get(), 
        'farmId' => $farmId,
        'farm_image' => farm::with('media')->get()
      ]);  
    }
}
