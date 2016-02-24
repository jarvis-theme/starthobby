<div class="tabs-chart">
    <div class="joystick center">
        <i class="fa fa-shopping-basket fa-2x" id="myshopcart"></i>
    </div>
    <div id="shopping-cart" class="chart">
        <a href="{{url('checkout')}}">
            <h3><strong>{{Shpcart::cart()->total_items()}} items </strong>on cart</h3>
        </a>
        <span>Total : {{ price(Shpcart::cart()->total() )}}</span>
    </div>
</div>