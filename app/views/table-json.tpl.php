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
        <?php for ( $i=$postStart; $i<$postStart+$postForPage; $i++) : ?> 
        <?php if( $i<$totalPosts ) : ?>
        <tr>
          <th scope="row"><?=$i?></th>
          <td><?=$users[$i]->name?></td>
          <td><?=$users[$i]->gender?></td>
          <td><?=$users[$i]->country?></td>
          <td><?=$users[$i]->birth?></td>
        </tr>
        <?php endif; ?>
        <?php endfor; ?>
    </tbody>
  </table>
</main>

