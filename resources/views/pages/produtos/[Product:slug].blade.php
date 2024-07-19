<x-layouts.marketing>

    <x-ui.marketing.breadcrumbs :crumbs="[
        [
            'href' => '/produtos',
            'text' => 'Produtos'
        ],
        [
            'text' => $product->title
        ]
    ]" />

    <article class="relative w-full h-auto mx-auto prose-sm prose md:prose-2xl dark:prose-invert">
        <div class="py-6 mx-auto heading md:py-12 lg:w-full md:text-center">

            <div class="flex flex-col items-center justify-center mt-4 mb-0">
                <h1 class="!mb-0 font-sans text-4xl font-bold heading md:text-6xl dark:text-white md:leading-tight">
                    {{ $product->title }}
                </h1>
            </div>

            @if ($product->image)
                <img src="@if(str_starts_with($product->image, 'https') || str_starts_with($product->image, 'http')){{ $product->image }}@else{{ asset('storage/' . $product->image) }}@endif" alt="{{ $product->title }}" class="w-2/3 mx-auto mt-4">
            @endif

            <div class="flex items-center justify-center mt-4">
                <p class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Price: {{ $product->price }}</p>
            </div>

            <div class="flex items-center justify-center mt-4 text-left">
                <div class="max-w-full -mt-5 text-lg text-gray-600 whitespace-pre-line dark:text-gray-300">
                    {!! $product->description !!}
                </div>
            </div>
        </div>
    </article>
</x-layouts.marketing>
