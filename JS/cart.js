/* Scripting Languages Project */
/* Fall 2020 */
/* Luis Gomez */

/* filename: cart.js */

/* Validates Billing Info */
function validateBillInfo() {
         if(document.billInfo.fname.value == "") {
            alert("Please provide your first name on Billing");
            document.billInfo.fname.focus();
            return false;
         }
         if(document.billInfo.lname.value == "") {
            alert("Please provide your last name on Billing");
            document.billInfo.lname.focus();
            return false;
          }
          if(document.billInfo.address.value == "") {
            alert("Please provide your Address on Billing");
            document.billInfo.address.focus();
            return false;
          }
         if(document.billInfo.city.value == "") {
            alert("Please provide your City on Billing");
            document.billInfo.city.focus();
            return false;
          }
          if(document.billInfo.state.value == "") {
            alert("Please provide your State on Billing");
            document.billInfo.state.focus();
            return false;
          }
         if(document.billInfo.zip.value == "" || isNaN(document.billInfo.zip.value) ||
            document.billInfo.zip.value.length != 5) {
            alert("Please provide a zip code in the format #####.");
            document.billInfo.zip.focus();
            return false;
         }
         return(true);
      }

/* Validates shipping Info */
function validateShipInfo() {
   if(document.shipInfo.fname.value == "") {
      alert("Please provide your first name on Shipping");
      document.shipInfo.fname.focus();
      return false;
   }
   if(document.shipInfo.lname.value == "") {
      alert("Please provide your last name on Shipping");
      document.shipInfo.lname.focus();
      return false;
    }
    if(document.shipInfo.address.value == "") {
      alert("Please provide your Address on Shipping");
      document.shipInfo.address.focus();
      return false;
    }
   if(document.shipInfo.city.value == "") {
      alert("Please provide your City on Shipping");
      document.shipInfo.city.focus();
      return false;
    }
    if(document.shipInfo.state.value == "") {
      alert("Please provide your State on Shipping");
      document.shipInfo.state.focus();
      return false;
    }
   if(document.shipInfo.zip.value == "" || isNaN(document.shipInfo.zip.value) ||
      document.shipInfo.zip.value.length != 5) {
      alert("Please provide a zip code with 5 numbers at least!.");
      document.shipInfo.zip.focus();
      return false;
   }
   return(true);
}

//validates CC info
function validateCCInfo() {
   
   var $currentDate = new Date();
   var $currentMonth = $currentDate.getMonth()+1;
   var $currentYear = $currentDate.getFullYear()+1;
   var $currentDay = $currentDate.getDate();

   if (document.CCInfo.nameOnCC.value == "") { 
      alert("Please enter your name as appears on the card");
      document.CCInfo.nameOnCC.focus();
      return false;
   } 
   else if (isNaN(document.CCInfo.CCNum.value))  {
      alert("Card number is incorrect, please re-entry card number");
      document.CCInfo.CCNum.focus();
      return false;
   }
   else if ((document.CCInfo.expMonth.value < $currentMonth) || (document.CCInfo.expYear.value < $currentYear) || (document.CCInfo.expDay.value < $currentDay)) {
      alert("Card is expired, please use a different one.");
      document.CCInfo.expMonth.value.focus();
      return false;
   }
   else if (isNan(document.CCInfo.CCV.value)) {
      alert("Please enter the correct CCV number");
      document.CCInfo.CCNum.focus();
      return false;
   }
   else {
      alert("Invalid Card Type! Please try again!")
   }
   return true;
}

//Order placed message
function OrderPlaced() {
   alert("Thank you for placing your order today!");
}