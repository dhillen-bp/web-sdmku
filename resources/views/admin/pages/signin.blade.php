<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.head')

<body>

    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Sign In!</h1>
                <p class="py-6">Halaman Sign In untuk Admin Web SD Muhammadiyah Klaten Utara.</p>
            </div>
            <div class="card w-full max-w-sm shrink-0 bg-base-100 shadow-2xl">
                <form class="card-body">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" placeholder="email" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" placeholder="password" class="input input-bordered" required />
                        <label class="label">
                            <a href="#" class="link-hover link label-text-alt">Forgot password?</a>
                        </label>
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
