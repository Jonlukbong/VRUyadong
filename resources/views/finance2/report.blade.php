<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" media="all">
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ asset('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ asset('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ asset('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }

        body {
            font-family: "THSarabunNew";
        }
    </style>
</head>

<body>
    <h1 class="name" style="font-weight: bold;">Monthly Profit Summary{{$users->id}}</h1>
    <table class="table name">
        <thead>
            <tr>
                <th class="name">Mount555</th>
                <th class="name">Total profit</th>
                <th class="name">User_id</th>
            </tr>
        </thead>
        <tbody>
            @foreach($finance2 as $finance2)
            <tr>
                <td>{{ $finance2->created_at->toDateString() }}</td>
                <td>{{ $finance2->sum2 }}</td>
                <td>{{ $finance2->user_id }}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</body>

</html>