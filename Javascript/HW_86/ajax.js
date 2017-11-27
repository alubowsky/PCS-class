/*global $*/
(function () {
    'use strict';

    var contactTable = $("#contactTable");

    $('#contactsButton').click(function () {
        contactTable.show();
        var fileToLoad = 'contacts.json';
        $.get(fileToLoad, function (data) {
            var contacts = JSON.parse(JSON.stringify(data));
            contacts.forEach(function(contact) {
                $('#contactTable > tbody:last-child').append('<tr><td>' + contact.firstName + "</td><" +
                                                            '<td>' + contact.LastName + "</td>" +
                                                            '<td>' + contact.email + "</td>" +
                                                            '<td>' + contact.phone + "</td></tr>"
                                                            );
            });
        }).fail(function (jqxhr, status, statusText) {
            console.log("Failed to load file: " + jqxhr.status + " " + statusText);
        });
    });
}());