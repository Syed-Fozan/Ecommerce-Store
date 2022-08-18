@extends('master')
@section('content')
    <div class="custom-product">
        <div class='col-sm-6'>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Price</td>
                        <td>{{ $total }} Rupees</td>

                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>0 Rupees</td>
                    </tr>
                    <tr>
                        <td>Delivery Charges</td>
                        <td>200 Rupees</td>
                    </tr>
                    <tr>
                        <td>SubTotal</td>
                        <td>{{ $total + 200 }} Rupess</td>
                    </tr>
                </tbody>
            </table>
            <form method="POST" action="orderplace">
                @csrf
                <div class="form-group">
                    <h6>Enter Your Address</h6>
                    <textarea rows="2", cols="70" id="address" name="address"></textarea>
 
           

                    <label>Payment Method</label><br>
                    <input type="radio" id="Cash On Deliverey" name="PaymentMethod" value="Cash on Deliverey">
                    <label for="html">Cash On Deliverey</label><br>
                    <input type="radio" id="Credit Card" name="PaymentMethod" value="Credit Card">
                    <label for="css">Credit Card</label><br>
                    <input type="radio" id="JazzCash" name="PaymentMethod" value="JazzCash">
                    <label for="javascript">JazzCash</label>
                </div>
            </div>
                <button type="submit" class="btn btn-primary">OrderNow</button>
            </form>

        </div>
    </div>
@endsection
