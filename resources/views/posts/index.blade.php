{{-- Method 1: All design in one layout --}}
{{-- @extends('components.layout')

@section('content') --}}
 {{-- call the yield('content') --}}
    {{-- @foreach ($posts as $post)
    <article class="{{ $loop -> even?'foobar': ''}}">
        <h1>
            <a href="/posts/{{  $post->slug }} ">
                {!! $post->title !!}
                {{-- {{ $post->title }}    Only blade file can be use this method 
            </a>
        </h1>

        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            {{-- By <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a> 
        </p>

        <div>
            {!! $post->excerpt !!} 

        </div>

    </article>
    @endforeach --}}

{{-- @endsection --}}

{{-- Method 2: All design in one layout --}}
<x-layout>
    @include ('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())            
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else 
            <p class="text-center">No Post yet. Please check back later.</p>
        @endif

    </main>
</x-layout>
