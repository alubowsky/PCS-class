import $ from 'jquery';
const color = $("#colorPicker"),
    tColor = $("#tColorPicker");
color.change(() => {
    $('body, textarea').css('background-color', color.val());
});

tColor.change(() => {
    $('body, textarea').css('color', tColor.val());
}
);
