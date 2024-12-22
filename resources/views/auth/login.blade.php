<x-guest-layout title="Login" bodyClass="page-login">

    <form action="" method="post">
        <div class="form-group">
            <input type="email" placeholder="Your Email" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password" />
        </div>
        <div class="text-right mb-medium">
            <a href="/password-reset.html" class="auth-page-password-reset">Reset Password</a>
        </div>

        <button class="btn btn-primary btn-login w-full">Login</button>

        <x-slot:bottomLink>
            Don't have an account? -
            <a href="/signup"> Click here to create one</a>
        </x-slot:bottomLink>
    </form>

</x-guest-layout>
