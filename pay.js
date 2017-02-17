/*jslint devel: true*/

function pay() {
    "use strict";
    alert("Paid");
}

window.onload = function () {
    "use strict";
    document.getElementById("pay").onclick = pay;
};