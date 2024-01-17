@extends("layouts.index")

@section("createUser")

<div class="w-7/12 mx-auto mt-16 border py-12 px-16 rounded-md mb-16">
    <form action="#">
        <div class="flex justify-between mb-12">
            <div>
                <h4 class="text-2xl font-semibold mb-2">User record</h4>
                <p class="text-sm text-gray-500">Fill the form bellow with valid user information</p>
            </div>
            <a href="/users/1" class="h-fit flex gap-2  text-slate-900 hover:shadow-sm px-3 py-1.5 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9.75 14.25 12m0 0 2.25 2.25M14.25 12l2.25-2.25M14.25 12 12 14.25m-2.58 4.92-6.374-6.375a1.125 1.125 0 0 1 0-1.59L9.42 4.83c.21-.211.497-.33.795-.33H19.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25h-9.284c-.298 0-.585-.119-.795-.33Z" />
                </svg>
                Go back
            </a>
        </div>
        <div class="flex gap-12 mb-8">
            <x-image-loader />
            <div class="flex flex-col justify-between w-full">
                <x-form-input label="First name" />
                <x-form-input label="Last name" />
                <x-form-input label="Email" />
            </div>
        </div>
        <div class="flex gap-8 w-full mb-8">
            <x-form-input label="Phone" />
            <x-form-input label="Address" />
        </div>
        <button class="bg-slate-900 hover:bg-slate-800 text-slate-50 rounded-md py-2 w-full">Save</button>
    </form>
</div>

@endsection