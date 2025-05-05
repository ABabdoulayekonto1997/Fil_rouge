<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 max-w-4xl mx-auto">
    <header class="border-b border-gray-200 pb-6 mb-8">
        <div class="flex items-center space-x-4">
            <div class="p-3 rounded-lg bg-[#0C4069]/10">
                <svg class="w-6 h-6 text-[#0C4069]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-[#0C4069]">
                    {{ __('Informations du Profil') }}
                </h2>
                <p class="mt-1 text-gray-600 text-sm">
                    {{ __("Mettez à jour vos informations personnelles et votre adresse email.") }}
                </p>
            </div>
        </div>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-8">
        @csrf
        @method('patch')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Nom -->
            <div class="space-y-3">
                <x-input-label for="name" :value="__('Nom')" class="text-[#0C4069] font-medium text-sm" />
                <div class="relative">
                    <x-text-input id="name" name="name" type="text" 
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#D88F42] focus:ring-2 focus:ring-[#D88F42]/50 px-4 py-3 transition duration-150" 
                        :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>
                <x-input-error class="mt-2 text-sm" :messages="$errors->get('name')" />
            </div>

            <!-- Email -->
            <div class="space-y-3">
                <x-input-label for="email" :value="__('Email')" class="text-[#0C4069] font-medium text-sm" />
                <div class="relative">
                    <x-text-input id="email" name="email" type="email" 
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#D88F42] focus:ring-2 focus:ring-[#D88F42]/50 px-4 py-3 transition duration-150" 
                        :value="old('email', $user->email)" required autocomplete="username" />
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <x-input-error class="mt-2 text-sm" :messages="$errors->get('email')" />
            </div>
        </div>

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="bg-yellow-50 p-4 rounded-lg border border-yellow-200 mt-6 flex items-start">
                <svg class="h-5 w-5 text-yellow-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                <div>
                    <p class="text-sm text-yellow-800">
                        {{ __('Votre adresse email n\'est pas vérifiée.') }}
                    </p>
                    <button form="send-verification" 
                        class="mt-1 text-sm font-medium text-[#D88F42] hover:text-[#0C4069] transition duration-150 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        {{ __('Renvoyer l\'email de vérification') }}
                    </button>
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-sm font-medium text-green-600 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Un nouveau lien de vérification a été envoyé.') }}
                        </p>
                    @endif
                </div>
            </div>
        @endif

        <div class="flex items-center justify-between pt-8 border-t border-gray-200">
            <div>
                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }"
                       x-show="show"
                       x-transition
                       x-init="setTimeout(() => show = false, 3000)"
                       class="text-sm font-medium text-green-600 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        {{ __('Modifications enregistrées avec succès') }}
                    </p>
                @endif
            </div>
            <x-primary-button class="bg-[#0C4069] hover:bg-[#0C4069]/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#0C4069] px-6 py-3 text-sm font-semibold transition duration-150">
                {{ __('Enregistrer les modifications') }}
            </x-primary-button>
        </div>
    </form>
</section>
</body>
</html>