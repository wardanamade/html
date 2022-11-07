<div>
    {{-- help center hero with search --}}
    @include('help-center.hero')

    {{-- help center content --}}
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                {{-- help center articles --}}
                @include('help-center.articles')
            </div>
            <div class="col-md-4">
                {{-- help center categories --}}
                @include('help-center.categories')
            </div>
        </div>
    </div>
</div>
