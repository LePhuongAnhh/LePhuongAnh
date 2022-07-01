
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .register{
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        margin-top: 3%;
        padding: 3%;
    }
    .register-left{
        text-align: center;
        color: #fff;
        margin-top: 4%;
    }
    .register-left input{
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 30%;
        margin-bottom: 3%;
        cursor: pointer;
    }
    .register-right{
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
    }
    .register-left img{
        margin-top: 15%;
        margin-bottom: 5%;
        width: 25%;
        -webkit-animation: mover 2s infinite  alternate;
        animation: mover 1s infinite  alternate;
    }
    @-webkit-keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-20px); }
    }
    @keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-20px); }
    }
    .register-left p{
        font-weight: lighter;
        padding: 12%;
        margin-top: -9%;
    }
    .register .register-form{
        padding: 10%;
        margin-top: 10%;
    }
    .btnRegister{
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #00c6ff;
        color: #718096;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
    }
    .register .nav-tabs{
        margin-top: 3%;
        border: none;
        background: #0062cc;
        border-radius: 1.5rem;
        width: 28%;
        float: right;
    }
    .register .nav-tabs .nav-link{
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: #fff;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }
    .register .nav-tabs .nav-link:hover{
        border: none;
    }
    .register .nav-tabs .nav-link.active{
        width: 100px;
        color: #3931af;
        border: 2px solid #0062cc;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }
    .register-heading{
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #495057;
    }
</style>
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome Harvel Electrics</h3>
            <p>Harvel Electric is a company that sells various electrical products.</p>
            <a href="{{route('harvelElec.homepage')}}" class="btn btn-info">Cancel</a>
        </div>
        <div class="col-md-9 register-right">
            @include('partials.adErrors')
            <form action="{{route('customer.store')}}" method="post">
            @csrf
            <input type="hidden" name="Cus_id" value="{{old('Cus_id')?? $customer->Cus_id}}">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Register Customer</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="Cus_Fullname" placeholder="Full Name *" id="Cus_Fullname" value="{{old('Cus_Fullname')?? $customer->Cus_Fullname}}"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Cus_Username" placeholder="User Name *" id="Cus_Username" value="{{old('Cus_Username')?? $customer->Cus_Username}}" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="Cus_Email" placeholder="Your Email *" id="Cus_Email" value="{{old('Cus_Email')?? $customer->Cus_Email}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="date" class="form-control" name="Cus_DoB" placeholder="Date of Birth *" id="Cus_DoB" value="{{old('Cus_DoB')?? $customer->Cus_DoB}}" />
                            </div>
                            <div class="form-group">
                                <input type="text" minlength="10" maxlength="10" name="Phone" class="form-control" placeholder="Your Phone *" id="Phone" value="{{old('Phone')?? $customer->Phone}}" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Address" placeholder="Your Address *" id="Address" value="{{old('Address')?? $customer->Address}}"  />
                            </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

