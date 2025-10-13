<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Tailwind Test</title>

    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 p-10">
    
    <h1 class="text-2xl font-bold mb-4">Hello Sonu..!!</h1>
    
    <!-- Alert Component Test -->
    <x-alert type="success" message="Data saved successfully!" />
    <x-alert type="error" message="Something went wrong!" />
    <x-alert message="This is an info message." />

</body>
</html>
