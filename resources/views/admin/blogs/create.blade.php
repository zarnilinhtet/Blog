<x-admin-layout>

    <div class="container my-5">
        <h3 class="text-center text-primary">Blog Create Form</h3>
        <div class="card shadow-sm">
            <div class="col-md-10 mx-auto my-5">
                <form action="/admin/blogs/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-form.input name='title' />
                    <x-form.input name='intro' />
                    <x-form.input name='slug' />

                    <x-form.textarea name='body' />
                    <x-form.input name='thumbnail' type="file" />


                    <x-form.input-wrapper>
                        <x-form.label name="category" />
                        <select name="category_id" id="" class="form-control">
                            @foreach ($categories as $category)
                                <option {{ $category->id == old('category_id') ? 'selected' : '' }}
                                    value="{{ $category->id }}  ">

                                    {{ $category->name }}
                                </option>
                            @endforeach

                        </select>
                        <x-error name="category_id" />
                    </x-form.input-wrapper>

                    <button type="submit" class="btn btn-outline-primary mt-3">Create </button>
                </form>

            </div>
        </div>

    </div>
</x-admin-layout>
