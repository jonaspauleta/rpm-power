<?php

use function Laravel\Folio\{name};

name('contactos');

?>

<x-layouts.marketing>

    <div class="w-full">

        <x-ui.marketing.breadcrumbs :crumbs="[ ['text' => 'Contactos'] ]" />

        <div class="flex flex-col items-center justify-center w-full pt-24 px-4">
            <div class="w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
                <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-slate-100 sm:text-5xl md:text-6xl">Contact Us</h1>
                <p class="relative mt-6 text-lg leading-8 text-slate-600 dark:text-slate-400 sm:max-w-md md:text-base lg:max-w-none">Feel free to reach out to us via the contact details below. We are here to assist you with any inquiries or support you might need.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-6 mx-auto mt-8 px-4 md:grid-cols-2 lg:gap-8 lg:max-w-2xl">
            <div class="flex items-start space-x-4">
                <svg class="w-8 h-8 text-gray-500 dark:text-gray-400" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2a6 6 0 00-6 6v3a6 6 0 0012 0V8a6 6 0 00-6-6zm0 2a4 4 0 014 4v3a4 4 0 01-8 0V8a4 4 0 014-4zm0 12a6 6 0 00-6 6v2h12v-2a6 6 0 00-6-6z" fill="currentColor"/></svg>
                <div>
                    <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100">Office Address</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-base sm:text-lg">
                        <a href="https://www.google.com/maps?q=1234+Elm+Street,+Suite+567,+Springfield,+IL+62704" target="_blank" class="underline hover:text-blue-600 dark:hover:text-blue-400">
                            1234 Elm Street, Suite 567<br>Springfield, IL 62704
                        </a>
                    </p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <svg class="w-8 h-8 text-gray-500 dark:text-gray-400" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 2v20h20V2H2zm18 18H4V4h16v16zm-2-2V6H6v12h12z" fill="currentColor"/></svg>
                <div>
                    <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100">Phone</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-base sm:text-lg">
                        <a href="tel:+12345678901" class="underline hover:text-blue-600 dark:hover:text-blue-400">+1 (234) 567-8901</a>
                    </p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <svg class="w-8 h-8 text-gray-500 dark:text-gray-400" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 2h20v20H2V2zm18 18H4V4h16v16zm-2-2V6H6v12h12z" fill="currentColor"/></svg>
                <div>
                    <h3 class="text-xl font-semibold text-slate-900 dark:text-slate-100">Email</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-base sm:text-lg">
                        <a href="mailto:contact@company.com" class="underline hover:text-blue-600 dark:hover:text-blue-400">contact@company.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-layouts.marketing>
