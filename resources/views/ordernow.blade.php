@extends('master')
@section('content')

    <div class="custom-product">
        <div class="col-sm-6">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <td>Sr</td>
                    <td>Price</td>
                    <td>Tax</td>
                    <td>Delivery</td>
                    <td>Total Amount</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>10</td>
                    <td>{{$total}} Rupees</td>
                    <td>0</td>
                    <td>100</td>
                    <td>{{$total+100}}</td>
                </tr>
                </tbody>
            </table>

            <form method="POST" action="{{asset('orderplace')}}">
                @csrf
                <div class="form-group">
                    <textarea placeholder="enter yoyr address" name="address" class="form-control"> </textarea>
                </div>
                <div class="form-group">
                    <label for="payment method">Payment Method</label>
                    <p><input type="radio" value="cash" name="payment" checked> <span>Online Payment</span></p>
                    <p><input type="radio" value="cash" name="payment"> <span>EMI Payment</span></p>
                    <p><input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span></p>

                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
            </form>
        </div>
    </div>
@endsection