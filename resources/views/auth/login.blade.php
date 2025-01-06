<x-layout>
    <x-slot name="heading">
        Create Job
    </x-slot>
    <form method="POST" action="/login">
        @csrf
        <div>
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="email">
                            Email
                        </x-form-label>
                        <div class="mt-2">
                            {{-- This  is how we can get the old value of the email  if we want --}}
                            <x-form-input name="email" id="email" type="email" :value="old('email')" placeholder="email" required />
                            <x-form-error name="email"></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">
                            Password
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password" placeholder="Password" required />
                            <x-form-error name="password"></x-form-error>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <x-form-button> Log In </x-form-button>
        </div>
    </form>

</x-layout>
