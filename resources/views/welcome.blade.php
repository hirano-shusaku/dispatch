<x-guest-layout>
<div class="h-screen pb-14 bg-right bg-cover mt-4">
    <div class="container pt-10 md:pt-18 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center bg-gray-100">
        <!--左側-->
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden ">
            <h1 class="my-4 text-3xl md:text-5xl text-green-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">派遣データベース</h1>
            <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">
                派遣のデータベースをこのサイトで一元管理します
            </p>
            
            <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in ">
                {{-- ボタン設定 --}}
                <a href="{{ route('login') }}"><x-button class="btnsetg">ログイン</x-button></a>
                <a href="{{ route('register') }}"><x-button class="btnsetr">登録する</x-button></a>
            </div>
            
        </div>
        {{-- 右側 --}}
        <div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
            <img class="w-5/6 mx-auto lg:mr-0 slide-in-bottom rounded-lg shadow-xl" src="{{asset('logo/sega.png')}}">
        </div>
    </div>
    <div class="container pt-10 md:pt-18 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <div class="w-full text-sm text-center md:text-left fade-in border-2 p-4 text-red-800 leading-8 mb-8">
            <P>製作者：平野 周作</p><br>
            <p>Laravelフレームワーク使用</p><br>
            <p>何か不都合や不具合、修正したい箇所等ありましたら平野までご連絡ください</p>
            <p>今後随時新しい機能も追加予定です</p>
            <p>製作日：2022年8月中旬</p>
        </div>
        <!--フッタ-->
        <div class="w-full pt-10 pb-6 text-sm md:text-left fade-in">
            <p class="text-gray-500 text-center">@2022 Laravel/php </p>
        </div>
    </div>
</div>
</x-guest-layout>