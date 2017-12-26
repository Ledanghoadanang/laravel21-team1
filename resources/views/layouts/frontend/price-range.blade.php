<h2>Price Range</h2>
<div class="well text-center">
<form action="/searchPrice" method="POST" role="search" class="title text-center searchform">
  {{ csrf_field() }}
     <input type="text" name="rangePrices" class="span2" value="" data-slider-min="0" data-slider-max="1000000" data-slider-step="5" data-slider-value="[200000,700000]" id="sl2" ><br />
     <b class="pull-left">0</b> <b class="pull-right">1Triệu</b>
     <button type="submit" class="btn btn-default">
        Tìm theo giá
     </button>
</form>
</div>
