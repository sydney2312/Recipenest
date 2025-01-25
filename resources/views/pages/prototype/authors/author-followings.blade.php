<x-mylayouts.layout-author-dashboard>







    <div class="row pt-md-4">


        @foreach ($chef_data as $chef)


        <div class="col-md-12">
            <div class="blog-entry ftco-animate d-md-flex">
                <a href="single.html" class="img img-2" style="background-image: url({{ $chef->getImage() }});"></a>
                <div class="text text-2 pl-md-4">
                    <h3 class="mb-2"><a href="single.html">{{ $chef->name }}</a></h3>
                    <div class="meta-wrap">
                        <p class="meta">
                            {{-- <span><i class="icon-calendar mr-2"></i>{{
                                app('CustomHelper')->dateToReadable($chef->created_at ) }}</span> --}}
                            <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Author</a></span>
                            <span><i class="icon-comment2 mr-2"></i>{{ $chef->total_recipes }}
                                Publications</span>
                        </p>
                    </div>
                    <p class="mb-4"><b>Bio: </b>{{ $chef->bio }}.</p>
                    <p>

                        <a href="{{ route('chefs.show', ['id' => $chef->id]) }}" class="btn-custom">View Profile
                            <span class="ion-ios-arrow-forward"></span></a>
                        <span style="color: blue"> / </span>
                        <a href="{{ route('chefs.portfolio.show', ['id' => $chef->id]) }}" class="btn-custom">View
                            Portfolio <span class="ion-ios-arrow-forward"></span></a>


                    </p>
                </div>
            </div>
        </div>
        @endforeach

    </div><!-- END-->





    <h1>Recent Writings from authors following</h1>
    <hr>

    <div class="row pt-md-4">


        @foreach ($recipe_data as $recipe)

        <div class="col-md-12">
            <div class="blog-entry-2 ftco-animate">
                <a href="single.html" class="img" style="background-image: url({{ $recipe->getImage() }});"></a>
                <div class="text pt-4">
                    <h3 class="mb-4"><a href="{{ route('recipes.show', ['id' => $recipe->id]) }}">{{
                            $recipe->title
                            }}</a></h3>
                    <p class="mb-4"><b>Summary: </b>{{ $recipe->short_description }}</b></p>
                    <div class="author mb-4 d-flex align-items-center">
                        <a href="#" class="img" style="background-image: url(images/person_1.jpg);"></a>
                        <div class="ml-3 info">
                            <span>Written by</span>
                            <h3><a href="{{ $recipe->user->getLink() }}">{{ $recipe->user->name }}</a>, <span>{{
                                    app('CustomHelper')->dateToReadableFull($recipe->publish_date) }}</span></h3>
                        </div>
                    </div>
                    <div class="meta-wrap d-md-flex align-items-center">
                        <div class="half order-md-last text-md-right">
                            <p class="meta">
                                <span><i class="icon-heart"></i>3</span>
                                <span><i class="icon-eye"></i>100</span>
                                <span><i class="icon-comment"></i>{{ $recipe->total_reviews }}</span>
                            </p>
                        </div>
                        <div class="half">
                            <p><a href="{{ $recipe->getLink() }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Continue
                                    Reading</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endforeach


    </div><!-- END-->


</x-mylayouts.layout-author-dashboard>