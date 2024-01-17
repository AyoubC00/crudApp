@extends("layouts.index")

@section("users")

<div class="w-3/4 mx-auto mt-16 border py-12 px-16 rounded-md">
    <div class="flex justify-between">
        <div>
            <h4 class="text-2xl font-semibold mb-2">Archived users</h4>
            <p class="text-sm text-gray-500 mb-16">A table of available users in out database</p>
        </div>
        <a href="/users/create" class="h-fit bg-slate-900 text-slate-50 px-6 py-2 rounded-md hover:bg-slate-800">New
            user</a>
    </div>
    <x-users />
</div>
@endsection