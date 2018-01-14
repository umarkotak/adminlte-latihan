<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];

  if ($page == 'home')                                      { include "pages/home.php"; }
  if ($page == 'setting')                                   { include "pages/setting.php"; }
  if ($page == 'login')                                     { include "pages/login.php"; }

} elseif (isset($_GET['aksi'])) {
  $aksi = $_GET['aksi'];

  if ($aksi == 'login')                                     { include "aksi/login.php"; }

} else {
  include "pages/home.php";
}
?>