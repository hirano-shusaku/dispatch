<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            派遣会社への契約確認メール
        </h2>
        
        <x-message :message="session('message')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-slot>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
            <div class="mx-4 sm:p-8">
                <div class="mt-4">
                    <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                        <div class="mt-4">
                            <h1 class="text-lg text-blue-700 font-semibold hover:underline cursor-pointer mb-2">宛先</h1>
                            <p>{{ $haken->aemail }}</p>
                            <hr class="w-full mt-4">
                            
                            <h1 class="text-lg text-blue-700 font-semibold hover:underline cursor-pointer mb-2">CC宛先</h1>
                            <p>{{ $haken->hccmail1 }}</p>
                            <p>{{ $haken->hccmail2 }}</p>
                            <p>{{ $haken->hccmail3 }}</p>
                            <p>{{ $haken->hccmail4 }}</p>
                            <p>{{ $haken->hccmail5 }}</p>
                            <hr class="w-full mt-4">
                            
                            <h1 class="text-lg text-blue-700 font-semibold hover:underline cursor-pointer mb-3">件名(U)</h1>
                            <p>【セガ】{{ $haken->endday->format('Y年m月d日') }}以降の「{{ $haken->name }}さま」のご契約につきまして</p>
                            
                            <hr class="w-full mt-4">
                            
                            <h1 class="text-lg text-blue-700 font-semibold hover:underline cursor-pointer mb-2">メール本文</h1>
                            <p>{{ $haken->company }}<br>
                            {{ $haken->aname }}さま</p>
                            
                            <p>いつもお世話になっております。<br>
                            株式会社セガ{{ $user->name }}です。</p>
                            表題の件ですが、<br>
                            @php
                                $Fcday = $haken->startday ->subDay();
                            @endphp
                            現契約が{{ ($Fcday->format('Y年m月d日')) }}までとなります「{{$haken->name}}」様につきまして<br>
                            担当者に、{{$haken->conterm}}か月延長の更新希望の確認がとれましたので、<br>
                            御社でご確認して頂きご承諾いただけましたら<br>
                            {{$haken->startday->format('Y年m月d日')}}～{{$haken->endday->format('Y年m月d日')}}（{{ $haken->conterm }}か月分の）<br>
                            お見積書の作成・ご送付の程をお願い致します。</p><br>
                            
                            <p>また担当者から下記コメントがございますので<br>
                            ご本人にお伝え頂ければ幸いです。<br></p>
                            
                            
                            
                            
                            <p>----------------------<br>
                            
                            <p>----------------------</p>
                            
                            <p>お忙しいところ恐れ入りますが、<br>
                            <p>何卒ご確認、ご対応の程宜しくお願い致します。</p>
                            
                            
                            <p>-----------------------------------------------------<br>
                            　株式会社セガ<br>
                            　開発管理本部　第2管理部<br>
                            　平野　周作（hirano shusaku）<br>
                            　Shusaku.hirano@sega.com<br>
                            　TEL: 03-6864-8486（代表）<br>
                            　〒141-0033　東京都品川区西品川一丁目1番1号<br>
                            　住友不動産大崎ガーデンタワー13F<br>
                            <p>-----------------------------------------------------</p><br>
                            
                            <hr class="w-full mt-4">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
    
</x-app-layout>