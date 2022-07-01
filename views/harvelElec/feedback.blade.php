@extends('masters.homepageMaster')
@section('main')
<!DOCTYPE html>
<style>
    body {
        background-color: #f7f6f6
    }

    .icon i {
        font-size: 25px;
        color: #2196F3
    }

    label.radio {
        cursor: pointer;
        width: 100% !important;
        margin-top: 9px
    }

    label.radio input {
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
        pointer-events: none;
        width: 100%
    }

    label.radio span {
        padding: 7px 14px;
        border: 1px solid  #2874f0;
        display: inline-block;
        color:  #2874f0;
        border-radius: 3px;
        box-shadow: 3px 5px 8px 2px #e9ecef;
        width: 100%;
        align-items: center
    }

    label.radio input:checked+span {
        border-color:  #2874f0;
        background-color: #2874f0;
        color: #fff
    }

    .area {
        resize: none
    }

    .area:focus {
        box-shadow: none;
        border-color:  #2874f0 !important
    }

    .submit-button,
    .submit-button:active,
    .submit-button:visited,
    .submit-button:focus {
        background-color:  #2874f0 !important;
        border-color:  #2874f0 !important;
        color: #fff !important;
        box-shadow: none;
        text-transform: uppercase;
        padding-left: 35px;
        padding-right: 35px
    }

    .submit-button:hover {
        background-color:  #2874f0 !important;
        border-color:  #2874f0 !important
    }
    .submitt{
        color: white;
    }

    .submitt{
        color: white;
    }

    .submitt:hover{
        color: #ee9b00;
        cursor: pointer;
    }
</style>
<div class=" mt-5 mb-5 d-flex justify-content-center ">
    <div class="card-fluid">
        <div class="p-3">
            <div class="first text-center"> <img src="https://img.icons8.com/stickers/50/000000/facebook-like.png" width="80">
                <h3 class="mt-2">Feedback</h3>
                <p class="text-black-50">Let us know about our service as well as your questions toward our shop</p>
            </div>
            <div class="border p-3 rounded">
                <div class="row">
                    <div class="col-md-3"> <label class="radio"> <input type="radio" name="experience" value="Bad"> <span>Bad</span> </label> </div>
                    <div class="col-md-3"> <label class="radio"> <input type="radio" name="experience" value="Good"> <span>Good</span> </label> </div>
                    <div class="col-md-3"> <label class="radio"> <input type="radio" name="experience" value="Great" checked> <span>Great</span> </label> </div>
                    <div class="col-md-3"> <label class="radio"> <input type="radio" name="experience" value="Amazing"> <span>Amazing</span> </label> </div>
                </div>
                <div class="mt-4"> <textarea class="area form-control" rows="7" placeholder="add comments"> </textarea> </div>
                <div class="button mt-4 text-right"> <button class="btn btn-success submit-button">  <a class="submitt" href="{{route('harvelElec.homepage')}}">Submit</button> </div>
            </div>
        </div>
    </div>
</div>
@endsection
