@extends('master')

@section('content')

<div class="container custom-login" >
    <div class="d-flex justify-content-center custom "  >
   <div class="d-flex align-items-center " > 
<form class="formlogin">
    <div class="mb-3 ">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Save Password</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign In</button>
  </form>
    
    </div>

    </div>
</div>

<style>
   body {
        background:url(https://s1.1zoom.me/big0/519/Men_Two_Sitting_Winter_hat_Singlet_Black_and_white_554996_1280x853.jpg) ;
        background-repeat: no-repeat;
        background-size: cover;
    }
  

    .formlogin {
        padding: 30px;
        box-shadow: 4px 4px 8px 8px rgba(0, 0, 0, 0.348);        transition: 0.3s;
        background-color: rgba(81, 81, 81, 0.704);
        border-radius :20px;
        color:  white;
    }
    .formlogin input {
        opacity: 0.7;
    }
</style>
@endsection