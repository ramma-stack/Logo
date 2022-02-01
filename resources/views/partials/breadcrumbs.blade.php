<nav class="rounded-md w-full">
    @unless ($breadcrumbs->isEmpty())
    <ol class="breadcrumb list-reset flex">
        @foreach ($breadcrumbs as $breadcrumb)

        @if (!is_null($breadcrumb->url) && !$loop->last)
            @if ($breadcrumb->url == route('home'))
            <li class="breadcrumb-item"><a class="text-blue-600 hover:text-blue-700"" href="/">{{ $breadcrumb->title }}</a></li>
            @else
            <li class="breadcrumb-item"><a class="text-blue-600 hover:text-blue-700"" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @endif
        <span class="text-gray-500 mx-2">/</span>
        @else
        <li class="breadcrumb-item active text-gray-500">{{ $breadcrumb->title }}</li>
        @endif

        @endforeach
    </ol>
    @endunless
</nav>