let time = new Date().getHours();
let greeting;
if (time < 12) {
  greeting = '"Good morning there!"';
} else if (time < 20) {
  greeting = '"Good day there!"';
} else {
  greeting = '"Good evening there!"';
}
document.getElementById("greeting").innerHTML = greeting


