<?php

use function Laravel\Folio\{name};

name('about');

?>

<x-layouts.marketing>

    <div class="w-full px-4 sm:px-6 lg:px-8">

        <x-ui.marketing.breadcrumbs :crumbs="[ ['text' => 'About Our Company'] ]" />

        <div class="flex flex-col items-center justify-center w-full pt-12 sm:pt-16 lg:pt-24">
            <div class="w-full max-w-3xl">
                <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-slate-100 sm:text-3xl md:text-4xl">About Our Company</h1>
                <p class="mt-4 text-base sm:text-lg leading-6 text-slate-600 dark:text-slate-400">We are committed to providing innovative solutions with a focus on quality and customer satisfaction. Our dedicated team works tirelessly to deliver exceptional value and drive success.</p>
            </div>
        </div>

        <div class="w-full max-w-3xl mx-auto mt-8 space-y-6">

            <!-- Company Mission -->
            <div>
                <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100 sm:text-xl">Our Mission</h2>
                <p class="mt-2 text-sm sm:text-base text-slate-600 dark:text-slate-400">Our mission is to use technology to address complex problems and deliver outstanding results. We strive for excellence in every project and aim to exceed our clients' expectations.</p>
            </div>

            <!-- Company History -->
            <div>
                <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100 sm:text-xl">Our History</h2>
                <p class="mt-2 text-sm sm:text-base text-slate-600 dark:text-slate-400">Since our founding in [Year], we have evolved from a small startup into a leader in our field. Our growth is a testament to our innovation and dedication to our clients and industry.</p>
            </div>

            <!-- Team Information -->
            <div>
                <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100 sm:text-xl">Our Team</h2>
                <p class="mt-2 text-sm sm:text-base text-slate-600 dark:text-slate-400">We are a team of skilled professionals with diverse expertise. Our collaborative approach allows us to tackle challenges effectively and deliver solutions that make a difference.</p>
            </div>

            <!-- Contact Information -->
            <div>
                <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100 sm:text-xl">Contact Us</h2>
                <p class="mt-2 text-sm sm:text-base text-slate-600 dark:text-slate-400">If you have any questions or would like to learn more about our services, please reach out to us. We are here to assist and provide you with the information you need.</p>
            </div>

        </div>
    </div>

</x-layouts.marketing>
