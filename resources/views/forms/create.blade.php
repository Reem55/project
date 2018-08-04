@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">

                    <div class="panel-heading">
                        <h3 class="panel-title">Apply here</h3>
                    </div>

                    <div class="panel-body">
                        <form method="POST" action="show.blade.php">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="title">First Name</label>
                                <input type="text" class="form-control" name="title" placeholder="you're name ..."required>
                            </div>
                            <div class="form-group">
                                <label for="title">Last Name</label>
                                <input type="text" class="form-control" name="title" placeholder="you're last name ..."required>
                            </div>
                            <div class="form-group">
                                <label for="title">Email</label>
                                <input type="text" class="form-control" name="title" placeholder="email@example.com ..."required>
                            </div>
                            <div class="form-group">
                                <label for="title">subject</label>
                                <input type="text" class="form-control" name="title" placeholder="subject ..."required>
                            </div>



                            <div class="form-group">
                                <label for="body">Description</label>
                                <textarea class="form-control" name="body" size="65" placeholder="write ur description ..." required=""></textarea>
                            </div>
                            <br>
                            <div class="control">
                                <button type="submit" class="btn btn-outline-primary">Publish</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection