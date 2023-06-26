function createForm() {
    document.getElementById("createForm").style.display = "block";
  }
function joinForm(){
    document.getElementById("joinForm").style.display = "block";
}
  document.addEventListener('mouseup', function(e) {
    var container = document.getElementById('createForm');
    if (!container.contains(e.target)) {
      container.style.display = 'none';
    }
  });

document.addEventListener('mouseup', function(e) {
    var container = document.getElementById('joinForm');
    if (!container.contains(e.target)) {
      container.style.display = 'none';
    }
});

function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}

function showPassword() {
    var pass = document.getElementById("myPassword");
    if (pass.type === "password") {
      pass.type = "text";
    } else {
      pass.type = "password";
    }
  }
