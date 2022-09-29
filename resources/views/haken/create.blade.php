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
                        <label for="name" class="font-semibold leading-none mt-4">名前 ※必須</label>
                        <input type="text" name="name" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="name" placeholder="名前を入力してください" value="{{ old('name') }}">
                        @error('name')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <label for="yomigana" class="font-semibold leading-none mt-4">よみがな ※必須</label>
                        <input type="text" name="yomigana" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="yomigana" placeholder="よみがなを入力してください" value="{{ old('yomigana') }}">
                        @error('yomigana')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <label for="company" class="font-semibold leading-none mt-4">派遣会社 ※必須</label>
                        <input type="text" name="company" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="company" placeholder="派遣元会社名を入力してください" value="{{ old('company') }}">
                        @error('company')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="number" class="font-semibold leading-none mt-4">派遣コード</label>
                        <input type="text" name="number" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="number" placeholder="派遣者コード番号を入力してください" value="{{ old('number') }}">
                        @error('number')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="depart" class="font-semibold leading-none mt-4">所属部署　※必須</label>
                        <input type="text" name="depart" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="depart" placeholder="所属部を記入ください" value="{{ old('depart') }}">
                        @error('depart')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="section" class="font-semibold leading-none mt-4">セクション　※必須</label>
                        <input type="text" name="section" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="section" placeholder="所属セクションを入力ください" value="{{ old('section') }}">
                        @error('section')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="job" class="font-semibold leading-none mt-4">職種　※必須</label>
                        <input type="text" name="job" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="job" placeholder="職種を入力してください" value="{{ old('job') }}">
                        @error('job')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                 <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="firstday" class="font-semibold leading-none mt-4">入社日</label>
                        <input type="date" name="firstday" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="firstday" placeholder="初出勤日（入社日）を入力してください" value="{{ old('firstday') }}">
                        @error('firstday')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="startday" class="font-semibold leading-none mt-4">契約開始日　※必須</label>
                        <input type="date" name="startday" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="startday" placeholder="契約開始日を入力してください" value="{{ old('startday') }}">
                        @error('startday')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="endday" class="font-semibold leading-none mt-4">契約終了日　※必須</label>
                        <input type="date" name="endday" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="endday" placeholder="契約終了日を入力してください" value="{{ old('endday') }}">
                        @error('endday')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col form-group">
                        <label for="worktype" class="font-semibold leading-none mt-4">派遣料算出方法（月額or時給など）　※必須</label>
                        <select type="text" name="worktype" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="worktype" placeholder="雇用形態（時給等）を入力してください" >
                            <option value="">選択されていません</option>
                            <option type="text" value='月額' @if('月額' == old('worktype')) selected @endif>月額</option>
                            <option type="text" value='時給' @if('時給' == old('worktype')) selected @endif>時給</option>
                            <option type="text" value='日額' @if('日額' == old('worktype')) selected @endif>日額</option>
                            <option type="text" value='その他' @if('その他' == old('worktype')) selected @endif>その他</option>
                        </select>
                        @error('worktype')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="conterm" class="font-semibold leading-none mt-4">契約期間(ヵ月)　※必須</label>
                        <input type="number" name="conterm" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="conterm" step="0.5" value="{{ old('conterm') }}">
                        @error('conterm')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="cost" class="font-semibold leading-none mt-4">派遣料　※必須</label>
                        <input type="number" name="cost" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="cost" value="{{ old('cost') }}">
                        @error('cost')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="tcostm" class="font-semibold leading-none mt-4">交通費（月額）</label>
                        <input type="number" name="tcostm" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="tcostm" value="{{ old('tcostm') }}">
                        @error('tcostm')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="tcostd" class="font-semibold leading-none mt-4">交通費（日額：往復）</label>
                        <input type="number" name="tcostd" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="tcostd" value="{{ old('tcostd') }}">
                        @error('tcostd')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="troute" class="font-semibold leading-none mt-4">交通経路</label>
                        <input type="text" name="troute" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="troute" placeholder="交通経路を入力してください" value="{{ old('troute') }}">
                        @error('troute')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="pnumber" class="font-semibold leading-none mt-4">プロジェクト番号</label>
                        <input type="text" name="pnumber" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="pnumber" placeholder="プロジェクト番号を入力してください" value="{{ old('pnumber') }}">
                        @error('pnumber')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="pname" class="font-semibold leading-none mt-4">プロジェクト名</label>
                        <input type="text" name="pname" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="pname" placeholder="プロジェクト名を入力してください" value="{{ old('pname') }}">
                        @error('pname')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
    
                <div class="w-full flex flex-col">
                    <label for="tcontent" class="font-semibold leading-none mt-4">作業内容</label>
                    <textarea name="tcontent" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="tcontent" cols="20" rows="2">{{ old('tcontent') }}</textarea>
                    @error('tcontent')
                            <p class="bg-red-200">※{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="aname" class="font-semibold leading-none mt-4">派遣元担当者名　※必須</label>
                        <input type="text" name="aname" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="aname" placeholder="派遣元の担当者名を入力ください" value="{{ old('aname') }}">
                        @error('aname')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="aemail" class="font-semibold leading-none mt-4">派遣元担当者E-mailアドレス　※必須</label>
                        <input type="email" name="aemail" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="aemail" placeholder="派遣元担当者のE-mailを入力ください" value="{{ old('aemail') }}">
                        @error('aemail')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="w-full flex flex-col">
                    <label for="body" class="font-semibold leading-none mt-4">備考</label>
                    <textarea name="body" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="body" cols="20" rows="3">{{ old('body') }}</textarea>
                    @error('body')
                            <p class="bg-red-200">※{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="confirmer" class="font-semibold leading-none mt-4">更新確認者　※必須</label>
                        <input type="text" name="confirmer" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="confirmer" placeholder="更新確認者を入力ください" value="{{ old('confirmer') }}">
                        @error('confirmer')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="cemail" class="font-semibold leading-none mt-4">更新確認者E-mailアドレス　※必須</label>
                        <input type="email" name="cemail" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="cemail" placeholder="更新確認者のE-mailを入力ください" value="{{ old('cemail') }}">
                        @error('cemail')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="w-full flex flex-col">
                    <label for="costmemo" class="font-semibold leading-none mt-4">派遣料改定の日付と料金</label>
                    <textarea name="costmemo" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="costmemo" cols="20" rows="2">{{ old('costmemo') }}</textarea>
                    @error('costmemo')
                            <p class="bg-red-200">※{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="circulator1" class="font-semibold leading-none mt-4">稟議回覧者1</label>
                        <input type="text" name="circulator1" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="circulator1" placeholder="稟議回覧者①を入力ください" value="{{ old('circulator1') }}">
                        @error('circulator1')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="circulator2" class="font-semibold leading-none mt-4">稟議回覧者2</label>
                        <input type="text" name="circulator2" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="circulator2" placeholder="稟議回覧者②を入力ください" value="{{ old('circulator2') }}">
                        @error('circulator2')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="circulator3" class="font-semibold leading-none mt-4">稟議回覧者3</label>
                        <input type="text" name="circulator3" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="circulator3" placeholder="稟議回覧者②を入力ください" value="{{ old('circulator3') }}">
                        @error('circulator3')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="sccmail1" class="font-semibold leading-none mt-4">部内確認CCメール①</label>
                        <input type="email" name="sccmail1" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="sccmail1" placeholder="部内確認CCメールアドレス①を入力ください" value="{{ old('sccmail1') }}">
                        @error('sccmail1')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="sccmail2" class="font-semibold leading-none mt-4">部内確認CCメール②</label>
                        <input type="email" name="sccmail2" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="sccmail2" placeholder="部内確認CCメールアドレス②を入力ください" value="{{ old('sccmail2') }}">
                        @error('sccmail2')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="sccmail3" class="font-semibold leading-none mt-4">部内確認CCメール③</label>
                        <input type="email" name="sccmail3" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="sccmail3" placeholder="部内確認CCメールアドレス③を入力ください" value="{{ old('sccmail3') }}">
                        @error('sccmail3')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="sccmail4" class="font-semibold leading-none mt-4">部内確認CCメール④</label>
                        <input type="email" name="sccmail4" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="sccmail4" placeholder="部内確認CCメールアドレス④を入力ください" value="{{ old('sccmail4') }}">
                        @error('sccmail4')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="sccmail5" class="font-semibold leading-none mt-4">部内確認CCメール⑤</label>
                        <input type="email" name="sccmail5" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="sccmail5" placeholder="部内確認CCメールアドレス⑤を入力ください" value="{{ old('sccmail5') }}">
                        @error('sccmail5')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="hccmail1" class="font-semibold leading-none mt-4">派遣元CCメール①</label>
                        <input type="email" name="hccmail1" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="hccmail1" placeholder="派遣元CCメールアドレス①を入力ください" value="{{ old('hccmail1') }}">
                        @error('hccmail1')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="hccmail2" class="font-semibold leading-none mt-4">派遣元CCメール②</label>
                        <input type="email" name="hccmail2" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="hccmail2" placeholder="派遣元CCメールアドレス②を入力ください" value="{{ old('hccmail2') }}">
                        @error('hccmail2')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="hccmail3" class="font-semibold leading-none mt-4">派遣元CCメール③</label>
                        <input type="email" name="hccmail3" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="hccmail3" placeholder="派遣元CCメールアドレス③を入力ください" value="{{ old('hccmail3') }}">
                        @error('hccmail3')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="hccmail4" class="font-semibold leading-none mt-4">派遣元CCメール④</label>
                        <input type="email" name="hccmail4" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="hccmail4" placeholder="派遣元CCメールアドレス④を入力ください" value="{{ old('hccmail4') }}">
                        @error('hccmail4')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="hccmail5" class="font-semibold leading-none mt-4">派遣元CCメール⑤</label>
                        <input type="email" name="hccmail5" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="hccmail5" placeholder="派遣元CCメールアドレス⑤を入力ください" value="{{ old('hccmail5') }}">
                        @error('hccmail5')
                            <p class="bg-red-200">※{{ $message }}</p>
                        @enderror
                    </div>
                </div>
    
                <x-button class="mt-2">
                    登録する
                </x-button>

            </form>
        </div>
    </div>
        
</x-app-layout>