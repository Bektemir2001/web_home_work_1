if(!sessionStorage.getItem('user_name') && !sessionStorage.getItem('user_password')){
  alert('Сураныч катталыңыз же болбосо авторизациядан өтүңөз');
  window.location.href = '/manas/login.html';
}
else{
  login = document.getElementById("login");
  register = document.getElementById("register");
  if(login){
    login.outerHTML = '';
  }
  if(register){
    register.outerHTML = '';
  }
}
