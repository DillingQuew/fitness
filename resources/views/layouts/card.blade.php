{{--<div class="col-sm-6 col-md-4">--}}
<div class="col-sm-6 col-md-4 " style="">
    <div class="position-relative glass card p-2">
        <div class="labels badge_menu">
            @if($product->isNew())
                <span class="badge rounded-pill bg-warning text-dark">Новинка</span>
            @endif

            @if($product->isRecommend())
                <span class="badge rounded-pill bg-primary">Рекомендуем</span>
            @endif

            @if($product->isHit())
                    <span class="badge rounded-pill bg-success">Хит продаж!</span>
            @endif
        </div>
        <img class="card-img" src="{{Storage::url($product->image)}}" alt="Тут должна быть картинка" style="width: 100%;">
        <div class="card-body" style="color:black; background-color: var(--bgc-for-card); border-radius:5px; width:100%; padding:0;">
            <span class="card-text text-center d-block">
                <h3>{{ $product->name }}</h3>
                <p class="card-text text-center m-0">{{ $product->price }} руб.</p>
            </span>
                <p>
                    <form style="" class="p-2" action="{{ route('basket-add', $product) }}" method="POST">
                        <button type="submit" class="btn btn-success" role="button">В корзину</button>
                        <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}" class="btn btn-default"
                           role="button">
                            Подробнее
                        </a>
                        @csrf
                    </form>
                </p>
        </div>
    </div>
</div>
