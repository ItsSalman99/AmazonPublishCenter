<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CLIENTS - {{ env('APP_NAME') }}</title>
</head>

<body>
    <div style="margin-top: 50px; margin-bottom: 50px;">
        <div >
            <div>
                <img src="{{ public_path('assets/frontend/images/logos/newlogo.png') }}" width="20%" alt="">
            </div>
            <div style="position: absolute; top: 50px; left: 150px;">
                <h2>Clients Detail - {{ env('APP_NAME') }}</h2>
                <span style="border-bottom: 2px solid #000; color: dodgerblue;">Export Date: {{ date('F j Y') }}</span>
            </div>
        </div>
    </div>
    <table style="border-collapse: collapse; margin:50px auto;">
        <thead>
            <tr>
                <th style="padding: 10px; border: 1px solid #ccc; text-align: left; font-size: 18px; background: #3498db; color: white; font-weight: bold">
                    Client Name
                </th>
                <th style="padding: 10px; border: 1px solid #ccc; text-align: left; font-size: 18px; background: #3498db; color: white; font-weight: bold">
                    Client Contact
                </th>
                <th style="padding: 10px; border: 1px solid #ccc; text-align: left; font-size: 18px; background: #3498db; color: white; font-weight: bold">
                    Client Email
                </th>
                <th style="padding: 10px; border: 1px solid #ccc; text-align: left; font-size: 18px; background: #3498db; color: white; font-weight: bold">
                    Client Region
                </th>
                <th style="padding: 10px; border: 1px solid #ccc; text-align: left; font-size: 18px; background: #3498db; color: white; font-weight: bold">
                    Client Profession
                </th>
                <th style="padding: 10px; border: 1px solid #ccc; text-align: left; font-size: 18px; background: #3498db; color: white; font-weight: bold">
                    Client Note
                </th>
                <th style="padding: 10px; border: 1px solid #ccc; text-align: left; font-size: 18px; background: #3498db; color: white; font-weight: bold">
                    Date Of Submission
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td style="padding: 10px; border: 1px solid #ccc; text-align: left; font-size: 16px;" data-column="Client Name">
                        {{ $client->name }}
                    </td>
                    <td style="padding: 10px; border: 1px solid #ccc; text-align: left; font-size: 16px;" data-column="Client Contact">
                        {{ $client->contact }}
                    </td>
                    <td style="color: dodgerblue; padding: 10px; border: 1px solid #ccc; text-align: left; font-size: 16px;" data-column="Client Email">
                        {{ $client->email }}
                    </td>
                    <td style="padding: 10px; border: 1px solid #ccc; text-align: left; font-size: 16px;" data-column="Client Region">
                        {{ $client->region->name }}
                    </td>
                    <td style="padding: 10px; border: 1px solid #ccc; text-align: left; font-size: 16px;" data-column="Client Profession">
                        {{ $client->profession }}
                    </td>
                    <td style="padding: 10px; border: 1px solid #ccc; text-align: left; font-size: 16px;" data-column="Client Note">
                        {{ $client->message_note }}
                    </td>
                    <td style="padding: 10px; border: 1px solid #ccc; text-align: left; font-size: 16px;" data-column="Date Of Submission">
                        {{ date('F j Y', strtotime($client->created_at)) }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
