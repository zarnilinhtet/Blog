<x-admin-layout>
    <h2 class="text-center text-primary my-2">Blogs Action</h2>
    <div class="card my-5">
        <table class="table ">

            <thead>
                <tr>

                    <th scope="col">Title</th>
                    <th scope="col">Intro</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td> <a href="/firstblog/{{ $blog->slug }}" target="_blank">{{ $blog->title }}</a></td>
                        <td>{{ $blog->intro }}</td>
                        <td><a href="/admin/blogs/{{ $blog->slug }}/edit" class="btn btn-warning">Edit</a></td>
                        <td>
                            <form action="/admin/blogs/{{ $blog->slug }}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>

    </div>
    {{ $blogs->links() }}
</x-admin-layout>
