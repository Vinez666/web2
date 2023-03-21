<h2>Kondisi Switch</h2>
<?php
$nama_hari = date("l");
Switch ($nama_hari) {
  case "Minggu":
    Echo "Sunday";
    Break;
  case "Senin":
    Echo "Monday";
    Break;
  case "Selasa":
    Echo "Tuesday";
    Break;
  Default:
    Echo "Selasa";
}
Echo "/$nama_hari";
?>