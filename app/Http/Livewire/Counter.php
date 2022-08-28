<?php

namespace App\Http\Livewire;

use App\Models\Member;
use App\Models\Pref;
use Livewire\Component;

class Counter extends Component
{
    public $ints=[];

    public function decrement($member_id,$pref_id){
        
        $member=Member::find($member_id);
        $count=$member->prefs->where('id',$pref_id)->first();
        if($count!=null){
            if($count->pivot->count>0){
                $member->prefs()->syncWithoutDetaching([$pref_id=> ['count' =>$count->pivot->count-1]]);
            }
        }
    }

    public function increment($member_id,$pref_id){
     
        $member=Member::find($member_id);
        $count=$member->prefs->where('id',$pref_id)->first();
        if($count==null){
            $member->prefs()->syncWithoutDetaching([$pref_id=> ['count' =>+1]]);
        }else{
            $member->prefs()->syncWithoutDetaching([$pref_id=> ['count' =>$count->pivot->count+1]]);
        }  
    }
    public function render()
    {
        $prefs = Pref::all();
        $members=Member::get();

        $datas=Member::find([1,2,3,4]);
        // foreach($datas as $data){
        //     foreach($data->prefs as $pref){
        //         dd($pref);
        //     }
        // }
        return view('livewire.counter',['prefs'=>$prefs,'members'=>$members,'datas'=>$datas]);
    }
}
