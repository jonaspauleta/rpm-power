<?php

use function Laravel\Folio\{name};

name('sobre');

?>

<x-layouts.marketing>
    <div class="w-full px-4 sm:px-6 lg:px-8">
        <x-ui.marketing.breadcrumbs :crumbs="[ ['text' => 'Sobre'] ]" />

        <div class="flex flex-col items-center justify-center w-full pt-12 sm:pt-16 lg:pt-24">
            <div class="w-full max-w-3xl">
                <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-slate-100 sm:text-3xl md:text-4xl">
                    Sobre a Nossa Empresa
                </h1>

                <p class="mt-4 text-base sm:text-lg leading-6 text-slate-600 dark:text-slate-400">
                    A RPM Power Management tem origem na Alvan Motors em 1981 no departamento de engenharia envolvendo o desenvolvimento de preparações mecânicas e electrónicas belgas. Criada por Alain Vandriessche, os motores Alvan sempre foram focados na competição. Graças á dedicação, conhecimento e gosto ao mundo automóvel, desenvolvemos reprogramações individuais por forma a proporcionar mais potência, binário e satisfação do cliente sem nunca comprometer a fiabilidade do conjunto. Depois de 40 anos de experiência automóvel, A RPM Power Engine Management é a tua solução para a reprogramação do teu carro, mota,etc.
                </p>
            </div>
        </div>
        </div>
    </div>
</x-layouts.marketing>
