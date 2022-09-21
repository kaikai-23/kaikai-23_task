<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>タスク編集</h1>

    @if($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/tasks/{{ $task->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タスクタイトル</label><br>
            <input type="text" name="title" value="{{ old('title',$task->title) }}">
        </p>
        <p>
            <label for="body">内容</label><br>
            <textarea name="body" class="body">{{ old('body',$task->body) }}</textarea>
        </p>
        <div class="botton-group">
            <input type="submit" value="更新">
            <button onclick="location.href='/tasks/{{ $task->id }}'">詳細へ戻る</button>
        </div>
        </form>
</body>
</html>
