@extends('layouts.master')

@section('title', 'Home')

@section('content')
<!--Form Start-->
<form name="regForm" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 form-base">
            <!--Form Header-->
            <h2 class="page-header">Registration Form</h2>
            <div class="errDisplay"></div>
            <p class="text-warning">
                <small>*All fields are required!</small>
            </p>
            <div class="form-group">
                <label for="lastname">Last Name:</label> 
                <input type="text" id="lastname" class="form-control" id="lastname" 
                       name="lastname" placeholder="e.g. John" maxlength="50"
                       pattern="^^[a-zA-Z][a-zA-Z0-9-_\.]{1,50}$" 
                       title="Input cannot contain symbols & spaces and cannot be empty">
                <div id="errLastName" class="errDisplay"></div>
            </div>
            <div class="form-group">
                <label for="firstname">First Name:</label> 
                <input type="text" id="firstname" class="form-control" id="firstname" 
                       name="firstname" placeholder="e.g. Doe" maxlength="50"
                       pattern="^^[a-zA-Z][a-zA-Z0-9-_\.]{1,50}$"
                       title="Input cannot contain symbols & spaces and cannot be empty">
                <div id="errFirstName" class="errDisplay"></div>
            </div>            
            <div class="form-group">
                <label>Gender:</label><br> 
                <label class="radio-inline">
                    <input type="radio" class="gender" name="gender" value="Male">Male
                </label> 
                <label class="radio-inline radio-err-input"> 
                    <input type="radio" class="gender" name="gender" value="Female">Female
                </label>
                <div id="errGender" class="errDisplay"></div>
            </div>
            <div class="form-group">
                    <label for="company">Company Name:</label> 
                    <input type="text" class="form-control" id="company" 
                           name="company" placeholder="e.g. ABC Pte Ltd" maxlength="50">
                    <div id="errCompany" class="errDisplay"></div>
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                @include('includes.countryOptions')
                <div id="errCountry" class="errDisplay"></div>
            </div>
            <div class="form-group">
                    <label for="city">City:</label> 
                    <input type="text" class="form-control" id="city" 
                           name="city" placeholder="The city that you live in" maxlength="50"
                           pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,50}$"
                           title="Input cannot contain symbols & spaces and cannot be empty">
                    <div id="errCity" class="errDisplay"></div>
            </div>
            <div class="form-group">
                    <label for="email">Email address:</label> 
                    <input type="email" name="email" class="form-control" id="email" placeholder="e.g. abc@abc.com">
                    <div id="errEmail" class="errDisplay"></div>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label> 
                <input type="password" name="password" class="form-control" id="pwd"
                       placeholder="Enter password with at least 8 characters" minlength="8" maxlength="20" 
                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                       title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                <small>* Must contain at least one number and one uppercase and lowercase letter</small>
                <div id="errPassword" class="errDisplay"></div>
            </div>
            <div class="form-group">
                <label for="retypepwd">Retype Password:</label> 
                <input type="password" name="retypepwd" class="form-control"
                       id="retypepwd" placeholder="Type in the same password as above" minlength="8" maxlength="20">
                <div id="errRetypePwd" class="errDisplay"></div>
            </div>
            <div class="form-group">
                <label class="checkbox-inline"><input name="agree"
                            type="checkbox" value="">I agree to the <a
                            href="terms.php" target="_blank">Terms and Condition.</a></label>
                <div id="errAgree" class="errDisplay"></div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-push-6 text-center">
                    <Input type="submit" name="submitted" value="Register" class="btn btn-success btn-reg">
                </div>
                <div class="col-sm-6 col-sm-pull-6 text-center">
                        <Input type="submit" name="cancelled" value="Cancel" class="btn btn-default btn-reg">
                </div>
            </div>
        </div>
    </div>
</form>
<!--End of form-->
@stop
