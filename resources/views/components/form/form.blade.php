@props ([
    'title',
    'description'
])
<div class="flex min-h-[calc(100dvh-4rem)] items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="text-center">
            <h1 class="text-3xl font-bold tracking-tight">{{ $title }}</h1>
            <h1 class="text-muted-foreground mt-1">{{ $description }}</h1>
        </div>


        {{ $slot }}
    </div>
</div>
