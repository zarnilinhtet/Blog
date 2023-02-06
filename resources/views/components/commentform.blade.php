@props(['secondblog'])
<section class="container">
    <div class="my-5 py-3 ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="card text-dark">
                    <div class="card-body p-4">
                        <form action="/firstblog/{{ $secondblog->slug }}/comments" method="POST">
                            @csrf
                            <div class="form-floating">
                                <textarea class="form-control border border-0" placeholder="Leave a comment here" id="floatingTextarea2"
                                    style="height: 100px" name="body" required></textarea>
                                <label for="floatingTextarea2">Say Something...</label>

                            </div>
                            <x-error name="body" />
                            <div class="d-flex justify-content-end">

                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </div>
                        </form>
                    </div>
</section>
