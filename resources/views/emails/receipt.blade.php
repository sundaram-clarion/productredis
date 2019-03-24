<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        Hi {{ $data['firstName'] }},
	<p>
	Thanks for making this order, below are details about your products.
	</p>
	Regards,
	<br />Product Redis
    </body>
</html>
