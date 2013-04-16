window.onload = function() {MakeFluffHappen()} 
function MakeFluffHappen() { 
FluffyKittenMaker(0); 
Conflaburator(0); 
} 
function FluffyKittenMaker(SomeNumberThing) { 
document.body.style.opacity = SomeNumberThing/60; 
} 
function Conflaburator(SomeNumberThing) { 
if (SomeNumberThing <= 60) { 
FluffyKittenMaker(SomeNumberThing); 
SomeNumberThing += 5; 
window.setTimeout("Conflaburator("+SomeNumberThing+")", 60); 
} 
}