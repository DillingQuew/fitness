{{--<div class="col-sm-6 col-md-4">--}}
<div class="col-sm-6 col-md-4">
    <div class="card-body m-2 card glass glasses-borders">
        <div class="labels">
            @if($product->isNew())
                <span class="badge badge-success">Новинка</span>
            @endif

            @if($product->isRecommend())
                <span class="badge badge-warning">Рекомендуем</span>
            @endif

            @if($product->isHit())
                <span class="badge badge-danger">Хит продаж!</span>
            @endif
        </div>
        <img src="" alt="Тут должна быть картинка" style="width: 100%;">


        <div class="card-body p-3" style="color:black; background-color: var(--bgc-for-card); border-radius:5px; width:100%; padding:0;">
        <span class="card-text text-center d-block">
            <h3>{{ $product->name }}</h3>

                                <p class="card-text text-center m-0">{{ $product->price }} руб.</p>

                            </span>
            <p>
                <form action="{{ route('basket-add', $product) }}" method="POST">
                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                    <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}" class="btn btn-default"
                       role="button">
                        Подробнее
                    </a>
                    @csrf
                </form>
            </p>
        </div>

{{--        <div class="card-body p-3" style="color:black; background-color: var(--bgc-for-card); border-radius:5px; width:100%; padding:0;">--}}
{{--                            <span class="card-text text-center d-block">--}}
{{--                                <h3>{{ $product->name }}</h3>--}}

{{--                                <p class="card-text text-center m-0">{{ $product->price }} руб.</p>--}}

{{--                            </span>--}}
{{--        </div>--}}



    </div>
</div>
