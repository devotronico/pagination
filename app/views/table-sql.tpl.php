<main>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Country</th>
        <th scope="col">Birth</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?> 
        <tr>
          <th scope="row"><a href="#>">#</a></th>
          <td><?=$user->name?></td>
          <td><?=$user->gender?></td>
          <td><?=$user->country?></td>
          <td><?=$user->birth?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</main>

