@extends('theme')
@section('content')
<body>
<div class="container">
<center><h2>Payment details</h2></center>
    <div class="row">
    <div class="col1 col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
        <div class="col2 col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
        <br>
        <br>
        <form action="/payment_save" method="post">
        {{csrf_field()}}
        <div class="form-group">
                    <label><h5>Student Name</h5></label>
                    <input type="text" class="form-control" name="sname" required>
                </div>
                <p></p>

                <div class="form-group">
                    <label><h5>Class</h5></label>
                    <input type="text" class="form-control" name="sclass"required>
                </div>
                <p></p>

                <div class="form-group">
                    <label><h5>Fee</h5></label>
                    <input type="text" class="form-control" name="fee"required> <label class="radio1"> <input type="radio" name="payment" value="card"> <br><br><span><i class="fa fa-credit-card-alt"></i> CREDIT CARD/DEBIT CARD</span> </label> 
                </div>
                <p></p>
                <p></p>
                <div class="form-group">
                <small>Card Number</small> <input type="text" class="form-control" name="cardno"placeholder="1111-2222-3333-4444">
                </div>
                <p></p>
                <div class="form-group">
                <small>Card Name</small> <input type="text" class="form-control" name="cname">
                </div>
                <p></p>
                <div class="mt-3 mr-2">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <div class="inputbox"> <small>Date</small> <input type="text" class="form-control" name="date"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputbox"> <small>Month</small> <input type="text" class="form-control" name="month"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox"> <small>CVV</small> <input type="text" class="form-control" name="cvv"> </div>
                        </div>
                    </div>
                </div>
                <hr class="mr-2 mt-4">
                <div class="mt-3 mr-2 d-flex justify-content-end align-items-center"> <a href="/studentviews" class="cancel">Cancel</a> <button type="submit" class=" ml-2 btn btn-primary pay">PAY NOW</button></div>
            </div>
        </div>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-danger">Submit</button>
                </form>
        </div>
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
    </div>
</div>

@endsection












@endsection