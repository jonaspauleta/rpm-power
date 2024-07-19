<?php

use function Laravel\Folio\{name};

name('contactos');

?>

<x-layouts.marketing>

    <div class="w-full">

        <x-ui.marketing.breadcrumbs :crumbs="[ ['text' => 'Contactos'] ]" />

        <div class="flex flex-col items-center justify-center w-full pt-24 px-4">
            <div class="w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
                <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-slate-100 sm:text-5xl md:text-6xl">Contate-nos</h1>
                <p class="relative mt-6 text-lg leading-8 text-slate-600 dark:text-slate-400 sm:max-w-md md:text-base lg:max-w-none">Não hesite em entrar em contato conosco através das informações abaixo. Estamos à disposição para ajudar com qualquer dúvida que possa ter.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-6 mx-auto mt-8 px-4 md:grid-cols-2 lg:gap-8 lg:max-w-2xl">
            <div class="flex items-start space-x-4">
                <svg class="w-8 h-8 text-gray-500 dark:text-gray-400" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2a6 6 0 00-6 6v3a6 6 0 0012 0V8a6 6 0 00-6-6zm0 2a4 4 0 014 4v3a4 4 0 01-8 0V8a4 4 0 014-4zm0 12a6 6 0 00-6 6v2h12v-2a6 6 0 00-6-6z" fill="currentColor"/></svg>
                <div>
                    <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100">Morada</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-base sm:text-lg">
                        <a href="https://www.google.pt/maps/place/RPM+Power+Engine+Management+Portugal/@38.8026434,-9.1458051,17z/data=!3m1!4b1!4m6!3m5!1s0xd192d1f3878d593:0x90a21e76b4ac6b14!8m2!3d38.8026392!4d-9.1432302!16s%2Fg%2F11vlf3s1jh?entry=ttu" target="_blank" class="underline hover:text-blue-600 dark:hover:text-blue-400">
                            R. da Indústria 20<br>2680-604 Camarate
                        </a>
                    </p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <svg class="w-8 h-8 text-gray-500 dark:text-gray-400" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 2v20h20V2H2zm18 18H4V4h16v16zm-2-2V6H6v12h12z" fill="currentColor"/></svg>
                <div>
                    <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100">Telemóvel</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-base sm:text-lg">
                        <a href="tel:+351912442565" class="underline hover:text-blue-600 dark:hover:text-blue-400">+351 912 442 565</a>
                    </p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <svg class="w-8 h-8 text-gray-500 dark:text-gray-400" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 2h20v20H2V2zm18 18H4V4h16v16zm-2-2V6H6v12h12z" fill="currentColor"/></svg>
                <div>
                    <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100">Email</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-base sm:text-lg">
                        <a href="mailto:info@rpmpower.pt" class="underline hover:text-blue-600 dark:hover:text-blue-400">info@rpmpower.pt</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-layouts.marketing>
