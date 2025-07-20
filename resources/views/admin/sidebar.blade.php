<nav id="sidebar" style="background:#fff; min-height:100vh; border-right:1px solid #f0f0f0; width:180px;">
    <ul class="list-unstyled" style="margin-top:2rem;">
        <li>
            <a href="/home" style="color:#222; font-weight:500; padding:0.75rem 1.2rem; display:block; border-radius:8px; margin-bottom:6px; transition:background 0.2s; {{ Request::is('home') ? 'background:#eaf3ff;' : '' }}" onmouseover="this.style.background='#f5faff'" onmouseout="if(!this.classList.contains('active'))this.style.background='';">Home</a>
        </li>
        <li>
            <a href="{{ url('category_page') }}" style="color:#222; font-weight:500; padding:0.75rem 1.2rem; display:block; border-radius:8px; margin-bottom:6px; transition:background 0.2s; {{ Request::is('category_page') ? 'background:#eaf3ff;' : '' }}" onmouseover="this.style.background='#f5faff'" onmouseout="if(!this.classList.contains('active'))this.style.background='';">Category</a>
        </li>
        <li>
            <a href="{{ url('add_book') }}" style="color:#222; font-weight:500; padding:0.75rem 1.2rem; display:block; border-radius:8px; margin-bottom:6px; transition:background 0.2s; {{ Request::is('add_book') ? 'background:#eaf3ff;' : '' }}" onmouseover="this.style.background='#f5faff'" onmouseout="if(!this.classList.contains('active'))this.style.background='';">Add Book</a>
        </li>
        <li>
            <a href="{{ url('show_book') }}" style="color:#222; font-weight:500; padding:0.75rem 1.2rem; display:block; border-radius:8px; margin-bottom:6px; transition:background 0.2s; {{ Request::is('show_book') ? 'background:#eaf3ff;' : '' }}" onmouseover="this.style.background='#f5faff'" onmouseout="if(!this.classList.contains('active'))this.style.background='';">Show Books</a>
        </li>
        <li>
            <a href="{{ url('borrow_request') }}" style="color:#222; font-weight:500; padding:0.75rem 1.2rem; display:block; border-radius:8px; margin-bottom:6px; transition:background 0.2s; {{ Request::is('borrow_request') ? 'background:#eaf3ff;' : '' }}" onmouseover="this.style.background='#f5faff'" onmouseout="if(!this.classList.contains('active'))this.style.background='';">Borrow Request</a>
        </li>
    </ul>
</nav>