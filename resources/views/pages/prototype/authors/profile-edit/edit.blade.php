<x-mylayouts.layout-prototype>

    {{-- Toggle --}}
    {{-- Source: https://www.w3schools.com/howto/howto_css_switch.asp --}}
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


    <style>
        .profile-edit-image {
            width: 200px;
            height: 200px;
        }
    </style>


    <div class="card1">
        <div class="card-body1">

            <h1>TITLE GOES HERE</h1>

            <form action="#" method="POST" enctype="multipart/form-data">


                <div class="profile-div text-center">
                    <img id="imgPreview" style="width: 300px; height: 300px"
                        src="{{ asset('storage/images/profiles/default.jpg'); }}" alt=""
                        class="img-fluid rounded-circle">
                </div>

                <div class="form-group">
                    <label for="profile">Profile Image:</label>
                    <input type="file" class="form-control" name="profile" id="image-input">
                </div>


                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="">
                </div>


                <div class="form-group">
                    <label for="short_description">Bio:</label>
                    <textarea class="form-control" rows="5" name="short_description" id="short_description"
                        minlength="1" maxlength="300"></textarea>
                </div>

                <div class="form-group">
                    <label for="full_description">Full Description:</label>
                    <textarea class="form-control" rows="15" name="full_description" id="full_description" minlength="1"
                        maxlength="300"></textarea>
                </div>



                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" value="">
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="">
                </div>

                <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="">
                </div>


                <div class="form-group">
                    <label for="social_facebook">Facebook:</label>
                    <input type="text" class="form-control" id="social_facebook" name="social_facebook" value="">
                </div>


                <div class="form-group">
                    <label for="social_x">X (Twitter):</label>
                    <input type="text" class="form-control" id="social_x" name="social_x" value="">
                </div>

                <div class="form-group">
                    <label for="social_instagram">Instagram:</label>
                    <input type="text" class="form-control" id="social_instagram" name="social_instagram" value="">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a class="btn btn-danger" href="{{ route('authors.recipes.index') }}">Cancel</a>
                </div>

            </form>
        </div>
    </div>


</x-mylayouts.layout-prototype>