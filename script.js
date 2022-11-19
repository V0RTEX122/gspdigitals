const bar = document.getElementById("bar");
const close = document.getElementById("close");
const nav = document.getElementById("navbar");

if (bar) {
    bar.addEventListener("click", () => {
        nav.classList.add("active");
    });
}

if (close) {
    close.addEventListener("click", () => {
        nav.classList.remove("active");
    });
}

// Get the modal
var loginModal = document.getElementById("login-form");
var signupModal = document.getElementById("signup-form");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == loginModal) {
        loginModal.style.display = "none";
    } else if (event.target == signupModal) {
        signupModal.style.display = "none";
    }
};

var Days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]; // index => month [0-11]
initDateOptions();

function initDateOptions() {
    var eDay = document.getElementById("day");
    var eMonth = document.getElementById("month");    
    var eYear = document.getElementById("year");

    var option = '<option value="day">DD</option>';
    var selectedDay = "day";
    for (var i = 1; i <= Days[0]; i++) {
        //add option days
        option += '<option value="' + i + '">' + i + "</option>";
    }    
    eDay.insertAdjacentHTML('beforeend', option);
    eDay.value = selectedDay;

    var option = '<option value="month">MM</option>';
    var selectedMon = "month";
    for (var i = 1; i <= 12; i++) {
        option += '<option value="' + i + '">' + i + "</option>";
    }
    eMonth.insertAdjacentHTML('beforeend', option);    
    eMonth.value = selectedMon;

    var d = new Date();
    var option = '<option value="year">YYYY</option>';
    selectedYear = "year";
    for (var i = 1930; i <= d.getFullYear(); i++) {
        // years start i
        option += '<option value="' + i + '">' + i + "</option>";
    }
    eYear.insertAdjacentHTML('beforeend', option);     
    eYear.value = selectedYear;
}

function isLeapYear(year) {
    year = parseInt(year);
    if (year % 4 != 0) {
        return false;
    } else if (year % 400 == 0) {
        return true;
    } else if (year % 100 == 0) {
        return false;
    } else {
        return true;
    }
}

function change_year(select) {
    var eMonth = document.getElementById("month");

    if (isLeapYear(select.value)) {
        Days[1] = 29;
    } else {
        Days[1] = 28;
    }
    if (eMonth.value == 2) {
        var eDay = document.getElementById("day");
        var val = eDay.value;
        removeOptions(eDay);
        var option = '<option value="day">DD</option>';
        for (var i = 1; i <= Days[1]; i++) {
            //add option days
            option += '<option value="' + i + '">' + i + "</option>";
        }

        eDay.insertAdjacentHTML('beforeend', option);
        if (val >   [month]) {
            val = 1;
        }
        eDay.value = val;
    }
}

function change_month(select) {
    var eDay = document.getElementById("day");
    var val = eDay.value;
    removeOptions(eDay);

    var option = '<option value="day">DD</option>';
    var month = parseInt(select.value) - 1;
    for (var i = 1; i <= Days[month]; i++) {
        //add option days
        option += '<option value="' + i + '">' + i + "</option>";
    }
    eDay.insertAdjacentHTML('beforeend', option);    
    if (val > Days[month]) {
        val = 1;
    }
    eDay.value = val;
}

function removeOptions(selectElement) {
    var i, L = selectElement.options.length - 1;
    for(i = L; i >= 0; i--) {
        selectElement.remove(i);       
    }
 }
