<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            削除（退職）派遣社員の詳細
        </h2>
        
        <x-message :message="session('message')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-slot>
    
    

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-stop
                <div class="md:flex items-center mt-2">
                    
                </div>
                
                <div class="md:flex items-center mt-2">
                    <div class="w-full flex flex-col">
                        <p>名前</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->name }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>よみがな</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->yomigana }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣会社</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->company }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣コード</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->number }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>所属部署</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->depart }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>所属セクション</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->section }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>職種</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->job }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>入社日</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->firstday->format('Y年m月d日') }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>契約開始日</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->startday->format('Y年m月d日') }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>契約終了日</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->endday->format('Y年m月d日') }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣期間</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ ($stop->conterm) }}か月</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣料算出方法（月額or時給など）</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->worktype }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣料</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ number_format($stop->cost) }}円</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>交通費（月額）</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ number_format($stop->tcostm) }}円</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>交通費（日額：往復）</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ number_format($stop->tcostd) }}円</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>交通経路</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->troute??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>プロジェクト番号</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->pnumber??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>プロジェクト名</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->pname??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>作業内容</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->tcontent }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣元担当者名</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->aname }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣元担当者E-mailアドレス</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->aemail }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>備考</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->body??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>更新確認者</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->confirmer }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>更新確認者E-mailアドレス</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->cemail }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣料改定の日付と料金</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->costmemo??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>回覧者①</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->circulator1??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>回覧者②</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->circulator2??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>回覧者③</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->circulator3??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>回覧者④</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->circulator4??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                @if($stop->sccmail1 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>部内確認CCメール①</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->sccmail1 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($stop->sccmail2 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>部内確認CCメール②</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->sccmail2 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($stop->sccmail3 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>部内確認CCメール③</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->sccmail3 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($stop->sccmail4 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>部内確認CCメール④</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->sccmail4 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($stop->sccmail5 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>部内確認CCメール⑤</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->sccmail5 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($stop->hccmail1 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣元CCメール①</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->hccmail1 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($stop->hccmail2 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣元CCメール①</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->hccmail2 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($stop->hccmail3 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣元CCメール①</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->hccmail3 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($stop->hccmail4 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣元CCメール①</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->hccmail4 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($stop->hccmail5 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣元CCメール①</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $stop->hccmail5 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
        </div>
    </div>
       --}}
</x-app-layout>