<div class="btn-group dropdown dropdown-default">
    <button aria-label="" class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Options 
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{route('products.edit',$item->id)}}">Edit</a>
      <a class="dropdown-item" href="{{route('products.show',$item->id)}}">View</a>
    </div>
  </div>