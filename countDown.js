function countDown() {
  const newYear = new Date(2023, 0, 1);
  const diff = Math.abs(newYear-new Date());

  const days = Math.floor( diff/(1000*3600*24));
  const hours = Math.floor( diff/(1000*3600)%24);
  const mins = Math.floor( diff/(1000*60)%60);
  const seconds = Math.floor( diff/(1000)%60);

  document.getElementsByClassName("Days")[0].innerText = "DAY - " + formatTime(days);
  document.getElementsByClassName("Hours")[0].innerText = formatTime(hours) + ":";
  document.getElementsByClassName("Minutes")[0].innerText = formatTime(mins) + ":";
  document.getElementsByClassName("Seconds")[0].innerText = formatTime(seconds);
}

function formatTime(time){
  return time < 10 ? (`0${time}`) : (time);
}
countDown();
setInterval(countDown, 1000);