<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            派遣社員一覧
        </h2>
        <x-message :message="session('message')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-slot>
    
   <div class="max-w-full mx-auto px-2 sm:px-2 lg:px-2">
       <div class="md:flex items-center ">
           
            <div class="w-1/2 flex flex-col mt-2 ml-2">
                <div class="flex">
                    <div class="rounded-full w-12 h-12">
                        
                            {{-- アバター表示 --}}
                        <img src="{{asset('storage/avatar/'.($user->avatar??'user_default.jpg'))}}">
                    </div>
                    <p class="text-lg text-gray-700 font-semibold">{{ $user->name }}さん,ようこそ！</p>
                </div>
                <hr class="border-b-1 border-red-600 w-1/2">
            </div>
                    
        </div>
        <div class="my-6">
            <table class="text-left w-full border-collapse mt-8"> 
                <tr class="bg-sky-600">
                    <th class="p-3 text-left text-white">id</th>
                    <th class="p-3 text-left text-white">名前</th>   
                    <th class="p-3 text-left text-white">派遣会社</th>
                    <th class="p-3 text-left text-white">所属部</th>
                    <th class="p-3 text-left text-white">所属セクション</th>
                    <th class="p-3 text-left text-white">職種</th>
                    <th class="p-3 text-left text-white">現契約開始日</th>
                    <th class="p-3 text-left text-white">現契約終了日</th>
                    <th class="p-3 text-left text-white">勤務形態</th>
                    <th class="p-3 text-left text-white">派遣料</th>
                    <th class="p-3 text-left text-white">交通費1カ月</th>
                    <th class="p-3 text-left text-white">担当PJ</th>
                    <th class="p-3 text-left text-white">更新確認者</th>
                    <th class="p-3 text-left text-white">詳細</th>
                </tr>
                @foreach($hakens as $haken) 
                <tr class="bg-white">
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$haken->id}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$haken->name}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$haken->company}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$haken->depart}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$haken->section}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$haken->job}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$haken->startday->format('Y/m/d')}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$haken->endday->format('Y/m/d')}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$haken->worktype}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{number_format($haken->cost)}}円</td>
                    @if( $haken->tcostm !== null )
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{number_format($haken->tcostm)}}円</td>
                    @else
                    <td class="border-gray-light border hover:bg-gray-100 p-3">交通費なし</td>
                    @endif
                    
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$haken->pname}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$haken->confirmer}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">
                        <a href="{{ route('haken.show', $haken) }}"><x-button>詳細</x-button></a>
                    </td>
                </tr>
                @endforeach
            </table>
         </div>
    </div>
</x-app-layout>