<ul class="br-sideleft-menu">
    <li class="br-menu-item">
        <a href="/" class="br-menu-link active">
            <i class="menu-item-icon fa fa-home tx-24"></i>
            <span class="menu-item-label" style="padding-left: 5px;">Dashboard</span>
        </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->
    <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon fa fa-cog tx-20"></i>
            <span class="menu-item-label" style="padding-left: 5px;">Manage Base Info</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route("add_base_details")}}" class="sub-link">Add Base Details</a></li>
            <li class="sub-item"><a href="{{route("view_base_details")}}" class="sub-link">View Base Details</a></li>
        </ul>
    </li>
    <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon fa fa-cogs tx-20"></i>
            <span class="menu-item-label" style="padding-left: 5px;">Manage Fields Info</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route("add_fields_description")}}" class="sub-link">Add Fields Details</a></li>
            <li class="sub-item"><a href="{{route("view_field_details")}}" class="sub-link">View Fields Details</a></li>
        </ul>
    </li>


</ul><!-- br-sideleft-menu -->