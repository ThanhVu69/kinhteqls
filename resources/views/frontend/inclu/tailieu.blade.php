<style>
.pagination {
  display: flex;
		padding: 0;
		margin: 0;
		box-shadow: 0 10px 20px 0 rgba(black, 0.25);
}

.pagination a {
  
  background: #ff00009c;
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
}
.pagination a:hover:not(.active) {background-color: #ddd;}

</style>
  <nav>
  @if(isset($tailieu))
    <ul class="pagination" style="margin-top: 30px;">
    @if ($tailieu->currentPage() != 1)
      <li>
        <a href="{!! str_replace('/?','?',$tailieu->url($tailieu->currentPage() - 1)) !!}" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
    @endif
    @for ($i = 1; $i <=  $tailieu->lastPage(); $i++)
      <li class="{!! ($tailieu->currentPage() == $i)? 'active':'' !!}"><a href="{!! str_replace('/?','?',$tailieu->url($i)) !!}">{!! $i !!}</a></li>
    @endfor
    @if ($tailieu->currentPage() != $tailieu->lastPage())
      <li>
        <a href="{!! str_replace('/?','?',$tailieu->url($tailieu->currentPage() + 1)) !!}" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    @endif
    </ul>
  @endif
  </nav>