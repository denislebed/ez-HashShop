@extends('layouts.user_app')

@section('user_content')
<div id="basket">
    <div class="top">
        <img src="images/cart.png" alt="" />
        <h2 class="bin">Корзина</h2>
        <a  class="a" href="">Очистить корзину</a>
        <div class="close"></div>
    </div>
    <div class="middle">
        <div class="left">
            <table>
                <tr>
                    <td class="product-remove"></td>
                </tr> 

            </table>
            <div class="button">Перейти к оплате          </div>
            <div class="button-empty">Вернуться в магазин</div>
        </div>
        <div class="right">
            <h2>Cумма в корзине</h2>
            <p class="delivery">Доставка:</p>
            <p class="total summ">Итого сумма:</p>  

        </div>
    </div>
</div>
@endsection
