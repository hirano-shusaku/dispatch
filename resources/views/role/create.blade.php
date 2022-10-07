<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            役割の登録
        </h2>
        
        <x-message :message="session('message')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-slot>
    
    

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            <form method="post" action="{{ route('role.store') }}" >
                @csrf
                <div class="md:flex items-center ">
                    <div class="w-full flex flex-col">
                        <label for="name" class="font-semibold leading-none mt-4">id name</label>
                        <input type="text" name="name" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="name" placeholder="名前を入力してください" value="{{ old('name') }}">
                        @error('name')
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