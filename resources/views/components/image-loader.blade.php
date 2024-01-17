@vite("resources/js/imageLoader.js")
<div>
    <label for="imageLoader" id="imageLoaderPlaceholder"
        class="{{$isInvalid ? 'is-invalid-image' : ''}} border border-dashed rounded-md h-60 w-52 px-8 py-9 flex flex-col justify-center items-center text-gray-500 font-semibold cursor-pointer relative overflow-hidden">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-16 h-16 text-gray-300">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
        </svg>
        <span class="my-auto">Load an image</span>
        <p class="text-center text-gray-400 text-sm font-light leading-6">JPG, JPEG, PNG up to 1MB</p>
        <img src="{{$src}}" alt="" id="imagePreview" class="absolute w-full h-full object-cover">
    </label>
    <input type="file" name="imageLoader" id="imageLoader" class="hidden">
</div>