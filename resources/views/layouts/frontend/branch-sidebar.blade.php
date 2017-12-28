<h2>Brands</h2>
<div class="brands-name">
  <ul class="nav nav-pills nav-stacked">
    @isset($product)
    <li><a href="{{url('/branchs/searchRolex')}}"> <span class="pull-right">( {{ $product->quantity }} )</span>Rolex</a></li>
    <li><a href="{{url('/branchs/searchCartier')}}"> <span class="pull-right">( {{ $product->quantity }} )</span>Cartier</a></li>
    <li><a href="{{url('/branchs/searchOmega')}}"> <span class="pull-right">( {{ $product->quantity }} )</span>Omega</a></li>
    <li><a href="{{url('/branchs/searchPatekPhilippe')}}"> <span class="pull-right">( {{ $product->quantity }} )</span>Patek</a></li>
    <li><a href="{{url('/branchs/searchMontblanc')}}"> <span class="pull-right">( {{ $product->quantity }} )</span>Montblanc</a></li>
    <li><a href="{{url('/branchs/searchTagHeuer')}}"> <span class="pull-right">( {{ $product->quantity }} )</span>TAG Heuer</a></li>
    <li><a href="{{url('/branchs/searchMontblanc')}}"> <span class="pull-right">( {{ $product->quantity }} )</span>Montblanc</a></li>
    @endif
  </ul>
</div>
