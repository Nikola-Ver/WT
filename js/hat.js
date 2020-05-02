let flagOver = false;

let hideProperty = () => {
  let [div] = document.getElementsByClassName("users_property");
  if (!flagOver) {
    div.style.opacity = 0;
    div.style.visibility = "hidden";
  }
};

let userPropertyOn = () => {
  flagOver = true;
  let [div] = document.getElementsByClassName("users_property");
  div.style.opacity = 1;
  div.style.visibility = "visible";
};

let userPropertyOff = () => {
  flagOver = false;
  setTimeout(hideProperty, "250");
};

let userPropertyOn_ = () => {
  flagOver = true;
  let [div] = document.getElementsByClassName("users_property");
  if (div.style.opacity > 0) {
    div.style.opacity = 1;
    div.style.visibility = "visible";
  }
};

let userEnteryOn = flag => {
  let [div] = document.getElementsByClassName("user_enter_block");
  div.style.visibility = "visible";
  [div] = document.getElementsByClassName("reg_log");
  div.value = "";
  [div] = document.getElementsByClassName("reg_pas");
  div.value = "";
  if (flag) {
    div = document.getElementById("reg_head");
    div.textContent = "Авторизация";
    div = document.getElementById("but_send");
    div.value = "Войти";
  } else {
    div = document.getElementById("reg_head");
    div.textContent = "Регистрация";
    div = document.getElementById("but_send");
    div.value = "Отправить";
  }
};

let flagEntery = true;

let flagEnteryOn = () => {
  flagEntery = false;
};

let userEnteryOff = () => {
  if (flagEntery) {
    let [div] = document.getElementsByClassName("user_enter_block");
    div.style.visibility = "hidden";
  } else {
    flagEntery = true;
  }
};
