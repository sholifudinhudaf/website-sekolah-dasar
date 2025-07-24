<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Website SD N 1 Bandarjo
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e88e5',
                        secondary: '#bfbd26',
                        light: '#f5f7fa',
                        dark: '#1a237e'
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif']
                    },
                    boxShadow: {
                        'custom': '0 4px 20px 0 rgba(0, 0, 0, 0.05)',
                    }
                }
            }
        }
    </script>
    <style>
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
    </style>
</head>

<body class="leading-normal tracking-normal base-color" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <x-user.navbar />

    <!--Hero-->
    <div>
        {{ $slot }}
    </div>

    <!--Footer-->
    <x-user.footer />
    @livewireScriptConfig
</body>

</html>