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
            <form method="post" action="{{ route('haken.store') }}" >
                @csrf
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <label for="name" class="font-semibold leading-none mt-4">名前</label>
                        <input type="text" name="name" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="name" placeholder="名前を入力してください" value="{{ old('name') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <label for="yomigana" class="font-semibold leading-none mt-4">よみがな</label>
                        <input type="text" name="yomigana" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="yomigana" placeholder="よみがなを入力してください" value="{{ old('yomigana') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <label for="company" class="font-semibold leading-none mt-4">派遣会社</label>
                        <input type="text" name="company" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="company" placeholder="派遣元会社名を入力してください" value="{{ old('yomigana') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="number" class="font-semibold leading-none mt-4">派遣コード</label>
                        <input type="text" name="number" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="number" placeholder="派遣者コード番号を入力してください" value="{{ old('number') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="depart" class="font-semibold leading-none mt-4">所属部署</label>
                        <input type="text" name="depart" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="depart" placeholder="所属部を記入ください" value="{{ old('depart') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="section" class="font-semibold leading-none mt-4">セクション</label>
                        <input type="text" name="section" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="section" placeholder="所属セクションを入力ください" value="{{ old('section') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="job" class="font-semibold leading-none mt-4">職種</label>
                        <input type="text" name="job" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="job" placeholder="職種を入力してください" value="{{ old('job') }}">
                    </div>
                </div>
                
                 <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="firstday" class="font-semibold leading-none mt-4">入社日</label>
                        <input type="date" name="firstday" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="firstday" placeholder="初出勤日（入社日）を入力してください" value="{{ old('firstday') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="startday" class="font-semibold leading-none mt-4">契約開始日</label>
                        <input type="date" name="startday" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="startday" placeholder="契約開始日を入力してください" value="{{ old('startday') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="endday" class="font-semibold leading-none mt-4">契約終了日</label>
                        <input type="date" name="endday" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="endday" placeholder="契約終了日を入力してください" value="{{ old('endday') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col form-group">
                        <label for="worktype" class="font-semibold leading-none mt-4">雇用形態</label>
                        <select type="text" name="worktype" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="worktype" placeholder="雇用形態（時給等）を入力してください" value="{{ old('worktype') }}">
                            <option value="1">PHP</option>
                            <option value="2">Ruby</option>
                            <option value="3">Laravel</option>
                            <option value="4">Java</option>
                            <option value="5">jQuery</option>
                        </select>
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="cost" class="font-semibold leading-none mt-4">派遣料</label>
                        <input type="number" name="cost" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="cost" value="{{ old('cost') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="tcostm" class="font-semibold leading-none mt-4">交通費（月額）</label>
                        <input type="number" name="tcostm" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="tcostm" value="{{ old('tcostm') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="tcostd" class="font-semibold leading-none mt-4">交通費（日額：往復）</label>
                        <input type="number" name="tcostd" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="tcostd" value="{{ old('tcostd') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="troute" class="font-semibold leading-none mt-4">交通経路</label>
                        <input type="text" name="troute" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="troute" placeholder="交通経路を入力してください" value="{{ old('troute') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="pnumber" class="font-semibold leading-none mt-4">プロジェクト番号</label>
                        <input type="text" name="pnumber" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="pnumber" placeholder="プロジェクト番号を入力してください" value="{{ old('pnumber') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="pname" class="font-semibold leading-none mt-4">プロジェクト名</label>
                        <input type="text" name="pname" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="pname" placeholder="プロジェクト名を入力してください" value="{{ old('pname') }}">
                    </div>
                </div>
    
                <div class="w-full flex flex-col">
                    <label for="tcontent" class="font-semibold leading-none mt-4">作業内容</label>
                    <textarea name="tcontent" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="tcontent" cols="20" rows="2">{{ old('tcontent') }}</textarea>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="aname" class="font-semibold leading-none mt-4">派遣元担当者名</label>
                        <input type="text" name="aname" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="aname" placeholder="派遣元の担当者名を入力ください" value="{{ old('aname') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="aemail" class="font-semibold leading-none mt-4">派遣元担当者E-mailアドレス</label>
                        <input type="email" name="aemail" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="aemail" placeholder="派遣元担当者のE-mailを入力ください" value="{{ old('aemail') }}">
                    </div>
                </div>
                
                <div class="w-full flex flex-col">
                    <label for="body" class="font-semibold leading-none mt-4">備考</label>
                    <textarea name="body" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="body" cols="20" rows="3">{{ old('body') }}</textarea>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="confirmer" class="font-semibold leading-none mt-4">更新確認者</label>
                        <input type="text" name="confirmer" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="confirmer" placeholder="更新確認者を入力ください" value="{{ old('confirmer') }}">
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="cemail" class="font-semibold leading-none mt-4">更新確認者E-mailアドレス</label>
                        <input type="email" name="cemail" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="cemail" placeholder="更新確認者のE-mailを入力ください" value="{{ old('cemail') }}">
                    </div>
                </div>
                
                <div class="w-full flex flex-col">
                    <label for="costmemo" class="font-semibold leading-none mt-4">派遣料改定の日付と料金</label>
                    <textarea name="costmemo" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="costmemo" cols="20" rows="2">{{ old('costmemo') }}</textarea>
                </div>
    
                <x-button class="mt-2">
                    送信する
                </x-button>

            </form>
        </div>
    </div>
        
</x-app-layout>