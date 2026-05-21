<!DOCTYPE html>
<html>
<head>
    <title>GlowGuide Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff5f8;
            color: #333;
            padding: 40px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        h1 {
            color: #e91e63;
        }

        a, button {
            background: #f8bbd0;
            color: #880e4f;
            border: none;
            padding: 8px 14px;
            border-radius: 10px;
            text-decoration: none;
            cursor: pointer;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #f8bbd0;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .category-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
            margin-bottom: 10px;
            background: #fff0f5;
            border-radius: 10px;
        }

        .actions {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>