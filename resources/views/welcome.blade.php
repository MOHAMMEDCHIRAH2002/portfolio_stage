@if (count($todos) === 1)
  <p>I have one task!</p>
@elseif (count($todos) > 1)
  <p>I have multiple tasks!</p>
@else
  <p>I don't have any tasks!</p>
@endif