 // Set the date we're counting down to
 var eventsStartDate = new Date("October 3, 2019 00:00:00").getTime();
//  var registrationDeadline = new Date("August 25, 2019 00:00:00").getTime();
 
 // Update the count down every 1 second
 var x = setInterval(function() {
 
   // Get todays date and time
   var now = new Date().getTime();
 
   // Find the distance between now and the count down date
   var distance1 = eventsStartDate - now;
  //  var distance2 = registrationDeadline - now;
 
   // Time calculations for days, hours, minutes and seconds
   var days1 = Math.floor(distance1 / (1000 * 60 * 60 * 24));
   var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
   var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
   var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);
  //  var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));
  //  var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  //  var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
  //  var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);
 
   // Display the result in the element
   document.getElementById("eventStartCountDown").innerHTML = days1 + "d " + hours1 + "h "
   + minutes1 + "m " + seconds1 + "s ";
  //  document.getElementById("registrationDeadLine").innerHTML = days2 + "d " + hours2 + "h "
  //  + minutes2 + "m " + seconds2 + "s ";
 
  // If the count down is finished, write some text 
   if (distance1 < 0) {
    //clearInterval(x);
     document.getElementById("eventStartHeader").innerHTML = "بدأت الفعالية!!<br> تابعها  <a href='google.com'>هنا</a>";
     
     document.getElementById("eventStartCountDown").innerHTML = "";
   }
  //  if (distance2< 0) {
  //    clearInterval(x);
  //    document.getElementById("registrationDeadlineHeader").innerHTML=" ";
  //    document.getElementById("registrationDeadLine").innerHTML = " ";
  //  }
 }, 1000);