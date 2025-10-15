<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Custom UI</title>

    <!-- Linking External CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="main-container">

    <div class="container">
        <h1 class="title">👋 Hello Sonu!</h1>
        <p class="subtitle">Welcome to your Laravel interactive page!</p>

        <!-- Alert Section -->
        <div class="alerts">
            <x-alert type="success" message="✅ Data saved successfully!" />
            <x-alert type="error" message="❌ Something went wrong!" />
            <x-alert message="ℹ️ This is an info message." />
        </div>

        <!-- Session Message -->
        @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
        @endif

        <!-- Button Example -->
        <div class="actions">
            <button class="btn btn-primary">Click Me</button>
            <button class="btn btn-secondary">Cancel</button>
        </div>
    </div>

</body>
</html>
