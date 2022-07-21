<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            稟議用の下書き
        </h2>
        
        <x-message :message="session('message')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-slot>
    
    

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p><span class="font-bold text-xl text-blue-700">①C-06-02</span>を選択します</p>
                        <p>②申請部門は<span class="font-bold text-xl text-blue-700">{{ $haken->depart }}</span></p>
                        <p>③最初の回覧先は<span class="font-bold text-xl text-blue-700">{{ $haken->circulator1??"登録なし" }}</span>さん</p>
                        <p>④次の回覧先は<span class="font-bold text-xl text-blue-700">{{ $haken->circulator2??"登録なし" }}</span>さん</p>
                        @if($haken->circulator3!== null)
                        <p>④次の回覧先は<span class="font-bold text-xl text-blue-700">{{ $haken->circulator3 }}</span>さん</p>
                        @else
                        <p></p>
                        @endif
                        
                        @if($haken->circulator4!== null)
                        <p>④次の回覧先は<span class="font-bold text-xl text-blue-700">{{ $haken->circulator4 }}</span>さん</p>
                        @else
                        <p></p>
                        @endif
                        
                    </div>
                </div>
                
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-4 sm:p-8">
                
                    <div class="md:flex items-center mt-8">
                        
                     <div class="w-full flex flex-col">
                        <p class="text-lg text-gray-700 font-semibold"></p><hr class="border-b-1 border-blue-600 w-full">
                        <label for="title" class="font-semibold leading-none mt-4">案件名</label>
                        <p>【SOJ】【外注派遣】{{$haken->job}}{{$haken->name}}氏 3か月(更新){{$haken->startday->format('Y/m/d')}}～{{$haken->endday->format('Y/m/d')}}</p>
                     </div>
                    </div><br>
    
                    <div class="w-full flex flex-col">
                        <h3 class="text-lg text-gray-700 font-semibold">１．理由・目的</h3>
                        <p>{{ $haken->depart }}{{ $haken->section }}において、派遣契約を締結しております</p>
                        <p>{{ $haken->name }}氏の契約満了に伴い、契約期間を更新したく。稟議申請いたします</p><br>
                        
                        <h3 class="text-lg text-gray-700 font-semibold">２．相手先</h3>
                        <p>{{ $haken->company }}</p><br>
                        
                        <h3 class="text-lg text-gray-700 font-semibold">３．内容</h3>
                        <p>名前：{{ $haken->name }}（{{ $haken->yomigana }}）{{ $haken->number }}</p>
                        <p>業務内容：{{ $haken->pnumber }}・{{ $haken->pname }}</p>
                        <p>{{ $haken->tcontent }}</p><br>
                        
                        <h3 class="text-lg text-gray-700 font-semibold">４．契約期間</h3>
                        <p>{{ $haken->startday->format('Y年m月d日') }}～{{ $haken->endday->format('Y年m月d日') }}（{{ $haken->conterm }}か月）</p>
                        <p> （※契約開始日：{{ $haken->firstday ->format('Y年m月d日')}}）</p>
                        <p>稼働日はセガカレンダーに準拠します</p><br>
                        
                        <h3 class="text-lg text-gray-700 font-semibold">５．費用</h3>
                        <p>派遣費用：{{ $haken->worktype }}</p>
                        @if($haken->worktype == '月額')
                        <p>{{ $haken->worktype }}派遣費用：{{number_format($haken->cost)}}円(税抜)×{{ $haken->conterm }}か月</p>
                        @else
                        <p>{{ $haken->worktype }}派遣費用：{{number_format($haken->cost)}}円(税抜)</p>
                        @endif
                        
                        @if( $haken->worktype == '月額' )
                        <p>派遣費用合計：{{number_format($haken->cost * $haken->conterm)}}円(税抜)</p><br>
                        
                        @endif
                        
                        <p>{{ $haken->body }}</p><br>
                        <p>交通費</p>
                        
                        @if($haken->tcostm == 0)
                        <p>※派遣料に含まれます</p><br>
                        @else
                        <p>月額：{{number_format($haken->tcostm)}}円×{{ $haken->conterm }}か月</p>
                        <p>交通費合計：{{number_format($haken->tcostm * $haken->conterm)}}円</p><br>
                        @endif
                        
                        @php
                        $ctotal = $haken->cost * $haken->conterm;
                        $taxtotal = $ctotal * 1.1;
                        $ttotal = $haken->tcostm * $haken->conterm;
                        $total = $taxtotal + $ttotal;
                        @endphp
                        
                        @if($haken->worktype == "月額")
                        <p>合計：{{ number_format($total) }}円（税込）</p><br>
                        @else
                        <p></p>
                        @endif
                        
                        <h3 class="text-lg text-gray-700 font-semibold">６．支払条件・支払予定日</h3>
                        <p>毎月末締め翌月末日に請求書による支払い</p><br>
                        
                        <h3 class="text-lg text-gray-700 font-semibold">７．特記事項</h3>
                        <p>見積書を添付致しました。よろしくお願いいたします。</p><br>
                        <p class="text-lg text-gray-700 font-semibold"></p><hr class="border-b-1 border-blue-600 w-full"><br>
                        
                        <p>1:<span class="font-bold text-xl text-blue-700">見積書</span>を添付する</p>
                        <p>2:関連申請に<span class="font-bold text-xl text-blue-700">１つ前の申請を紐づける</span></p>
                        <p>3:費用負担部門は<span class="font-bold text-xl text-blue-700">{{ $haken->depart }}の【最初】</span>の事業部のみ</p>
                        <p>4:取引先は<span class="font-bold text-xl text-blue-700">{{ $haken->company }}</span></p>
                        <p>5:プロジェクトは<span class="font-bold text-xl text-blue-700">{{ $haken->pnumber }}</span></p>
                        <p>6:支払予定日は<span class="font-bold text-xl text-blue-700">{{ $haken->startday }}</span>の<span class="font-bold text-xl text-blue-700">翌月末日</span></p>
                        <p>7:金額（税込）は<span class="font-bold text-xl text-blue-700">見積書の金額</span>を必ず確認</p>
    
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