<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    @vite("resources/js/app.js")
    @vite("resources/css/app.css")
</head>

<body>
    <nav class="bg-gray-600 text-gray-50 py-4 mb-16">
        <div class="w-3/4 mx-auto flex items-center">
            <a href="/" class="text-lg">CRUD APP</a>
            <ul class="ms-16">
                <li><a href="/">Home</a></li>
            </ul>
        </div>
    </nav>
    <div class="w-3/4 mx-auto">
        @yield("users")
        @yield("form")
        @yield("details")
    </div>
</body>

</html>