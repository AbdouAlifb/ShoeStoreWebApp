@extends('admin.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Shoe') }}</div>

                <div class="card-body">
                    <form action="{{ route('shoes.update', $shoe->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $shoe->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="price">{{ __('Price') }}</label>
                            <input type="number" name="price" id="price" class  ="form-control" value="{{ $shoe->price }}" required>
                        </div>

                        <div class="form-group">
                            <label for="category">{{ __('Category') }}</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="men" {{ $shoe->category === 'men' ? 'selected' : '' }}>Men</option>
                                <option value="women" {{ $shoe->category === 'women' ? 'selected' : '' }}>Women</option>
                                <option value="main" {{ $shoe->category === 'main' ? 'selected' : '' }}>Main</option>
                            </select>
                        </div>

<!--                                image -->

                        <div class="form-group">
                            <label for="image">{{ __('Image') }}</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Update Shoe') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection