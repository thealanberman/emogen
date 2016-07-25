window.onload = initAll;

function initAll() {
  document.getElementById("fullName").select();
  document.getElementById("sillySubmit").onclick = function() {
    document.getElementById("msgField").innerHTML = getSillyName();
    return false;
  }
}

function getSillyName() {
  var joiners = ["The", "At", "In", "And", "On", "Of", "With"];
  var prefixes = ["Hey", "My", "Your", "Our", "The", "Between", "Since The", "A", "And", "New", "Old", "At", "In", "Into", "Inside", "Near", "Of", "On", "Outside", "Over", "With", "Within", "Without", "Around", "Besides", "Beside", "After", "Against", "Off", "During", "Down", "Like", "Near", "Along", "Beneath", "Under", "Toward", "Till", "Up", "Until", "Through", "Throughout", "Except", "For", "From", "Past", "Burning", "Sleeping", "Further"];
  var nouns = ["Ring", "Promise", "Texas", "New York", "Music", "Hearts", "Kids", "Surprise", "Reason", "Kentucky", "Oklahoma", "Mississippi", "Rangers", "Fence", "Cap'n", "Mandy", "Chester", "Jimmy", "Johnny", "Jazz", "Experiment", "Drive", "North", "South", "East", "West", "Coalition", "New", "Boys", "Girls", "Plan", "Disco", "Star", "Maplewood", "Orange", "Mercedes", "Omaha", "Hoboken", "Newark", "Ho-Ho-Kus", "Second", "Asbury", "Trenton", "Cherry Hill", "Morrisville", "Elizabeth", "Morristown", "Clifton", "Hackettstown", "Theory", "Juliana", "Joan", "Parade", "Romance", "Hayward", "Fremont", "Pittsburg", "Josie", "Ethel", "Aberdeen", "Barnegat", "Belleville", "Bergenfield", "Berkeley", "Bloomfield", "Camden", "Cliffside Park", "Edison", "Englewood", "Fort Lee", "Jackson", "Keansburg", "Kearny", "Hackensack", "Glen Rock", "Middlesex", "Millburn", "Montclair", "Lumberton", "Lyndhurst", "Passaic", "Roseville", "Pine Hill", "Rutherford", "Saddle Brook", "Teaneck", "Secaucus", "Warren", "Wayne", "Weehawken", "Winslow", "Woodbridge", "Windsor"];
  var timemeasures = ["Sunday", "Day", "Night", "Year", "Week", "Month", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "January", "February", "March", "April", "May", "June", "July", "August", "September", "November", "December", "Winter", "Spring", "Summer", "Autumn", "Mid-Winter", "Indian Summer", "Evening", "Morning", "Afternoon", "Mid-Morning", "Twilight", "Dusk", "Sunrise", "Sunset"];

  var fullName = document.getElementById("fullName").value;

  var emoBand = "nothing";

  if (fullName.length < 1) {
    validName = false;
  } else {
    var nameArray = fullName.split(" ");
    var totalNames = nameArray.length;
    console.log(nameArray);
  }

  return "Your emo band name is: " + emoBand;
}
