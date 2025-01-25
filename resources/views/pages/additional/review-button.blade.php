<div class="my-3">
    @auth
    @livewire('interactive.review-create', ['user_id' => auth()->id(), 'recipe_id' => $recipe->id])
    @endauth

    @guest
    <a class="btn btn-primary" href="{{ route('login') }}">Log in to write a review</a>
    @endguest
</div>