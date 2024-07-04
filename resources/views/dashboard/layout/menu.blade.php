<ul class="metismenu list-unstyled" id="side-menu">
    <li class="menu-title">Menu</li>
    {{-- @if (auth()->user()->is_admin) --}}
        <li>
            <a href="{{route('dashboard')}}" class="waves-effect">
                <i class="dripicons-home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-project-diagram"></i>
                <span>Home Management</span>
            </a>
             <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('homeS1Left.index')}}"> Home S1 Left </a></li>
                <li><a href="{{route('homeS1Right.index')}}"> Home S1 Right </a></li>
                <li><a href="{{route('homeS2.index')}}"> Home S2 (About) </a></li>
            </ul>
            {{--<ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('home_second_right.add')}}">After Slider Right Section </a></li>
            </ul>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('after_ccd.edit')}}">After CCD Section </a></li>
            </ul>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('next_after_ccd.edit')}}">Next After CCD </a></li>
            </ul>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('projects.index' )}}">Projects </a></li>
            </ul> --}}
        </li>
        {{-- <li>
            <a href="{{route('users')}}" class=" waves-effect">
                <i class="fa fa-users"> </i>
                <span>Users</span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fa fa-users"> </i>
                <span>Teams</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('team.index')}}">All Members</a></li>
                <li><a href="{{route('team.create')}}">Add Members</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-sliders-h"></i>
                <span>Slider</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('slider.index')}}">Slider List</a></li>
            </ul>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('slider.create')}}">Add Slider</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-quote-right"></i>
                <span>Faq </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('faq.index')}}">Faq List</a></li>
            </ul>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('faq.create')}}">Add Faq</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-project-diagram"></i>
                <span>Our Project</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('project.index')}}">Project list</a></li>
            </ul>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('project.create')}}">Add Project</a></li>
            </ul>
        </li>++
        <li>
            <a href="{{route('contact.index')}}" class="waves-effect">
                <i class="fas fa-envelope"></i>
                <span>Inbox</span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-project-diagram"></i>
                <span>About</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('about-first.index')}}">First</a></li>
            </ul>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('about-second.edit')}}">Second</a></li>
            </ul>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('about-third.index')}}">Third</a></li>
            </ul>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('about-fourth.edit')}}">Fourth</a></li>
            </ul>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('about-fifth.index')}}">Fifth</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-project-diagram"></i>
                <span>Service</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('service-first.edit')}}">First</a></li>
            </ul>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('service-second.index')}}">Second</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-project-diagram"></i>
                <span>Story</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('story-first.index')}}">First Section</a></li>
            </ul>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('story-second.index')}}">Second Section</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('genarel_info.index')}}">Information</a></li>
            </ul>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('story-second.index')}}">Second Section</a></li>
            </ul>
        </li> --}}

    {{-- @endif --}}
   {{--  <li>
        <a href="{{route('info.create')}}" class="waves-effect">
            <i class="fas fa-info-circle"></i>
            <span>Information</span>
        </a>
    </li> --}}

</ul>
