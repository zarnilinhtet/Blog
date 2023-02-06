{{-- <x-layout >
    <x-slot name="title"><title>All Blog</title></x-slot>
        @foreach ($firstblog as $firstblogs)
<h1><a href="firstblog/{{ $firstblogs->slug }}">{{ $firstblogs->title }}</a></h1>

<h4><a href="/users/{{ $firstblogs->author->username }}">Author - {{ $firstblogs->author->name }}</a> </h4>

<p>
    Category - <a href="/catego/{{ $firstblogs->category->slug }}"> {{ $firstblogs->category->name }}</a>
</p>

<p>{{ $firstblogs->intro }}</p>
<p>Time - {{ $firstblogs->created_at->diffForHumans()}}</p>
@endforeach


</x-layout> --}}


{{-- @dd($categories) --}}


<x-layout>

    @if (session('success'))
        <div class="alert alert-primary text-center" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <x-hero />
    <x-blogsection :mainblog="$firstblog" />



</x-layout>
