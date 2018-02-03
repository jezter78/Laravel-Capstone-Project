@extends('layouts.master')

@section('title', 'Contact')

@section('content')
    <!-- Content -->
    <div class="container">
        <!-- Content header -->
        <h2 class="page-header">CONTACT INFORMATION</h2>
        <!-- Content -->
        <div class="row">
            <div class="contact-details col-sm-5"> 
                @include('includes.contactDetails')
            </div>
            <!--Feedback Form Start-->
            <form name="FeedbackForm" method="post">
                <input type='hidden' name='_token' value="{{ csrf_token() }}">
                <div class="col-sm-6 col-sm-offset-1 form-base">
                    <h2 class="page-header">Feedback Form</h2>
                    @if(session('status'))
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Thank you! Your Feedback has been submitted!
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="lastname">Last Name (required):</label> 
                        <input type="text" id="lastname" class="form-control" id="lastname" 
                               name="lastname" placeholder="e.g. John" maxlength="50"
                               <?php //echo "value='{$lastname}' "; echo ($lock)?"readonly":"" ?>>
                        <div id="errLastName" class="errDisplay"></div>
                    </div>
                    <div class="form-group">
                        <label for="firstname">First Name (required):</label> 
                        <input type="text" id="firstname" class="form-control" id="firstname" 
                               name="firstname" placeholder="e.g. Doe" maxlength="50"
                               <?php //echo "value='{$firstname}' "; echo ($lock)?"readonly":"" ?>>
                        <div id="errFirstName" class="errDisplay"></div>
                    </div>            
                    <div class="form-group">
                        <label for="email">Email address (required):</label> 
                        <input type="email" name="email" class="form-control" id="email" 
                               placeholder="e.g. abc@abc.com" maxlength="50"
                               <?php //echo "value='{$email}' "; echo ($lock)?"readonly":"" ?>>
                        <div id="errEmail" class="errDisplay"></div>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment:</label> 
                        <textarea class="form-control" name="comment" id="comment" rows="10" maxlength="255"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-push-6 text-center">
                            <Input type="submit" name="submit" value="Submit" class="btn btn-success btn-reg">
                        </div>
                        <div class="col-sm-6 col-sm-pull-6 text-center">
                                <Input type="reset" value="Clear" class="btn btn-default btn-reg">
                        </div>
                    </div>        
                </div>
            </form>
            <!--End of form-->
        </div>
    </div>
@stop
