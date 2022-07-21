<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規派遣社員の登録
        </h2>
        
        <x-message :message="session('message')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-slot>
    
    

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            
            <div class="flex justify-end">
                 <form method="post" action="{{route('haken.destroy', $haken)}}">
                        @csrf
                        @method('delete')
                        <x-button class="bg-red-800 float-right ml-4" onClick="return confirm('本当に削除しますか？');">削除</x-button>
                    </form>
            </div>
            
            <div class="flex justify-stretch mt-4 mb-2">
                <div class="justify-items-start ml-4">
                    <a href="{{route('haken.hkaku', $haken)}}"><x-button class="bg-red-700 float-right">派遣元確認メール</x-button></a>
                </div>
                
                <div class="ml-4">
                    <a href="{{route('haken.mkaku', $haken)}}"><x-button class="bg-red-700 float-right">部内の確認メール</x-button></a>
                </div>
                
                <div class="ml-4">
                    <a href="{{route('haken.edit', $haken)}}"><x-button class="bg-teal-700 float-right">編集</x-button></a>
                </div>
                
                <div class="ml-4">
                    <a href="{{route('haken.ringi', $haken)}}"><x-button class="bg-blue-700 float-right">通常稟議</x-button></a>
                </div>
                <div class="ml-4">
                    <a href="{{route('haken.shinki', $haken)}}"><x-button class="bg-blue-700 float-right">新規稟議</x-button></a>
                </div>
                
                   
            </div>
            
            
            
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>名前</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->name }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>よみがな</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->yomigana }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣会社</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->company }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣コード</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->number }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>所属部署</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->depart }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>所属セクション</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->section }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>職種</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->job }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>入社日</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->firstday->format('Y年m月d日') }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>契約開始日</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->startday->format('Y年m月d日') }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>契約終了日</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->endday->format('Y年m月d日') }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣期間</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ ($haken->conterm) }}か月</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣料算出方法（月額or時給など）</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->worktype }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣料</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ number_format($haken->cost) }}円</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>交通費（月額）</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ number_format($haken->tcostm) }}円</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>交通費（日額：往復）</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ number_format($haken->tcostd) }}円</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>交通経路</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->troute??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>プロジェクト番号</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->pnumber??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>プロジェクト名</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->pname??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>作業内容</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->tcontent }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣元担当者名</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->aname }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣元担当者E-mailアドレス</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->aemail }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>備考</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->body??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>更新確認者</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->confirmer }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>更新確認者E-mailアドレス</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->cemail }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣料改定の日付と料金</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->costmemo??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>回覧者①</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->circulator1??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>回覧者②</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->circulator2??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>回覧者③</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->circulator3??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>回覧者④</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->circulator4??"なし" }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                @if($haken->sccmail1 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>部内確認CCメール①</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->sccmail1 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($haken->sccmail2 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>部内確認CCメール②</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->sccmail2 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($haken->sccmail3 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>部内確認CCメール③</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->sccmail3 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($haken->sccmail4 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>部内確認CCメール④</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->sccmail4 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($haken->sccmail5 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>部内確認CCメール⑤</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->sccmail5 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($haken->hccmail1 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣元CCメール①</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->hccmail1 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($haken->hccmail2 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣元CCメール①</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->hccmail2 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($haken->hccmail3 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣元CCメール①</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->hccmail3 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($haken->hccmail4 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣元CCメール①</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->hccmail4 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
                @if($haken->hccmail5 !== null)
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>派遣元CCメール①</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->hccmail5 }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                @else
                <p></p>
                @endif
                
        </div>
    </div>
        
</x-app-layout>