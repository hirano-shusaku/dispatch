<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            プロフィール変更
        </h2>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <x-message :message="session('message')" />

    </x-slot>

    <div class="font-sans text-gray-900 antialiased">
        <div class="w-full md:w-1/2 mx-auto p-6">

        <form method="POST" action="{{ route('profile.update', $user) }}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('苗字')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $user->name)" required autofocus />
            </div>
            
            <!-- name2 -->
            <div>
                <x-label for="name2" :value="__('名前')" />

                <x-input id="name2" class="block mt-1 w-full" type="text" name="name2" :value="old('name2', $user->name2)"  autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $user->email)" required />
            </div>

            <!-- Avatar -->
            <div class="mt-4">
                <x-label for="avatar" :value="__('プロフィール画像（任意・1MBまで）')" />
                <div class="rounded-full w-36">
                    <img src="{{asset('storage/avatar/'.($user->avatar??'user_default.jpg'))}}" style="max-h-2">
                </div>

                <x-input id="avatar" class="block mt-1 w-full rounded-none" type="file" name="avatar" :value="old('avatar')" />

            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                 autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('送信する') }}
                </x-button>
            </div>
        </form>
        
        {{--attach detach--}}
        @can('admin')
        <div class="mt-5">
            <h4 class="mb-3">役割付与・削除（管理者のみ表示）</h4>
            <table class="text-left w-full border-collapse mt-8">
                <tr class="bg-green-600 text-center">
                    <th>役割</th>
                    <th>付与</th>
                    <th>削除</th>
                </tr>
                @foreach($roles as $role)
                <tr class="bg-white text-center">
                    <td class="p-3">
                        {{ $role->name }}
                    </td>
                    
                    <td class="p-3">
                        <form method="post" action="{{ route('role.attach', $user) }}"> 
                            @method('patch')
                            @csrf
                            <input type="hidden" name="role" value="{{ $role->id }}">
                            <button class="px-2 py-1 text-blue-500 border border-blue-500 font-semibold rounded
                                @if($user->roles->contains($role))
                                bg-gray-300
                                @endif
                                "
                                @if($user->roles->contains($role))
                                disabled
                                @endif
                                >
                                役割付与
                            </button>
                        </form>
                    </td>
                    
                    <td class="p-3">
                        <form method="post" action="{{ route('role.detach', $user) }}"> 
                            @method('patch')
                            @csrf
                            <input type="hidden" name="role" value="{{ $role->id }}">
                            <button class="px-2 py-1 text-red-700 border border-red-700 font-semibold rounded
                                @if(!$user->roles->contains($role))
                                bg-gray-300
                                @endif
                                "
                                @if(!$user->roles->contains($role))
                                disabled
                                @endif
                                >
                                役割削除
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        @endcan
        
        </div>
    </div>
</x-app-layout>