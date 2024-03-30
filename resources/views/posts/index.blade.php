<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table, table th, table td{
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>
</head>
<body>
  <h1>ぽすと</h1>
  <table>
    <tr>
      <th>タイトル</th>
      <th>本文</th>
      <th>作成日時</th>
      <th>更新日時</th>
    </tr>
    @foreach($posts as $post)
      <tr>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>{{ $post->created_at }}</td>
        <td>{{ $post->updated_at }}</td>
      </tr>
    @endforeach
  </table>
</body>
</html>