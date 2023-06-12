<li class="nav-item">
    <div class="input-group">
        <div class="form-outline" style="margin-left: 1rem;">
            <input type="search" id="form1" class="form-control" placeholder="Search"/>
        </div>
        <button type="button" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                 viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
</li>
<li class="nav-item nav-item-button">
    <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"
       href="/">
        <span class="{{ $active == 'home' ? 'active' : 'inactive' }}">Home</span>
    </a>
</li>
<li class="nav-item nav-item-button">
    <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"
       href="/valo-tour">
        <span class="{{ $active == 'valorant' ? 'active' : 'inactive' }}">Valorant</span>
    </a>
</li>
<li class="nav-item nav-item-button">
    <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"
       href="/mole-tour">
        <span class="{{ $active == 'mole' ? 'active' : 'inactive' }}">Mobile Legends</span>
    </a>
</li>
<li class="nav-item nav-item-button">
    <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"
       href="/merch-cat">
        <span class="{{ $active == 'merch' ? 'active' : 'inactive' }}">Merch</span>
    </a>
</li>
<li class="nav-item nav-item-button">
    <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"
       href="/ticket-cat">
        <span class="{{ $active == 'ticket' ? 'active' : 'inactive' }}">Ticket</span>
    </a>
</li>
<li class="nav-item nav-item-button">
    <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"
       href="/topup-cat">
        <span class="{{ $active == 'top_up' ? 'active' : 'inactive' }}">Top Up</span>
    </a>
</li>
<li class="nav-item nav-item-button">
    <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"
       href="/notification">
        <span class="{{ $active == 'notification' ? 'active' : 'inactive' }}">Notification</span>
    </a>
</li>
<li class="nav-item nav-item-image ms-2 p-1">
    @if($active == 'user_profile')
        <a href="/user-profile">
            <img src="/images/icons/active_account.png" alt="acc" style="width: 45%;">
        </a>
    @else
        <a href="/user-profile">
            <img src="/images/icons/account.png" alt="acc" style="width: 45%;">
        </a>
    @endif
</li>
{{--    yg di bawah ini bisa diuncomment pas beackend udh jadi, ini buat klo udah login--}}
{{--    <li class="nav-item">--}}
{{--        <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"--}}
{{--           href="#">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"--}}
{{--                 class="bi bi-person-circle" viewBox="0 0 16 16">--}}
{{--                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>--}}
{{--                <path fill-rule="evenodd"--}}
{{--                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>--}}
{{--            </svg>--}}
{{--        </a>--}}
{{--    </li>--}}
