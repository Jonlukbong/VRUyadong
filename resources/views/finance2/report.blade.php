<html>

<head>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" media="all">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <h1 class="name" style="font-weight: bold;">ใบสรุปผลกำไรรายปี</h1>
    <table class="table name">
        <thead>
            <tr>
                <th class="name">เดือน</th>
                <th class="name">ผลรวมกำไรทั้งหมด</th>
                <th class="name">แก้ไข</th>
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