changeEye = () => {
  let [img] = document.getElementsByClassName("pas_eye");
  if (img.getAttribute("src") === "../picture/no_eye.png") {
    img.setAttribute("src", "../picture/eye.png");
    [img] = document.getElementsByClassName("reg_pas");
    img.setAttribute("type", "text");
  } else {
    img.setAttribute("src", "../picture/no_eye.png");
    [img] = document.getElementsByClassName("reg_pas");
    img.setAttribute("type", "password");
  }
};
