<?php

use App\Models\Product;
use function Livewire\Volt\{with, state, rules, mount, usesPagination};

usesPagination();

state([
    'numResults' => 6,
    'results' => null,
    'total' => '',
    'finished' => false,
    'route_prefix' => 'produtos',
    'sortOrder' => 'desc'
]);

mount(function () {
    $this->results = $this->numResults;
    $this->total = Product::count();
});

$loadMore = function () {
    $this->results += $this->numResults;
    if ($this->results >= $this->total) {
        $this->finished = true;
    }
};

with(function () {
    return [
        'products' => Product::query()
            ->orderBy('created_at', $this->sortOrder)
            ->paginate($this->results)
    ];
});

?>

<x-layouts.marketing>

    <x-ui.marketing.breadcrumbs :crumbs="[ ['text' => 'Produtos'] ]"/>

    @volt('produtos.index')
    <div class="relative flex flex-col w-full px-6 py-10 mx-auto lg:max-w-6xl sm:max-w-xl md:max-w-full sm:pb-16">
        <h1 class="text-2xl font-bold tracking-tighter leading-tighter dark:text-white font-heading md:text-3xl">Os nossos produtos</h1>
        <p class="w-full mt-2 text-base font-medium text-neutral-400 dark:text-slate-400 md:mt-2">Conheça a nossa gama de produtos.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-10 mt-10">
            @foreach ($products as $product)
                <div class="flex flex-col bg-white dark:bg-slate-800 rounded-lg shadow-lg p-6">
                    <a href="/{{ $this->route_prefix }}/{{ $product->slug }}" class="block">
                        @if ($product->image)
                            <img src="@if(str_starts_with($product->image, 'https') || str_starts_with($product->image, 'http')){{ $product->image }}@else{{ asset('storage/' . $product->image) }}@endif" class="relative object-cover w-full h-48 bg-gray-200 rounded-lg dark:bg-slate-700" alt="{{ $product->title }}" />
                        @else
                            <div class="flex items-center justify-center w-full text-gray-500 bg-gray-200 dark:bg-gray-800 h-48">
                                <svg class="w-10 h-10 opacity-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                            </div>
                        @endif
                    </a>
                    <div class="mt-4">
                        <h2 class="mb-2 text-xl font-medium leading-tight dark:text-slate-300 font-heading sm:text-2xl">
                            <a class="transition duration-200 ease-in dark:hover:text-blue-700 hover:text-primary" href="{{ $this->route_prefix }}/{{ $product->slug }}">{{ $product->title }}</a>
                        </h2>
                        <p class="text-lg font-light text-muted dark:text-slate-400">{{ substr(strip_tags($product->description), 0, 100) }}@if(strlen(strip_tags($product->description)) > 100){{ '...' }}@endif</p>
                        <p class="mt-2 text-xl font-semibold text-gray-800 dark:text-gray-100">{{ $product->price }}€</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex items-center justify-center w-full pt-5">
            @if (!$finished)
                <button wire:click="loadMore" class="inline-flex tracking-wide uppercase text-xs items-center justify-center px-5 py-2.5 font-semibold bg-gray-200 text-gray-600 hover:text-gray-800 dark:text-gray-100 dark:hover:text-white dark:bg-gray-800 border border-transparent rounded-md shadow-sm dark:hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 dark:focus:ring-gray-900">
                    Load More Products
                </button>
            @else
                <p class="text-sm text-gray-600">No more products.</p>
            @endif
        </div>
    </div>
    @endvolt
</x-layouts.marketing>
