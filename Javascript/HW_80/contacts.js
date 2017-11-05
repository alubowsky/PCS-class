(function () {
    "use strict";

    var contactTable = get("contactTable"),
        contacts = [];

    function get(id) {
        return document.getElementById(id);
    }

    function addContact() {
        var contact = {
            firstName: get('firstNameIn'),
            lastName: get('lastNameIn'),
            email: get('emailIn'),
            phone: get('phoneIn'),
        };

        contacts.push(contact);

        if (contacts.length === 1) {
            contactTable.deleteRow(1);
        }

        var row = contactTable.insertRow();
        var firstNameCell = row.insertCell();
        var lastNameCell = row.insertCell();
        var emailCell = row.insertCell();
        var phoneCell = row.insertCell();

        firstNameCell.innerHTML = get('firstNameIn').value;
        lastNameCell.innerHTML = get('lastNameIn').value;
        emailCell.innerHTML = get('emailIn').value;
        phoneCell.innerHTML = get('phoneIn').value;
    }

    get("add").addEventListener("submit", function (event) {
        addContact();
        event.preventDefault();
    });
}());