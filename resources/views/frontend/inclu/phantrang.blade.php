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
  @if(isset($tintuc))
    <ul class="pagination">
    @if ($tintuc->currentPage() != 1)
      <li>
        <a href="{!! str_replace('/?','?',$tintuc->url($tintuc->currentPage() - 1)) !!}" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
    @endif
    @for ($i = 1; $i <=  $tintuc->lastPage(); $i++)
      <li class="{!! ($tintuc->currentPage() == $i)? 'active':'' !!}"><a href="{!! str_replace('/?','?',$tintuc->url($i)) !!}">{!! $i !!}</a></li>
    @endfor
    @if ($tintuc->currentPage() != $tintuc->lastPage())
      <li>
        <a href="{!! str_replace('/?','?',$tintuc->url($tintuc->currentPage() + 1)) !!}" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    @endif
    </ul>
  @endif
  @if(isset($sukien))
    <ul class="pagination">
    @if ($sukien->currentPage() != 1)
      <li>
        <a href="{!! str_replace('/?','?',$sukien->url($sukien->currentPage() - 1)) !!}" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
    @endif
    @for ($i = 1; $i <=  $sukien->lastPage(); $i++)
      <li class="{!! ($sukien->currentPage() == $i)? 'active':'' !!}"><a href="{!! str_replace('/?','?',$sukien->url($i)) !!}">{!! $i !!}</a></li>
    @endfor
    @if ($sukien->currentPage() != $sukien->lastPage())
      <li>
        <a href="{!! str_replace('/?','?',$sukien->url($sukien->currentPage() + 1)) !!}" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    @endif
    </ul>
  @endif
  </nav>