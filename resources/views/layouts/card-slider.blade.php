
<div class="slider__item text-center">
    <div class="m-1">
        <div class="position-relative glass card p-2" style="box-shadow: none;">
            <img class="card-img" src="{{Storage::url($product->image)}}" alt="Тут должна быть картинка" style="width: 100%;">
            <div class="card-body p-2" style="color:black; background-color: var(--bgc-for-card); border-radius:5px; width:100%; padding:0;">
                <span class="card-text text-center d-block">
                    <h3>{{ $product->name }}</h3>
                    <p class="card-text text-center m-0">{{ $product->price }} руб.</p>
                </span>
                    <p>
                    <form style="" class="p-2" action="{{ route('basket-add', $product) }}" method="POST">
                        <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}" class="btn btn-default"
                           role="button">
                            Подробнее
                        </a>
                        @csrf
                    </form>
            </div>
        </div>
    </div>
</div>

