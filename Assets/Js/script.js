setTimeout(function () {
    $('.flash').slideUp();
}, 4000);

function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}

$(document).ready(function() {
    $('#DiaplyTable').DataTable({
        responsive: !0,
        scrollY: "65vh",
        scrollCollapse: !0,
        responsive: true,
        lengthMenu: [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, "All"]
        ]
    });
});




const changingE = document.querySelector('#ChangingE');
const changingF = document.querySelector('#ChangingF');
const changingG = document.querySelector('#ChangingG');
const changingH = document.querySelector('#ChangingH');

$("#AppliedFor").change(function () {
    if ($(this).val() === "College") {
        // SHow Stream
        // Hide Level
        document.querySelectorAll('.streamDiv').forEach(div => {
            showIt(div, 'block');
        });

        document.querySelectorAll('.levelDiv').forEach(div => {
            hideIt(div);
        });

        ShowDivD();

    } else {
        // Hide Stream
        // Show Level
        document.querySelectorAll('.streamDiv').forEach(div => {
            hideIt(div);
        });

        document.querySelectorAll('.levelDiv').forEach(div => {
            showIt(div, 'block');
        });

        HideDivD();
    }
});

$('#Level').change(() => {
    if ($('#Level').val() !== "Nursery" || $('#Level').val() !== "L.K.G" || $('#Level').val() !== "U.K.G") {
        if ($('#Level').val() >= 8) {
            ShowDivD();
        } else {
            HideDivD();
        }
    }
});




function showIt(arg, style = "inline-block") {
    arg.style.display = style;
}
function hideIt(arg) {
    arg.style.display = "none";
}


function ShowDivD() {
    showIt(document.querySelector('#divD'));
    changingE.innerHTML = '';
    changingE.innerHTML = 'E';
    changingF.innerHTML = '';
    changingF.innerHTML = 'F';
    changingG.innerHTML = '';
    changingG.innerHTML = 'G';
    changingH.innerHTML = '';
    changingH.innerHTML = 'H';
}

function HideDivD() {
    hideIt(document.querySelector('#divD'));
    changingE.innerHTML = '';
    changingE.innerHTML = 'D';
    changingF.innerHTML = '';
    changingF.innerHTML = 'E';
    changingG.innerHTML = '';
    changingG.innerHTML = 'F';
    changingH.innerHTML = '';
    changingH.innerHTML = 'G';
}
