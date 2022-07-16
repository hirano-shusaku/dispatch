<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規稟議用の下書き
        </h2>
        
        <x-message :message="session('message')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-slot>
    
    

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>①C-06-02 を選択します</p>
                        <p>②申請部門は{{ $haken->depart }}</p>
                        <p>③最初の回覧先は「菅原誠」さん</p>
                        <p>④次の回覧先は{{ $haken->confirmer }}さん</p>
                        <p class="text-lg text-gray-700 font-semibold"></p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-4 sm:p-8">
                
                    <div class="md:flex items-center mt-8">
                        
                     <div class="w-full flex flex-col">
                        <p class="text-lg text-gray-700 font-semibold"></p><hr class="border-b-1 border-blue-600 w-full">
                        <label for="title" class="font-semibold leading-none mt-4">案件名</label>
                        <p>【SOJ】【外注派遣】{{$haken->job}}{{$haken->name}}氏 3か月(新規){{$haken->startday}}～{{$haken->endday}}</p>
                     </div>
                    </div><br>
    
                    <div class="w-full flex flex-col">
                        <h3 class="text-lg text-gray-700 font-semibold">１．理由・目的</h3>
                        <p>{{ $haken->depart }}{{ $haken->section }}において、新たに{{ $haken->company }}と</p>
                        <p>「{{ $haken->name }}」（{{ $haken->yomigana }}）氏の派遣契約を締結したく稟議申請いたします</p><br>
                        
                        <h3 class="text-lg text-gray-700 font-semibold">２．相手先</h3>
                        <p>{{ $haken->company }}</p><br>
                        
                        <h3 class="text-lg text-gray-700 font-semibold">３．内容</h3>
                        <p>名前：{{ $haken->name }}（{{ $haken->yomigana }}）{{ $haken->number }}</p>
                        <p>業務内容：{{ $haken->pnumber }}・{{ $haken->pname }}</p>
                        <p>{{ $haken->tcontent }}</p><br>
                        
                        <h3 class="text-lg text-gray-700 font-semibold">４．契約期間</h3>
                        <p>{{ $haken->startday }}～{{ $haken->endday }}</p>
                        <p> （※契約開始日：{{ $haken->firstday }} ）</p>
                        <p>稼働日はセガカレンダーに準拠します</p><br>
                        
                        <h3 class="text-lg text-gray-700 font-semibold">５．費用</h3>
                        <p>派遣費用算出：{{ $haken->worktype }}</p>
                        <p>{{ $haken->worktype }}派遣費用：{{number_format($haken->cost)}}円</p>
                        
                        <p>{{ $haken->body }}</p><br>
                        <p>交通費</p>
                        
                        @if($haken->tcostm == 0)
                        <p>※派遣料に含まれます</p><br>
                        @else
                        <p>月額：{{number_format($haken->tcostm)}}円</p>
                        <p>交通費合計：{{number_format($haken->tcostm * 3)}}円</p><br>//coium追加で修正
                        @endif
                        @php
                        $total = $haken->tcostm + $haken->cost;
                        @endphp
                        
                        <p>合計：　{{ $total }}　　　　　（税込）</p><br>
                        
                        <h3 class="text-lg text-gray-700 font-semibold">６．支払条件・支払予定日</h3>
                        <p>毎月末締め翌月末日に請求書による支払い</p><br>
                        
                        <h3 class="text-lg text-gray-700 font-semibold">７．特記事項</h3>
                        <p>見積書を添付致しました。よろしくお願いいたします。</p><br>
                        <p class="text-lg text-gray-700 font-semibold"></p><hr class="border-b-1 border-blue-600 w-full">
                        
                        <p>1:見積書を添付する</p>
                        <p>2:関連申請は新規なので何もする必要ありません</p>
                        <p>3:費用負担部門は{{ $haken->depart }}の【最初】の事業部のみ</p>
                        <p>4:取引先は{{ $haken->company }}</p>
                        <p>5:プロジェクトは{{ $haken->pnumber }}</p>
                        <p>6:支払予定日は{{ $haken->startday }}の翌月末日</p>
                        <p>7:金額（税込）は見積書の金額</p>
    
                    </div>
                    <a href="{{ route('haken.show', $haken) }}">
                        <x-button class="mt-2">
                            詳細へ
                        </x-button>
                    </a>
            </div>
        </div>
                
        </div>
    </div>
        
</x-app-layout>