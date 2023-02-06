{{-- <x-layout>
    <h1>{{ $secondblog->title }}</h1>
    <p>{{ $secondblog->body }}</p>
</x-layout> --}}

<x-layout>
    <!-- single blog section -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mt-5">
                <img src="/storage/{{ $secondblog->thumbnail }}" class="card-img-top" alt="..." />
                <h3 class="my-3">{{ $secondblog->title }}</h3>

                <div>Author -<a href="/users/{{ $secondblog->author->username }}"> {{ $secondblog->author->name }}</a>
                </div>
                <div class="my-2"><a href="/catego/{{ $secondblog->category->slug }}"> <span class="badge bg-primary">
                            {{ $secondblog->category->name }}</span></a></div>
                <div class="text-secondary my-2">{{ $secondblog->created_at->diffForHumans() }}</div>

                <p class="lh-md mt-4">
                    {!! $secondblog->body !!}
                </p>
            </div>
        </div>
    </div>

    @auth
        <x-commentform :secondblog="$secondblog" />
    @else
        <p class="text-center">Please <a href="/login">Login</a> to participate in this discussion</p>
    @endauth

    @if ($secondblog->comments->count())
        <x-comment :comments="$secondblog->comments" />
    @endif

    <x-blogs_youMayLike :randomblogs='$random' />
</x-layout>
