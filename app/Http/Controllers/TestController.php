<?php

namespace App\Http\Controllers;

use App\API\SimCardsAPI\KyevstarAPI;
use App\API\SimCardsAPI\LifeAPI;
use App\API\SimCardsAPI\VodafoneAPI;
use App\Http\Requests\StoreSimCardsPost;


class TestController extends Controller
{
    public function store(StoreSimCardsPost $request){
        $validated = $request->validated();
        $phoneNumber = $validated['phone'];
        $simCardNameProvider = $validated['sims'][0];
        if($msg = $this->getSimCardApi($simCardNameProvider, $phoneNumber)){
            return redirect()->back()->with('success', "$msg");
        }
    }

    protected function getSimCardApi($simCardProvider, $number){

        switch ($simCardProvider) {
            case 'vodafone':
                $data = resolve(VodafoneAPI::class);
                break;
            case 'kyevstar':
                $data =  resolve(KyevstarAPI::class);
                break;
            case 'life':
                $data = resolve(LifeAPI::class);
                break;
            default:
                $data = null ;
        }
        return $data ? $data . " on that $number number" : false;
    }

}
