<x-layout>
    <x-form title="Log In" description="Glad to have you back">
        <form class="mt-10 space-y-4" action="/login" method="POST">
            @csrf
            <x-form.field label="Email" key="email" type="email"/>
            <x-form.field label="Password" key="password" type="password"/>

            <button type="submit" class="btn mt-2 h-10">Sign In</button>
        </form>
    </x-form>
</x-layout>
