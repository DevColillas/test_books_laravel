<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">TestBooks</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Str::startsWith(Route::currentRouteName(), 'books.') ? 'active' : '' }}" aria-current="page" href="{{ route('books.index') }}">{{ __('app.headerTitleBooks') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Str::startsWith(Route::currentRouteName(), 'contact.') ? 'active' : '' }}" href="{{ route('contact.index') }}">{{__('app.headerTitleContact')}}</a>
                </li>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('app.headerTitleLanguage') }}
                            </button>
                            <ul class="dropdown-menu">
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li class="nav-item">
                                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ ucfirst($properties['native']) }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>

            </ul>
        </div>
    </div>
</nav>
