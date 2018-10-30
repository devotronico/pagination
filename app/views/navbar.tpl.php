<h4 class="text-center"><?=$dataType?></h4>
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link <?=$dataType==='sql'? 'disabled' : 'active' ?>" href="?data=sql">sql</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?=$dataType==='json'? 'disabled' : 'active' ?>" href="?data=json">json</a>
  </li>
</ul>
