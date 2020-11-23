


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>The Good Exchange</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/welcomePage.css') }}">
 
    </head>

    

    <body>

        <div class="header2">
            
            @if (Route::has('login'))
                <div class=" nav-link">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    @endif
                </div>
            @endif
        </div>

    <div class =' bg-image-logo'>
        <div>
           <h1> Temporary text</h1>
            <!-- <h1>
            <img src="{{ Croppa::url('/images/TGE.png', 500, null) }}" alt="Logo">

            </h1> -->
            <a class ='btn' href="{{ route('register') }}">Join Us Now</a>
        </div>
    </div>

    <section class="section1">
    <h2>WHO ARE WE?</h2>

    <p>We are a <strong>community where people help each other</strong> to get through these difficult COVID times. <strong>The Good Exchange connects people who need help  and  people that can provide help.</strong> You can also find useful resources of other helpful organizations and opportunities.</p>
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
<p><strong>Whether you need help or are willing to help, register below to join our community!</strong></p>
<a class ='btn' href="{{ route('register') }}">Register Now</a>

    <!--footer-->

    <footer>
<div class = 'footer-columns'>

 @livewire('footer')

</div>

</footer>
</body>

</html>
