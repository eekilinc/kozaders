<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title }}</title>
</head>

<body style="background: white;">
    <table border="1" style="border:1px solid black;">
        <thead>
            <tr>
                <th>Ad</th>
                <th>Soyad</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($adlar); $i++)
                <tr>
                    <td>{{ $adlar[$i] }}</td>
                    <td>{{ $soyadlar[$i] }}</td>
                <tr>
            @endfor

            </tr>
        </tbody>
    </table>



</body>

</html>
