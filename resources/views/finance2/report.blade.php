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
    <h1 class="name" style="font-weight: bold;">hello</h1>
    <p>สวัสดี</p>
    <table class="table name">
        <thead>
            <tr>
                <th class="name">Mount</th>
                <th class="name">ผลรวมกำไรทั้งหมด</th>
            </tr>
        </thead>
        <tbody>
            @foreach($finance2 as $item)
            <tr>
                <td class="name">{{ $item->created_at->toDateString() }}</td>
                <td class="name">{{ $item->sum2 }}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</body>

</html>