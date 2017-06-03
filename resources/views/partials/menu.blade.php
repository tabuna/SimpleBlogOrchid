<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
        @foreach($menu as $item)

            <li>
                <a href="{{$item->slug}}"
                   title="{{$item->title}}"
                   target="{{$item->target}}"
                   rel="{{$item->robot}}"
                   class="{{$item->style}}"
                >
                    {{$item->label}}
                </a>
            </li>

        @endforeach
    </ul>
</div>
<!-- /.navbar-collapse -->
