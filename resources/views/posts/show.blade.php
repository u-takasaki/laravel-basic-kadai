<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border=1>
    <tr>
      <th>ID</th>
      <th>title</th>
      <th>content</th>
      <th>created_at</th>
      <th>updated_at</th>
    </tr>
    <tr>
      <td>{{ $post->id }}</td>
      <td>{{ $post->title }}</td>
      <td>{{ $post->content }}</td>
      <td>{{ $post->created_at }}</td>
      <td>{{ $post->updated_at }}</td>
    </tr>
  </table>
</body>
</html>