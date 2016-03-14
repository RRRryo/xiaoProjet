@extends('layouts.dashboard')
<?php $page="/dashboard/overview"  ?>

@section('content')
      <form action="/dashboard/pay" method="POST">
            {!! csrf_field() !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_78wCQNrauFORPShFLhjRrs1E"
                    data-amount="2000"
                    data-name="Demo Site"
                    data-description="2 widgets ($20.00)"
                    data-image="/128x128.png"
                    data-locale="auto">
            </script>
      </form>


@endsection