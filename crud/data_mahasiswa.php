<section id="content">
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
          <!-- Search for small screen -->
          <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
          </div>
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title">Data Mahasiswa</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.html">Dashboard</a>
                  </li>
                  <li><a href="#">UI Elements</a>
                  </li>
                  <li class="active">Cards</li>
                </ol>
              </div>
              <div class="col s2 m6 l6">
                <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-activates="dropdown1">
                    <i class="material-icons hide-on-med-and-up">settings</i>
                    <span class="hide-on-small-onl">Settings</span>
                    <i class="material-icons right">arrow_drop_down</i>
                  </a>
                <ul id="dropdown1" class="dropdown-content">
                  <li><a href="#!" class="grey-text text-darken-2">Access<span class="badge">1</span></a>
                  </li>
                  <li><a href="#!" class="grey-text text-darken-2">Profile<span class="new badge">2</span></a>
                  </li>
                  <li><a href="#!" class="grey-text text-darken-2">Notifications</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        <!--start container-->
        <div class="container">
        <table>
        <thead>
          <tr>
              <th>No</th>
              <th>NPM</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Jurusan</th>
              <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
            include "config/koneksi.php";
            $no=0;
            $query=mysqli_query($con, "SELECT * FROM mahasiswa ORDER BY npm DESC");
            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
            {
        ?>
          <tr>
            <td><?php echo $no=$no+1;?></td>
            <td><?php echo $row['npm'];?></td>
            <td><?php echo $row['nama'];?></td>
            <td><?php echo $row['kelas'];?></td>
            <td><?php echo $row['jurusan'];?></td>
            <td>
            <a href="index.php?page=ubah_mahasiswa&id=<?=$row['npm'];?>" class="waves-effect waves-light red accent-2 btn ">
                    <i class="material-icons right">mode_edit</i> Edit</a>
            <a href="index.php?page=hapus_mahasiswa&id=<?=$row['npm'];?>" class="waves-effect waves-light btn ">
                    <i class="material-icons left">delete</i> Hapus</a>
        </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
          </div>

          <!--end container-->
      </section>