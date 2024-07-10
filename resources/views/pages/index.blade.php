<?php

use function Laravel\Folio\{middleware, name};
use function Livewire\Volt\{state, rules};

name('home');
middleware(['redirect-to-dashboard']);

?>

<x-layouts.marketing>

    @volt('home')
        <div class="relative flex flex-col items-center justify-center w-full min-h-screen overflow-hidden bg-cover bg-center bg-[url('{{ URL::to('/') }}/background.jpg')]" x-cloak>

            <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Overlay -->
            <div class="relative flex items-center w-full max-w-6xl px-8 pt-12 pb-20 mx-auto">
                <div class="container relative max-w-4xl mx-auto mt-20 text-center sm:mt-24 lg:mt-32">
                    <h1 class="mt-5 text-4xl font-light leading-tight tracking-tight text-center text-white sm:text-5xl md:text-8xl">Tira o máximo do teu motor!</h1>
                    <p class="w-full max-w-2xl mx-auto mt-8 text-lg text-white">Cria o carro que queres!</p>
                </div>
            </div>

        </div>
    @endvolt

</x-layouts.marketing>
