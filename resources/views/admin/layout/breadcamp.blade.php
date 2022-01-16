<div class="app-title">
    <div>
        <h1><i class="{{$icon}}"></i> {{$heading}}</h1>

    </div>
    @if(last(request()->segments()) === 'user-list' || last(request()->segments()) === 'search-user' || last(request()->segments()) === 'user-filter')
        <form action="{{route('search.user')}}" method="post">@csrf
        <div class="app-search" style="margin-right: 20px">
            <input class="form-control" type="search" name="search_input" placeholder="Search by name, email or phone ..." style=" width: 300px !important">
            <button type="submit" class="app-search__button"><i class="fa fa-search"></i></button>
        </div>
        </form>
    <form action="{{route('user.filter')}}" method="post">@csrf
        <div class="row">
            <div class="animated-radio-button" style="margin-right: 10px">
                <label>
                    <input type="radio" value="active" name="status"><span class="label-text">Active</span>
                </label>
            </div>
            <div class="animated-radio-button" style="margin-right: 10px">
                <label>
                    <input type="radio" value="inactive" name="status"><span class="label-text">Banned</span>
                </label>
            </div>
            <div>
                <button type="submit" class="btn btn-dark btn-sm">Apply Filter</button>
            </div>
        </div>
    </form>
    @endif
    @if(last(request()->segments()) === 'seller-list' || last(request()->segments()) === 'search-seller' || last(request()->segments()) === 'seller-filter')
        <form action="{{route('search.seller')}}" method="post">@csrf
            <div class="app-search" style="margin-right: 20px">
                <input class="form-control" type="search" name="search_input" placeholder="Search by name, email or phone ..." style=" width: 300px !important">
                <button type="submit" class="app-search__button"><i class="fa fa-search"></i></button>
            </div>
        </form>
        <form action="{{route('seller.filter')}}" method="post">@csrf
            <div class="row">
                <div class="animated-radio-button" style="margin-right: 10px">
                    <label>
                        <input type="radio" value="active" name="status"><span class="label-text">Active</span>
                    </label>
                </div>
                <div class="animated-radio-button" style="margin-right: 10px">
                    <label>
                        <input type="radio" value="inactive" name="status"><span class="label-text">Banned</span>
                    </label>
                </div>
                <div>
                    <button type="submit" class="btn btn-dark btn-sm">Apply Filter</button>
                </div>
            </div>
        </form>
    @endif

    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        @if(isset($section))
            <li class="breadcrumb-item">{{$section}}</li>
        @endif
        <li class="breadcrumb-item"><a href="{{$link}}">{{$heading}}</a></li>
    </ul>
</div>
