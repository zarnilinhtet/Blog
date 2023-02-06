@props(['blogcard'])
<div class="card">
    <img src="/storage/{{ $blogcard->thumbnail }}" class="card-img-top" alt="..." />
    <div class="card-body">
        <h3 class="card-title">{{ $blogcard->title }}</h3>
        <p class="fs-6 text-secondary">
            <a href="/?username={{ $blogcard->author->username }}">{{ $blogcard->author->name }} </a>
            <span>- {{ $blogcard->created_at->diffForHumans() }}</span>
        </p>
        <div class="tags my-3">
            <a href="/?category={{ $blogcard->category->slug }}"><span
                    class="badge bg-primary">{{ $blogcard->category->name }}</span></a>
            {{-- <span class="badge bg-secondary">Css</span>
        <span class="badge bg-success">Php</span>
        <span class="badge bg-danger">Javascript</span>
        <span class="badge bg-warning text-dark">Frontend</span> --}}
        </div>
        <p class="card-text">
            {{ $blogcard->intro }}
        </p>
        <a href="/firstblog/{{ $blogcard->slug }}" class="btn btn-primary">Read More</a>
    </div>
</div>
