var insert = document.getElementById('insertitem');
insert.addEventListener('click', function() {
  var table = document.getElementById('insertfirsttable'),
    itemType = prompt("Enter the order type"),
    category = prompt("Enter the order category"),
    payment = prompt("Enter the paymentstatus"),
    status = prompt("Enter the status"),
    ;

  for (var r = 0; r < 1; r += 1) {
    var x = document.getElementById('insertfirsttable').insertRow(r);
    for (var c = 0; c < 10; c += 1) {
      var y = x.insertCell(c);
    }

    table.rows[r].cells[0].innerHTML = itemType;
    table.rows[r].cells[1].innerHTML = filling1;
    table.rows[r].cells[2].innerHTML = filling2;
    table.rows[r].cells[3].innerHTML = filling3;
    table.rows[r].cells[4].innerHTML = stock;
    table.rows[r].cells[5].innerHTML = minimum_Stock;
    table.rows[r].cells[9].style.width = "100px";
    var CreateBtn = document.createElement("button");
    CreateBtn.innerHTML = "sell";
    CreateBtn.id = "sellbtn";
    CreateBtn.style.width = "100px";
    CreateBtn.style.height = "25px";
    CreateBtn.style.cursor = "pointer";
    CreateBtn.style.fontSize = "18px";
    table.rows[r].cells[9].appendChild(CreateBtn);
    var sellBtn = document.getElementById("sellbtn");
    CreateBtn.onclick = function Sell() {
      var sell = prompt("Enter the amount of stock you're selling");
      for (var a = 0; a < table.length; a += 1) {
        for (var b = 0; b < table.cells.length; b += 1) {

        }
      }
      table.rows[a].cells[4].innerHTML = parseInt(table.rows[a].cells[4].innerHTML) - sell;
    }
  }

});