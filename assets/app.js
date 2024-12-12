function calculateRental() {
    var startDate = new Date(document.getElementById('startDate').value);
    var endDate = new Date(document.getElementById('endDate').value);
  
    if (startDate > endDate) {
      alert('End date must be equal to or after the start date');
      return;
    }
  
    var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
    var diffDays = Math.round(Math.abs((startDate - endDate) / oneDay));
  
    var rentalRate = 200; //rental rate per day
  
    var totalRental = diffDays * rentalRate;
  
    document.getElementById('result').innerHTML = 'Total Rental Amount: $' + totalRental;
  }
  