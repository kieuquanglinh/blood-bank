<?php include 'head.php' ?>
    <div class="hospital-list">
     <table class="table table-striped table-dark ">
        <thead>
          <tr>
            <th scope="col">Tên Bệnh Viện</th>
            <th scope="col">Nhóm A</th>
            <th scope="col">Nhóm B</th>
            <th scope="col">Nhóm O</th>
            <th scope="col">Nhóm AB</th>
            <th scope="col">Liên hệ</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          for($i=0; $i < count($bang); $i++) { 
        ?>  
            <tr>
              <th scope="row"><?php echo $bang[$i]->tenBV ?></th>
              <td><?php echo $bang[$i]->nhomA ?></td>
              <td><?php echo $bang[$i]->nhomB ?></td>
              <td><?php echo $bang[$i]->nhomO ?></td>
              <td><?php echo $bang[$i]->nhomAB ?></td>
              <td><?php echo $bang[$i]->lienHe ?></td>
            </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
    <?php echo $pagination; ?>
    </div>
<?php include 'foot.php' ?>