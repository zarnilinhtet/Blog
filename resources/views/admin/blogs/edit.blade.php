<x-admin-layout>

    <div class="container my-5">
        <h3 class="text-center text-primary">Blog Edit Form</h3>
        <div class="card shadow-sm">
            <div class="col-md-10 mx-auto my-5">
                <form action="/admin/blogs/{{ $blog->slug }}/update" method="POST" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <x-form.input name='title' value="{{ $blog->title }}" />
                    <x-form.input name='intro' value="{{ $blog->intro }}" />
                    <x-form.input name='slug' value="{{ $blog->slug }}" />

                    <x-form.textarea name='body' value="{{ $blog->body }}" />
                    <x-form.input name='thumbnail' type="file" />
                    <img src="/storage/{{ $blog->thumbnail }}" alt="" width="200px" height="100px">

                    <x-form.input-wrapper>
                        <x-form.label name="category" />
                        <select name="category_id" id="" class="form-control">
                            @foreach ($categories as $category)
                                <option {{ $category->id == old('category_id', $blog->category->id) ? 'selected' : '' }}
                                    value="{{ $category->id }}  ">

                                    {{ $category->name }}
                                </option>
                            @endforeach

                        </select>
                        <x-error name="category_id" />
                    </x-form.input-wrapper>

                    <button type="submit" class="btn btn-outline-primary mt-3">Edit </button>
                </form>

            </div>
        </div>

    </div>
</x-admin-layout>
