<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            マネージャーへの確認メール
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
                            <p>{{ $haken->cemail }}</p>
                            <hr class="w-full mt-4">
                            
                            <h1 class="text-lg text-blue-700 font-semibold hover:underline cursor-pointer mb-2">CC宛先</h1>
                            <p>{{ $haken->sccmail1 }}</p>
                            <p>{{ $haken->sccmail2 }}</p>
                            <p>{{ $haken->sccmail3 }}</p>
                            <p>{{ $haken->sccmail4 }}</p>
                            <p>{{ $haken->sccmail5 }}</p>
                            <hr class="w-full mt-4">
                            
                            <h1 class="text-lg text-blue-700 font-semibold hover:underline cursor-pointer mb-3">件名(U)</h1>
                            <p>【派遣】 {{ $haken->name }}さまの契約更新／終了のご確認 ({{ \Carbon\Carbon::now()->addDays(7)->format("m月d日") }}まで)←要確認</p>
                            
                            <hr class="w-full mt-4">
                            
                            <h1 class="text-lg text-blue-700 font-semibold hover:underline cursor-pointer mb-2">メール本文</h1>
                            <p>{{ $haken->confirmer }}さん</p>
                            <p>お疲れ様です、第2管理部の{{ $user->name }}です。</p>
                            派遣契約更新について、下記ご確認の程宜しくお願い致します<br>
                            現在の契約が{{ $haken->endday->format('Y年m月d日') }}で終了となります「{{ $haken->name }}」さんですが、<br>
                            契約終了後の翌月からの契約の有無をお知らせ頂けますでしょうか。</p><br>
                            
                            <p>下記のPJコードは現契約のものとなります。<br>
                            PJコードと業務内容に変更がありましたら、お知らせください。<br>
                            延長の場合は期間もお知らせください。</p>
                            
                            <p>また現場担当者からのフィードバックや寸表も（可能であれば）<br>
                            あわせてお知らせください</p>
                            
                            <p>----------------------<br>
                            <p>名前：{{$haken->name}}<br>
                            <p>PJ名：{{ $haken->pname }} ： {{ $haken->pnumber }}<br>
                            <p>----------------------</p>
                            
                            <p>お忙しいところ恐れ入りますが、<br>
                            <p>{{ \Carbon\Carbon::now()->addDays(7)->format("m月d日") }}<span class="font-bold text-xl text-blue-700">〇月〇日 (〇)</span>までにご返信頂けますと幸いです。<br>
                            <p>期限までにご返信が難しい場合はご連絡頂けますと幸いです。</p>
                            
                            <p>何卒宜しくお願い致します。</p>
                            
                            
                            <p>-----------------------------------------------------<br>
                            　株式会社セガ<br>
                            　開発管理本部　第2管理部<br>
                            　平野　周作（hirano shusaku）<br>
                            <p>-----------------------------------------------------</p><br>
                            
                            <hr class="w-full mt-4">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
    
</x-app-layout>