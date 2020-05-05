function refreshCapcha() {
  id = Math.floor(Math.random() * 1000000);
  document.getElementsByClassName("capcha")[0].src =
    "lab_7_capcha.php?id=" + id;
}
