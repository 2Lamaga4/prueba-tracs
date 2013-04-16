function bderecho(e) {
if (navigator.appName == 'Netscape' && (e.which == 3 || e.which == 2))
return false;
else if (navigator.appName == 'Microsoft Internet Explorer' && (event.button == 2 || event.button == 3)) {

return false;
}
return true;
}
if (document.layers) window.captureEvents(Event.MOUSEDOWN);
window.onmousedown=bderecho;
document.onmousedown=bderecho;
