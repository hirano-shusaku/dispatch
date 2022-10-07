<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            派遣社員一覧
        </h2>
        <x-message :message="session('message')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-slot>
    
   <div class="max-w-full mx-auto px-2 sm:px-2 lg:px-2">
       <div class="md:flex items-center ">
           
            <div class="w-1/2 flex flex-col mt-2 ml-2">
                <div class="flex">
                    <div class="rounded-full w-12 h-12">
                        
                            {{-- アバター表示 --}}
                        <img src="{{asset('storage/avatar/'.($user->avatar??'user_default.jpg'))}}">
                    </div>
                    <p class="text-lg text-gray-700 font-semibold">{{ $user->name }}さん,ようこそ！</p>
                </div>
                <hr class="border-b-1 border-red-600 w-1/2">
            </div>
                    
        </div>
        <div class="my-6">
            <table class="text-left w-1/2 border-collapse mt-8"> 
                <tr class="bg-sky-600">
                    <th class="p-3 text-left text-white">id</th>
                    <th class="p-3 text-left text-white">名前</th>   
                </tr>
                @foreach($roles as $role) 
                <tr class="bg-white">
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$role->id}}</td>
                    <td class="border-gray-light border hover:bg-gray-100 p-3">{{$role->name}}</td>
                </tr>
                @endforeach
            </table>
         </div>
    </div>
</x-app-layout>