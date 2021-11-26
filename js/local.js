function guardar () {
  var count = document.getElementById('emaillocal').value;
  localStorage.setItem('usuario', count);
  var con = localStorage.getItem('usuario');
  var saved = JSON.stringify(con);
  console.log(count);
  alert(saved);
}

function ver () {
  var count = document.getElementById('emaillocal').value;
  localStorage.setItem('usuario', count);
  var con = localStorage.getItem('usuario');
  var saved = JSON.stringify(con);
  console.log(count);
  alert(saved);
}

