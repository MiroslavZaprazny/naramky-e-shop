<x-app-layout>
    <div class="px-24 py-24">
        <div class="w-160 mx-auto border rounded-xl">
            <div class="border-b px-5 py-4 text-gray-800">
                <h4 class="font-semibold text-2xl">
                    Prihlásenie
                </h4>
                <p class="text-gray-500 text-sm mt-1">
                    Nemáte vytvorené konto?
                    <span class="font-bold text-gray-600 hover:underline ml-1">
                        <a href={{ route('register.create') }}>
                            Zaregistrujte sa
                        </a>
                    </span>
                </p>
            </div>
            <form method="POST" action={{ route('login.store') }} class="px-6 pt-2 pb-6 space-y-4">
                @csrf
                <div class="flex flex-col">
                    <label class="font-semibold text-sm text-gray-800 mb-1">Email</label>
                    <input type="email" name="email" class="border w-5/6 ml-2 rounded-lg py-2 px-2 text-gray-700"
                        value={{ old('email') }}>
                    @include('components.form-error-message', ['field' => 'email'])
                </div>
                <div class="flex flex-col">
                    <label class="font-semibold text-sm text-gray-800 mb-1">Heslo</label>
                    <input type="password" name="password" class="border w-5/6 ml-2 rounded-lg py-2 px-2 text-gray-700">
                    @include('components.form-error-message', ['field' => 'password'])
                </div>
                @include('components.form-error-message', ['field' => 'wrongCredentials'])
                <button
                    class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition duration-200 ease-in">
                    Prihláste sa
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
