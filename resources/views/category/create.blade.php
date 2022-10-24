@extends('app')

@section('content')

<form method="post" enctype="multipart/form-data" action="{{ route('category.store') }}">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="name">Category Name</label>
                <input class="form-control" name="category" id="name" type="text" >
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="image">Image</label>
                <input class="form-control" name="image" id="image" type="file">
            </div>
        </div>
    </div>
 
  
<button class="btn btn-primary mb-3" type="submit">Save</button>

</form>

@endsection