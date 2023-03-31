<x-app-layout>
    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
        @foreach ($boyfriends as $boyfriend)
            <div class="p-6 flex space-x-2">
                <div class="flex-1">
                    <p class="mt-4 text-lg text-gray-900">{{ $boyfriend->user->name }}</p>
                    <p class="mt-4 text-lg text-gray-900">{{ $boyfriend->firstname}} {{ $boyfriend->lastname}}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('boyfriends.store') }}">
            @csrf
            <textarea
                name="firstname"
                placeholder="{{ __('Inserisci il nome') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('message') }}
            </textarea>

            <textarea
                name="lastname"
                placeholder="{{ __('Inserisci il cognome') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('message') }}
            </textarea>

            <textarea
                name="height"
                placeholder="{{ __('Inserisci altezza') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('message') }}
            </textarea>
            <x-primary-button class="mt-4">{{ __('Crea Boyfriend') }}</x-primary-button>
            @if ($errors->any())
                <div class="errors">
                @foreach ($errors->all() as $message)
                    <p>{{ $message }}</p>
                @endforeach
                </div>
            @endif
        </form>
    </div>

</x-app-layout>