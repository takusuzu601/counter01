<div class="flex">
    
    <table style="height: 500px;">
        <tr>
            <th></th>
            @foreach($members as $member) 
            <th>
                {{$member->name}}
            </th>
            @endforeach
        </tr>
        <tr class="">
            @foreach ($prefs as $pref)
        <tr class="hover:bg-gray-200">
            <td class="p-2">{{$pref->name }}</td>
           
                @foreach($members as $member) 
              <td class="px-4"> 
                <div class="flex items-center justify-center">
                    <button class="flex items-center justify-center w-8 h-8 bg-red-500 hover:bg-red-700 text-white font-bold py-4 px-4 rounded" wire:click="decrement('{{$member->id}}','{{$pref->id}}')" wire:key="">-</button>
                    @foreach($ints as $int) 
                    <div wire:key=""  class="">{{$int}}</div>
                    @endforeach  
                     <button class="ml-2 flex items-center justify-center w-8 h-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-4 rounded" wire:click="increment('{{$member->id}}','{{$pref->id}}')" wire:key="">+</button>    
                </div>
              </td>
                @endforeach

           
            {{-- <td>
                <button wire:click="decrement('{{$value}}')" wire:key="o-{{$value}}">-</button>
                <div wire:key="o-{{$value}}"  class="">{{$int}}</div>
                <button wire:click="increment('{{$value}}')" wire:key="o-{{$value}}">+</button>    
            </td>
            <td>
                <button wire:click="decrement({'{{$value}}')" wire:key="sh-{{$value}}">-</button>
                <div wire:key="sh-{{$value}}"  class="">{{$int}}</div>
                <button wire:click="increment({'{{$value}}')" wire:key="sh-{{$value}}">+</button>    
            </td>
            <td>
                <button wire:click="decrement('{{$value}}')" wire:key="i-{{$value}}">-</button>
                <div  wire:key="i-{{$value}}" class="">{{$int}}</div>
                <button wire:click="increment('{{$value}}')" wire:key="i-{{$value}}">+</button>     
            </td> --}}
        </tr>
        @endforeach
  
        </tr>
    </table>

    <div class="" style="margin-left: 30px;">
        @foreach($datas as $data)
        <div style="">
            <div class="bg-blue-700 text-white p-2">{{$data->name}}</div>  
            @foreach($data->prefs as $pref)
                <div>
                {{$pref->name}}
                {{$pref->pivot->count}}
                </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>
