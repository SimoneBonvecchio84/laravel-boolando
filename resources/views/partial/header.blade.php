<header>
    <ul>
        <li class={{ Request::route()->getName() === 'home' ? 'active' : '' }}> 
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li class={{ Request::route()->getName() === 'cards' ? 'active' : '' }} >
            <a href="{{ route('cards') }}">Cards</a>
        </li>
    </ul>
</header>