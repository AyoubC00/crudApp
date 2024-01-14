@extends("layouts.index")

@section("users")

<div class="border py-12 px-16 rounded-md mb-16">
    <div class="flex justify-between items-start mb-8">
        <div>
            <h3 class="mb-2 text-xl font-semibold text-gray-800">Users</h3>
            <p class="text-sm text-gray-500">A table of existing users in our database</p>
        </div>
        <form action="{{route('users.create')}}">
            <input type="submit" value="New user"
                class="bg-blue-800 hover:bg-blue-700 cursor-pointer text-white py-2 px-4 rounded-md transition-all" />
        </form>
    </div>
    <table class="border-collapse w-full text-left">
        <thead>
            <tr class="[&>th]:border-b [&>th]:py-4 text-sm text-gray-700">
                <th class="ps-6">Name</th>
                <th class="w-24 text-center">Id</th>
                <th>Email</th>
                <th>Telephone</th>
                <th class="pe-6 text-right">Address</th>
            </tr>
        </thead>
        <tbody>
            @if(!@empty($users))
            @foreach($users as $user)
            <tr class="[&>td]:py-2 border-b last:border-b-0 hover:bg-gray-50 hover:cursor-pointer font-light text-sm">
                <td class="flex items-center gap-6 ps-6 font-normal">
                    <img class="h-10 rounded-full w-10" src={{$user->image}} alt="User image">
                    {{$user['name']}}
                </td>
                <td class="text-center">{{$user['id']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['telephone']}}</td>
                <td class="pe-6 text-right">{{$user['address']}}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    @if(@empty($users))
    <p class="text-lg p-4 font-light text-gray-500">There are no users currently in our database</p>
    @endif
</div>

@endsection