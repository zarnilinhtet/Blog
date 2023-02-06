@props(['comments'])
<section style="">
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="card text-dark">
                    <div class="card-body p-4">
                        <h4 class="mb-0">Recent comments ( {{ $comments->count() }} )</h4>
                        <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>
                        @foreach ($comments as $comment)
                            <x-single-comment :comment="$comment" />
                        @endforeach


                    </div>
                    <hr class="my-0" />
                </div>
            </div>
        </div>
    </div>
</section>
