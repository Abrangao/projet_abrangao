@extends('pages.template', ['title'=>'Contact'])

@section('contenu')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-offset-1">
                <h2>Get in Touch</h2>
                <p class="text-muted">If you having trouble with this service, please <a href="mailto:abrangao98@gmail.com">ask for help</a>.</p>
                <form action="#" method="POST">

                   <div class="form-group">
                       <label for="name" class="control-label">Name</label>
                       <input type="text" name="name" id="name" class="form-control" required="required">
                   </div>

                   <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required="required">
                   </div>

                    <div class="form-group">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea class="form-control" rows="10" cols="10" name="message" id="message" required ></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Submit Enquiry &raquo</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@stop
