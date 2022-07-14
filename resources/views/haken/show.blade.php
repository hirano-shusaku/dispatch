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
            
            <div class="flex justify-end mt-4">
                <a href="{{route('haken.edit', $haken)}}"><x-button class="bg-teal-700 float-right">編集</x-button></a>
                    <form method="post" action="{{route('haken.destroy', $haken)}}">
                        @csrf
                        @method('delete')
                        <x-button class="bg-red-700 float-right ml-4" onClick="return confirm('本当に削除しますか？');">削除</x-button>
                    </form>
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
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->firstday }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>契約開始日</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->startday }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>契約終了日</p>
                        <p class="text-lg text-gray-700 font-semibold">{{ $haken->endday }}</p><hr class="border-b-1 border-blue-600 w-full">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <p>雇用形態</p>
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
        </div>
    </div>
        
</x-app-layout>