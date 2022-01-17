<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://cdn0.iconfinder.com/data/icons/diversity-v2-0-volume-08/64/hipster-man-caucasian-beard-512.png" alt="User Image" height="80px">
        <div>
            <p class="app-sidebar__user-name">{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
            <p class="app-sidebar__user-designation">{{\Illuminate\Support\Facades\Auth::user()->type}}</p>
        </div>
    </div>
    <ul class="app-menu">

        <li><a @if(last(request()->segments()) === 'home')
               class="app-menu__item active"
               @else
               class="app-menu__item"
               @endif
               href=""
            >
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>


        {{-- User Management --}}
        {{--        @if(in_array('user',\App\Helpers\ProductHelper::adminAccess()->access))--}}
        <li
            {{--            @if(last(request()->segments()) === 'user-list' || last(request()->segments()) === 'seller-list' ||  last(request()->segments()) === 'search-user' ||  last(request()->segments()) === 'user-filter' ||  last(request()->segments()) === 'search-seller' ||  last(request()->segments()) === 'seller-filter')--}}
            class="treeview is-expanded"
            {{--            @else--}}
            class="treeview"
            {{--            @endif--}}
        >
            <a class="app-menu__item"
               href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">User Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a
                        {{--                        @if(last(request()->segments()) === 'user-list')--}}
                        class="treeview-item active"
                        {{--                        @else--}}
                        {{--                        class="treeview-item"--}}
                        {{--                        @endif--}}
                        href=""><i class="icon fa fa-list"></i>Manage All Users</a></li>
                <li><a
                        {{--                        @if(last(request()->segments()) === 'seller-list')--}}
                        class="treeview-item active"
                        {{--                        @else--}}
                        {{--                        class="treeview-item"--}}
                        {{--                        @endif--}}
                        href="{{ route('create.user') }}"><i class="icon fa fa-users"></i>Add User</a></li>
            </ul>
        </li>
        {{--        @endif--}}

        {{--        @if(in_array('category',\App\Helpers\ProductHelper::adminAccess()->access))--}}
        {{--        <li--}}
        {{--            @if(last(request()->segments()) === 'all-category' || last(request()->segments()) === 'create-category')--}}
        {{--            class="treeview is-expanded"--}}
        {{--            @else--}}
        {{--            class="treeview"--}}
        {{--            @endif--}}
        {{--        ><a--}}
        {{--                class="app-menu__item"--}}
        {{--                href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-archive"></i><span class="app-menu__label">Category Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
        {{--            <ul class="treeview-menu">--}}
        {{--                <li><a  @if(last(request()->segments()) === 'all-category')--}}
        {{--                            class="treeview-item active"--}}
        {{--                        @else--}}
        {{--                            class="treeview-item"--}}
        {{--                        @endif--}}
        {{--                        href="{{route('category.list')}}"><i class="icon fa fa-list"></i>All Category</a></li>--}}
        {{--                <li><a--}}
        {{--                        @if(last(request()->segments()) === 'create-category')--}}
        {{--                        class="treeview-item active"--}}
        {{--                        @else--}}
        {{--                        class="treeview-item"--}}
        {{--                        @endif--}}
        {{--                        href="{{route('category.create')}}"><i class="icon fa fa-edit"></i>Create New Category</a></li>--}}
        {{--            </ul>--}}
        {{--        </li>--}}
        {{--        @endif--}}
        {{--        @if(in_array('brand',\App\Helpers\ProductHelper::adminAccess()->access))--}}
        {{--        <li--}}
        {{--            @if(last(request()->segments()) === 'all-brand' || last(request()->segments()) === 'create-brand' || last(request()->segments()) === 'seller-brand')--}}
        {{--            class="treeview is-expanded"--}}
        {{--            @else--}}
        {{--            class="treeview"--}}
        {{--            @endif--}}
        {{--        ><a--}}
        {{--                @if(last(request()->segments()) === 'all-brand' || last(request()->segments()) === 'create-brand' || last(request()->segments()) === 'seller-brand')--}}
        {{--                class="app-menu__item active"--}}
        {{--                @else--}}
        {{--                class="app-menu__item"--}}
        {{--                @endif--}}
        {{--                href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bandcamp"></i><span class="app-menu__label">Brand Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
        {{--            <ul class="treeview-menu">--}}
        {{--                <li><a  @if(last(request()->segments()) === 'all-brand')--}}
        {{--                        class="treeview-item active"--}}
        {{--                        @else--}}
        {{--                        class="treeview-item"--}}
        {{--                        @endif--}}
        {{--                        href="{{route('brand.list')}}"><i class="icon fa fa-list"></i>All Brands</a></li>--}}
        {{--                <li><a--}}
        {{--                        @if(last(request()->segments()) === 'seller-brand')--}}
        {{--                        class="treeview-item active"--}}
        {{--                        @else--}}
        {{--                        class="treeview-item"--}}
        {{--                        @endif--}}
        {{--                       href="{{route('seller.brand')}}"><i class="icon fa fa-id-card-o"></i>Sellers Pending Brands</a></li>--}}
        {{--                <li><a--}}
        {{--                        @if( last(request()->segments()) === 'create-brand')--}}
        {{--                        class="treeview-item active"--}}
        {{--                        @else--}}
        {{--                        class="treeview-item"--}}
        {{--                        @endif--}}
        {{--                        href="{{route('brand.create')}}"><i class="icon fa fa-edit"></i>Create New Brand</a>--}}
        {{--                </li>--}}
        {{--            </ul>--}}
        {{--        </li>--}}
        {{--        @endif--}}
        {{--        @if(in_array('product',\App\Helpers\ProductHelper::adminAccess()->access))--}}
        {{--        <li--}}
        {{--            @if(last(request()->segments()) === 'product-list' || last(request()->segments()) === 'hot-deals-product')--}}
        {{--            class="treeview is-expanded"--}}
        {{--            @else--}}
        {{--            class="treeview"--}}
        {{--            @endif--}}
        {{--        >--}}
        {{--            <a class="app-menu__item"--}}
        {{--               href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-product-hunt"></i><span class="app-menu__label">Product Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
        {{--            <ul class="treeview-menu">--}}
        {{--                <li><a--}}
        {{--                        @if(last(request()->segments()) === 'product-list')--}}
        {{--                        class="treeview-item active"--}}
        {{--                        @else--}}
        {{--                        class="treeview-item"--}}
        {{--                        @endif--}}
        {{--                        href="{{route('product.list')}}">--}}
        {{--                        <i class="icon fa fa-list-alt"></i> All Products--}}
        {{--                    </a>--}}
        {{--                </li>--}}
        {{--                <li><a--}}
        {{--                        @if(last(request()->segments()) === 'hot-deals-product')--}}
        {{--                        class="treeview-item active"--}}
        {{--                        @else--}}
        {{--                        class="treeview-item"--}}
        {{--                        @endif--}}
        {{--                        href="{{route('hot.deals')}}">--}}
        {{--                        <i class="icon fa fa-list-alt"></i> Hot Deals Products--}}
        {{--                    </a>--}}
        {{--                </li>--}}
        {{--            </ul>--}}
        {{--        </li>--}}
        {{--        @endif--}}

        {{--        --}}{{--  Order --}}
        {{--        @if(in_array('order',\App\Helpers\ProductHelper::adminAccess()->access))--}}
        {{--            <li><a @if(last(request()->segments()) === 'order')--}}
        {{--                   class="app-menu__item active"--}}
        {{--                   @else--}}
        {{--                   class="app-menu__item"--}}
        {{--                   @endif--}}
        {{--                   href="{{route('order.list')}}"--}}
        {{--                >--}}
        {{--                    <i class="app-menu__icon fa fa-list"></i>--}}
        {{--                    <span class="app-menu__label">Order Management</span>--}}
        {{--                </a>--}}
        {{--            </li>--}}
        {{--        @endif--}}

        {{--        @if(in_array('admin',\App\Helpers\ProductHelper::adminAccess()->access))--}}
        {{--        <li--}}
        {{--            @if(last(request()->segments()) === 'add-admin' || last(request()->segments()) ==='admin-list')--}}
        {{--            class="treeview is-expanded"--}}
        {{--            @else--}}
        {{--            class="treeview"--}}
        {{--            @endif--}}
        {{--        >--}}
        {{--            <a class="app-menu__item"--}}
        {{--               href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Admin Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
        {{--            <ul class="treeview-menu">--}}
        {{--                <li><a--}}
        {{--                        @if(last(request()->segments()) === 'add-admin')--}}
        {{--                        class="treeview-item active"--}}
        {{--                        @else--}}
        {{--                        class="treeview-item"--}}
        {{--                        @endif--}}
        {{--                        href="{{route('add.admin')}}"><i class="icon fa fa-edit"></i>Add New Admin</a>--}}
        {{--                </li>--}}
        {{--                <li><a--}}
        {{--                        @if(last(request()->segments()) === 'admin-list')--}}
        {{--                        class="treeview-item active"--}}
        {{--                        @else--}}
        {{--                        class="treeview-item"--}}
        {{--                        @endif--}}
        {{--                        href="{{route('admin.list')}}"><i class="icon fa fa-list"></i>Admin List</a>--}}
        {{--                </li>--}}
        {{--            </ul>--}}
        {{--        </li>--}}
        {{--        @endif--}}

        {{--            --}}{{--  Payment --}}
        {{--            @if(in_array('payment',\App\Helpers\ProductHelper::adminAccess()->access))--}}
        {{--                <li--}}
        {{--                    @if(last(request()->segments()) === 'payment-request' || last(request()->segments()) === 'customer-payment')--}}
        {{--                    class="treeview is-expanded"--}}
        {{--                    @else--}}
        {{--                    class="treeview"--}}
        {{--                    @endif--}}
        {{--                ><a--}}
        {{--                        class="app-menu__item"--}}
        {{--                        href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-archive"></i><span class="app-menu__label">Payment Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
        {{--                    <ul class="treeview-menu">--}}
        {{--                        <li><a  @if(last(request()->segments()) === 'payment-request')--}}
        {{--                                class="treeview-item active"--}}
        {{--                                @else--}}
        {{--                                class="treeview-item"--}}
        {{--                                @endif--}}
        {{--                                href="{{route('payment.request')}}"><i class="icon fa fa-list"></i>Payment Request</a></li>--}}
        {{--                        <li><a--}}
        {{--                                @if(last(request()->segments()) === 'customer-payment')--}}
        {{--                                class="treeview-item active"--}}
        {{--                                @else--}}
        {{--                                class="treeview-item"--}}
        {{--                                @endif--}}
        {{--                                href="{{route('customer.payment')}}"><i class="icon fa fa-list"></i>Customer Payment</a></li>--}}
        {{--                    </ul>--}}
        {{--                </li>--}}
        {{--            @endif--}}
    </ul>
</aside>
