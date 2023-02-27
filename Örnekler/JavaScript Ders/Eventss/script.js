const btn = document.querySelector("#consoleBtn");
const abtn = document.getElementById("a_btn")
const mousemove = document.getElementById("mousemove")
const dbclickbtn = document.getElementById("dbclick_btn")
const event_console_btn = document.getElementById("event_btn")
const Mousekordinat = document.getElementById("Mousekordinat")
const textinput = document.getElementById("textinput")
const form = document.getElementById("Form")


// CLİCK
btn.addEventListener('click',ConsoleBtn);
abtn.addEventListener('click',ABtn);
event_console_btn.addEventListener('click',EventBtn);

// Double Click
dbclickbtn.addEventListener('dblclick',EventBtn);

// Mouse Move
mousemove.addEventListener("mousemove",MouseMove);

// Keybord Event
textinput.addEventListener("keydown",KeyEvent);
textinput.addEventListener("keyup",KeyEvent);
textinput.addEventListener("keypress",KeyEvent);

// Focus
textinput.addEventListener("focus",function(params){
    console.log("Event Type: "+params.type);
});
// Form Submit
form.addEventListener("submit",FormSubmit); 

function ConsoleBtn() {
    console.log("Console Btn Clicked");
}
function ABtn() {
    console.log("A Btn Clicked");
}
function EventBtn(event) {
    console.log(`Event Type: ${event.type}`);
}
function MouseMove(e) {
    Mousekordinat.textContent=`Mouse X: ${e.offsetX} Mouse Y: ${e.offsetY}`;
}
function KeyEvent(params) {
    console.log("Event Type: "+params.type);
    console.log("Event KeyCode: "+params.KeyCode);
    console.log("Event Value: "+params.target.value);
}
function FormSubmit(params) {
    console.log("Event Type: "+params.type);

    params.preventDefault(); //Sayfayı yenilemeden Submit yapıyor
}

