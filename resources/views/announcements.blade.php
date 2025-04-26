<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game Announcements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            padding: 20px;
        }
        .container {
            background: #fff;
            padding: 30px;
            max-width: 800px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
        }
        .announcement {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
        }
        .announcement h2 {
            margin: 0 0 10px;
        }
        .meta {
            font-size: 0.9em;
            color: #777;
            margin-bottom: 10px;
        }
        .content {
            font-size: 1em;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Game Announcements</h1>

    @if (isset($data['error']))
        <p style="color: red;">Error: {{ $data['error'] }}</p>
    @else
        @foreach ($data['data']['news'] as $item)
            <div class="announcement">
                <h2>{{ $item['news_title'] ?? 'No Title' }}</h2>
                <div class="meta">📅 {{ $item['date'] ?? '-' }} | ❤️ {{ $item['like'] ?? 0 }} Likes</div>
                <div class="content">{{ $item['content'] ?? 'No Content Available' }}</div>
            </div>
        @endforeach
    @endif
</div>

</body>
</html>
