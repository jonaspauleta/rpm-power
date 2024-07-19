<?php

use function Laravel\Folio\{name};

name('sobre');

?>

<x-layouts.marketing>

    <div class="w-full px-4 sm:px-6 lg:px-8">

        <x-ui.marketing.breadcrumbs :crumbs="[ ['text' => 'Sobre'] ]" />

        <div class="flex flex-col items-center justify-center w-full pt-12 sm:pt-16 lg:pt-24">
            <div class="w-full max-w-3xl">
                <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-slate-100 sm:text-3xl md:text-4xl">Sobre a Nossa Empresa</h1>
                <p class="mt-4 text-base sm:text-lg leading-6 text-slate-600 dark:text-slate-400">Estamos comprometidos em fornecer soluções inovadoras com foco na qualidade e na satisfação do cliente. A nossa equipa dedicada trabalha incansavelmente para oferecer um valor excecional e promover o sucesso.</p>
            </div>
        </div>

        <div class="w-full max-w-3xl mx-auto mt-8 space-y-6">

            <!-- Missão da Empresa -->
            <div>
                <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100 sm:text-xl">A Nossa Missão</h2>
                <p class="mt-2 text-sm sm:text-base text-slate-600 dark:text-slate-400">A nossa missão é utilizar a tecnologia para resolver problemas complexos e entregar resultados excecionais. Lutamos pela excelência em cada projeto e aspiramos a superar as expectativas dos nossos clientes.</p>
            </div>

            <!-- História da Empresa -->
            <div>
                <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100 sm:text-xl">A Nossa História</h2>
                <p class="mt-2 text-sm sm:text-base text-slate-600 dark:text-slate-400">Desde a nossa fundação em [Ano], evoluímos de uma pequena startup para um líder no nosso setor. O nosso crescimento é um testemunho da nossa inovação e dedicação aos nossos clientes e à indústria.</p>
            </div>

            <!-- Informação sobre a Equipa -->
            <div>
                <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100 sm:text-xl">A Nossa Equipa</h2>
                <p class="mt-2 text-sm sm:text-base text-slate-600 dark:text-slate-400">Somos uma equipa de profissionais qualificados com uma vasta gama de especialidades. A nossa abordagem colaborativa permite-nos enfrentar desafios de forma eficaz e oferecer soluções que fazem a diferença.</p>
            </div>

            <!-- Informação de Contacto -->
            <div>
                <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100 sm:text-xl">Contacte-nos</h2>
                <p class="mt-2 text-sm sm:text-base text-slate-600 dark:text-slate-400">Se tiver alguma questão ou gostaria de saber mais sobre os nossos serviços, por favor entre em contacto connosco. Estamos aqui para ajudar e fornecer as informações de que precisa.</p>
            </div>

        </div>
    </div>

</x-layouts.marketing>
