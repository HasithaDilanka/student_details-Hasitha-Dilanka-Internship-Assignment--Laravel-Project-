<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Back To School</title>

    <link rel="icon" type="image/x-icon"
        href="https://cdn.icon-icons.com/icons2/2474/PNG/512/education_cap_graduate_award_icon_149711.png">

    @include('libraries.styles')
</head>

<body>


    @include('components.nav')

    @yield('content')

    @include('libraries.scripts')

    @include('components.footer')

</body>

</html>
