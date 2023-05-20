/** @format */

window.onload = loadFormation();

function sendFormation() {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var nomFormation = document.getElementById("nomFormation");
      var description = document.getElementById("description");
      var prix = document.getElementById("prix");
      var nbSession = document.getElementById("nbSession");
      nomFormation.value = "";
      description.value = "";
      prix.value = "";
      nbSession.value = "";
    }
  };
  xhr.open(
    "POST",
    "../../controller/formation-controller.php?action=insertFormation",
    true
  );
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(
    "nomFormation=" +
      nomFormation.value +
      "&description=" +
      description.value +
      "&prix=" +
      prix.value +
      "&nbSession=" +
      nbSession.value
  );
  loadFormation();
}

function loadFormation() {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      document.getElementById("zone-formation").innerHTML = xhr.responseText;
    }
  };
  xhr.open(
    "GET",
    "../../controller/formation-controller.php?action=listeFormations",
    true
  );
  xhr.send();
}
