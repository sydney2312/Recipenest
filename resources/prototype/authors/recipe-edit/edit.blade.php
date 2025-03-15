<x-mylayouts.layout-author-dashboard>


    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>

    <!-- Source: https://laravel.com/docs/11.x/validation#quick-displaying-the-validation-errors -->

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <style>
        .profile-edit-image {
            width: 200px;
            height: 200px;
        }
    </style>


    <div class="card1">
        <div class="card-body1">

            <h1>TITLE GOES HERE</h1>

            <form action="{{ route('authors.recipes.update', ['recipe' => $recipe->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="category">Category:</label>
                    <input type="text" class="form-control" id="category" name="category"
                        value="{{ $recipe->category }}">
                </div>

                <div class="form-group">
                    <label for="title">Title:
                    </label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $recipe->title }}">
                </div>


                <div class="form-group">
                    <label for="short_description">Short Description:</label>
                    <textarea class="form-control" rows="5" name="short_description"
                        id="short_description">{{ $recipe->short_description }}</textarea>
                </div>

                {{-- Full Description --}}
                <x-additional.tinymce.editor id="full_description" name="full_description" title="Full Description"
                    :value="$recipe->full_description" />

                <x-additional.tinymce.editor id="ingredients" name="ingredients" title="Ingredients"
                    :value="$recipe->ingredients" />

                <x-additional.tinymce.editor id="instructions" name="instructions" title="Instructions"
                    :value="$recipe->ingredients" />
                {{-- <div class="form-group">
                    <label for="ingredients">Ingredients:</label>
                    <textarea class="form-control" rows="5" name="ingredients"
                        id="ingredients">{{ old('ingredients') }}</textarea>
                </div> --}}

                {{-- <div class="form-group">
                    <label for="instructions">Instructions:</label>
                    <textarea class="form-control" rows="5" name="instructions"
                        id="instructions">{{ old('instructions') }}</textarea>
                </div> --}}





                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" name="image" id="image-input">
                </div>

                <div class="card p-3">
                    <img style="width: 300px" id="imgPreview" src="{{ $recipe->getImage() }}" alt="Image Preview">
                </div>


                <div class="form-group">
                    <label for="total_time">Total Time:</label>
                    <input type="text" class="form-control" name="total_time" id="total_time"
                        value="{{ $recipe->total_time ?? 1 }}">
                </div>


                <div class="form-group">
                    <label for="total_time_unit">Read Unit</label>
                    <select name="total_time_unit" id="total_time_unit" class="form-control">
                        <option value="minutes">Minute(s)</option>
                        <option value="hours">Hour(s)</option>
                    </select>
                </div>


                <div class="card p-3 mb-3">
                    <p>Set as featured</p>
                    <label class="switch">
                        <input type="checkbox" name="featured" {{ $recipe->featured == '1' ? 'checked' : '' }}>
                        <span class="slider round"></span>
                    </label>
                </div>

                <div class="card p-3 mb-3">
                    <p>Public</p>
                    <label class="switch">
                        <input type="checkbox" name="public" {{ $recipe->public == '1' ? 'checked' : '' }}>
                        <span class="slider round"></span>
                    </label>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a class="btn btn-danger" href="{{ route('authors.recipes.index') }}">Cancel</a>
                </div>



            </form>
        </div>
    </div>



    {{-- TinyMCE Config --}}
    @pushOnce('scripts')
    <x-additional.tinymce.key />
    @endPushOnce

    @push('scripts')
    <x-additional.tinymce.config id="full_description" editor="simple/full" />
    <x-additional.tinymce.config id="ingredients" editor="simple" />
    <x-additional.tinymce.config id="instructions" editor="simple" />
    @endpush

</x-mylayouts.layout-author-dashboard>