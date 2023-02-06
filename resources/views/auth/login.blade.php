<x-layout>
    <div class="container">
        <div class="row">
            <div class="card col-md-6 m-auto my-5 p-4 shadow-lg">
                <form method="post">
                    @csrf
                    <h2 class="text-center text-primary my-3">Login</h2>


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email" value="{{ old('email') }}" required>
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
