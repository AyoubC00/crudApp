@extends("layouts.index")

@section("form")

<div class="border py-12 px-16 rounded-md mb-16 w-3/4 mx-auto">
    <div class="flex justify-between items-start mb-12">
        <div>
            <h3 class="mb-2 text-xl font-semibold text-gray-800">User information</h3>
            <p class="text-sm text-gray-500">Fill the form bellow with valid user information</p>
        </div>
        <a href="/" class="text-gray-500 flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
            </svg>
            <span>Cancel</span>
        </a>

    </div>
    <form action="{{route('users.update', $user['id'])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex gap-12 [&>div>label]:font-semibold text-gray-700 mb-8">
            <div class="text-center">
                <label for="profileImage"
                    class="border h-60 relative overflow-hidden border-gray-300 @error('image') is-invalid-image @enderror border-dashed rounded-md p-8 text-center flex flex-col items-center justify-center w-52 font-semibold text-gray-500 gap-4 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-16 h-16 text-gray-300">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    <img id="profileImagePreview" src="{{$user['image']}}" class="h-full w-full absolute object-cover"
                        alt="">
                    <span>Upload an image</span>
                    <span class="text-sm text-slate-400 font-light">JPG, JPEG, PNG up to 1MB</span>
                </label>
                <input type="file" name="image" id="profileImage" class="hidden">
                @error('image')
                <p class="text-sm mt-1 text-start text-red-400">{{$message}}</p>
                @enderror
            </div>
            <div class="w-full flex flex-col gap-4 justify-between">
                <div>
                    <label for="fname" class="block mb-2 text-sm">First name</label>
                    <input type="text" name="fname" id="fname" value="{{$user['fname']}}"
                        class="border text-sm px-3 py-2 outline-gray-600 rounded-md shadow-sm w-full @error('fname') is-invalid @enderror">
                    @error('fname')
                    <p class="text-sm mt-1 text-red-400">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="lname" class="block mb-2 text-sm">Last name</label>
                    <input type="text" name="lname" id="lname" value="{{$user['lname']}}"
                        class="border text-sm px-3 py-2 outline-gray-600 rounded-md shadow-sm w-full @error('fname') is-invalid @enderror">
                    @error('lname')
                    <p class="text-sm mt-1 text-red-400">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm">Email</label>
                    <input type="text" name="email" id="email" value="{{$user['email']}}"
                        class="border text-sm px-3 py-2 outline-gray-600 rounded-md shadow-sm w-full @error('fname') is-invalid @enderror">
                    @error('email')
                    <p class="text-sm mt-1 text-red-400">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="flex gap-6 mb-8">
            <div class="w-full">
                <label for="telephone" class="block mb-2 text-sm">Telephone</label>
                <input type="text" name="telephone" id="telephone" value="{{$user['telephone']}}"
                    class="border text-sm px-3 py-2 outline-gray-600 rounded-md shadow-sm w-full @error('fname') is-invalid @enderror">
                @error('telephone')
                <p class="text-sm mt-1 text-red-400">{{$message}}</p>
                @enderror
            </div>
            <div class="w-full">
                <label for="address" class="block mb-2 text-sm">Address</label>
                <input type="text" name="address" id="address" value="{{$user['address']}}"
                    class="border text-sm px-3 py-2 outline-gray-600 rounded-md shadow-sm w-full @error('fname') is-invalid @enderror">
                @error('address')
                <p class="text-sm mt-1 text-red-400">{{$message}}</p>
                @enderror
            </div>
        </div>
        <input type="submit" value="save"
            class="bg-blue-800 hover:bg-blue-700 text-white py-2 px-6 w-full cursor-pointer  rounded-md transition-all" />
    </form>
</div>

@endsection