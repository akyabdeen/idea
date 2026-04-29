<x-layout>

    <x-form title="Register an account" description="Start tracking your ideas today">
        <form class="mt-10 space-y-4" action="/register" method="POST">
            @csrf
            <x-form.field label="Name" key="name" />
            <x-form.field label="Email" key="email" type="email"/>
            <x-form.field label="Password" key="password" type="password"/>

            <button type="submit" class="btn mt-2 h-10">Create Account</button>
        </form>
    </x-form>
</x-layout>
