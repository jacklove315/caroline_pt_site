<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Caroline</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- custom styles -->
    <link href="{{asset('styles/dashboard.css')}}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>

    <!-- stripe src -->
    <script src="https://js.stripe.com/v3/"></script>

</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Caroline Greene</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>

<div class="container-fluid">
    <div class="row">
        @include('dashboard.inc.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1>Pay Caroline</h1>
            </div>

            <!-- Stripe form -->
            <div class="container">
                <!-- stripe js targets this form to validate the stripe card and card holder name components-->
                <form method="POST" action="{{route('stripePost')}}" class="card-form mt-3 mb-3">
                    @csrf
                    <input type="hidden" name="payment_method" class="payment-method">
                    <!-- stripe js will look for this input via name -->
                    <input class="StripeElement mb-3" name="card_holder_name" placeholder="Card holder name" >
                    <div class="col-lg-4 col-md-6">
                        <div id="card-element">
                            <!-- stripe will get inserted here -->
                        </div>
                    </div>
                    <div id="card-errors" role="alert"></div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary pay">
                            Purchase
                        </button>
                    </div>
                </form>
            </div>

            <!-- stripe form script -->
            <script>
                let stripe = Stripe("{{ env('STRIPE_KEY') }}")
                let elements = stripe.elements()
                let style = {
                    base: {
                        color: '#32325d',
                        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                        fontSmoothing: 'antialiased',
                        fontSize: '16px',
                        '::placeholder': {
                            color: '#aab7c4'
                        }
                    },
                    invalid: {
                        color: '#fa755a',
                        iconColor: '#fa755a'
                    }
                }
                let card = elements.create('card', {style: style})
                card.mount('#card-element')
                let paymentMethod = null
                $('.card-form').on('submit', function (e) {
                    $('button.pay').attr('disabled', true)
                    if (paymentMethod) {
                        return true
                    }
                    stripe.confirmCardSetup(
                        "{{ $intent->client_secret }}",
                        {
                            payment_method: {
                                card: card,
                                billing_details: {name: $('.card_holder_name').val()}
                            }
                        }
                    ).then(function (result) {
                        if (result.error) {
                            $('#card-errors').text(result.error.message)
                            $('button.pay').removeAttr('disabled')
                        } else {
                            paymentMethod = result.setupIntent.payment_method
                            $('.payment-method').val(paymentMethod)
                            $('.card-form').submit()
                        }
                    })
                    return false
                })
            </script>

        </main>
        <footer class="footer mt-auto py-3 bg-light" style="position:absolute;
   bottom:0;
   width:100%;
   height:60px;   /* Height of the footer */
   background:#6cf;">
            <div class="d-flex justify-content-end">
                Made with Love from Love Devs
            </div>
        </footer>
    </div>
</div>


<!-- boostrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>




















