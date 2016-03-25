@extends('layouts.dashboard')
<?php $page="/dashboard/charge"  ?>
@section('content')
      <h2>充值金额</h2>
      <form method="post" id="form_transfer" action="/dashboard/charge">
            {!! csrf_field() !!}
            <select name="amount" id="amount" class="form-control" style="width:150px;display:inline-block;" required="" {{--onchange="this.form.submit()"--}}>
                  <option value="5000">50€</option>
                  <option value="10000">100€</option>
                  <option value="15000">150€</option>
                  <option value="20000">200€</option>
                  <option value="25000">250€</option>
                  <option value="30000">300€</option>
                  <option value="35000">350€</option>
                  <option value="40000">400€</option>
                  <option value="50000">500€</option>
                  <option value="60000">600€</option>
                  <option value="80000">800€</option>
                  <option value="100000">1000€</option>
            </select>

            {{--<script src="https://checkout.stripe.com/checkout.js"></script>--}}
            {{--<button id="customButton" class="btn btn-warning">立即充值</button>--}}
            {{--<script>
                  var handler = StripeCheckout.configure({
                        key: 'pk_test_78wCQNrauFORPShFLhjRrs1E',
                        image: '/img/remark.png',
                        locale: 'zh',
                        token: function(token) {
                              // Use the token to create the charge with a server-side script.
                              // You can access the token ID with `token.id`
                        }
                  });

                  $('#customButton').on('click', function(e) {
                        // Open Checkout with further options
                        handler.open({
                              name: 'X-parcel',
                              description: '2 widgets',
                              zipCode: true,
                              currency: "eur",
                              amount: 2000
                        });
                        e.preventDefault();
                  });

                  // Close Checkout on page navigation
                  $(window).on('popstate', function() {
                        handler.close();
                  });
            </script>--}}
            <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_78wCQNrauFORPShFLhjRrs1E"
                    data-amount=document.getElementById("amount").value
                    data-name="X-parcel"
                    data-description=在线充值
                    data-image="/img/remark.png"
                    data-locale="zh">
            </script>
      </form>



@stop
