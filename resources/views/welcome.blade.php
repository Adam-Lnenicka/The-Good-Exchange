<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>

        <style>

            

            h1{
                text-transform:uppercase;
                font-weight: 900;
                letter-spacing: 1px;
            }

            h2{
                text-transform:uppercase;
                letter-spacing: 1px;
            }
            body {
                margin:0;
                font-family: 'Nunito';
                text-align: center;
                
            }

            .banner{
                background-color:grey;
                display: flex;
                height: 60vh;
                justify-content:center;
                align-items: center;
            }

            .btn{
                background-color: orange;
                padding: 0.3em 1.7em;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 1px;
                font-weight: 900;
                border-radius: 1em;
                color:black;
            }

            .section1{
                margin: 3em 2em;
            
            }
            .section1 p{
                font-size: 1.4rem;
            }

            footer{
                background-color: black;
                color: white;
                padding:2em;
                margin-top: 4em; 
                height: 40px;
            }

            @media (min-width: 600px) {
                .benefits-flexbox{
                    display:flex;
                    justify-content: center;
                    
                    
                    
                }
                .benefit{
                    padding:1em;
                    width:33%
                }
            }
        </style>
    </head>

    

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif

    <div class ='banner'>
        <div>
            <h1>The Good Foundation</h1>
            <a class ='btn' href="{{ route('register') }}">Join Us Now</a>
        </div>
    </div>

    <section class="section1">
    <h2>WHO ARE WE?</h2>

    <p>We are a <strong>community where people help each other</strong> to get through these difficult COVID times. <strong>The Good Foundation connects people who need help  and  people that can provide help.</strong> You can also find useful resources of other helpful organizations and opportunities.</p>
    </section>
    
    <section class ='section2'>
        <h2>Key services that our network facilitates</h2> 
        <div class ='benefits-flexbox'>
            <div class ='benefit'>

                <h3>Food Delivery</h3>
                <p>Do you need help with your food supplies or able to deliver food?</p>
            </div>
            <div  class ='benefit'>
                <h3>Medicine Delivery</h3>
                <p>Getting medicine is essential especially for older citizens. Register if you need help here, or able to provide help.</p>
            </div>
            <div class ='benefit'>
                <h3>Handy Man</h3>
                <p>Even during quarrantine times things can break in your house. We also facilitate plumbing and handyman services.</p>
            </div>
        </div>
    </section> 

<h2>Whats next?</h2> 
<p>Whether you need help or are willing to help, register below to join our community!</p>
<a class ='btn' href="{{ route('register') }}">Learn More</a>

    <!--footer-->

    <footer>
        <div class = 'footer-columns'>

 @livewire('footer')

</body>
</html>
