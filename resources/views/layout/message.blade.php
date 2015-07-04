@if(\Session::get('message'))

<?php 
  // handle message type. Options: success (green) , info (blue) , warning (orange) , danger (red)
  if (\Session::get('messageType')) {
    $messageType = \Session::get('messageType');
  } else {
    $messageType = "warning";
  }
?>

  <div class="alert alert-{{$messageType}} alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{\Session::get('message')}}
  </div>

@endif