<x-layout>
    <div class="container">
        <div class="row">
            <div class="card col-md-6 m-auto my-5 p-4 shadow-lg">
                <form method="post">
                    @csrf
                    <h2 class="text-center text-primary my-3">Register</h2>
                    <div class="mb-3">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                            name="username" value="{{ old('username') }}" required>
                        <x-error name="username" />
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                            name="name" value="{{ old('name') }}" required>
                        <x-error name="name" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" required class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                        <x-error name="email" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                        <x-error name="password" />
                    </div>

                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
