@extends('layouts.dashboard')
<?php $page = "/dashboard/sender"  ?>
@section('content')


    <form action="" method="POST">
    <script
            src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
            data-key="pk_test_G5YhIkq2PEq84lwU064TZENT"
            data-amount="2000"
            data-name="Demo Site"
            data-description="2 widgets ($20.00)"
            data-image="/128x128.png">
    </script>
    </form>

@stop