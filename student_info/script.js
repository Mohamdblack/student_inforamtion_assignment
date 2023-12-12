function validateForm() {
    // ... (previous validation code)

    // Check if name contains only letters and spaces
    var name = document.getElementById("name").value;
    var nameRegex = /^[a-zA-Z\s]+$/;
    if (!name.match(nameRegex)) {
        alert("Name should contain only letters and spaces.");
        document.getElementById("name").focus();
        return false;
    }

    // Checking if date of birth is not empty
var dateOfBirth = document.getElementById("date_of_birth").value;
if (dateOfBirth.trim() === "") {
    alert("Please enter your date of birth.");
    document.getElementById("date_of_birth").focus();
    return false;
}

  // Check if sex is selected
  var sex = document.getElementById("sex").value;
  if (sex === "") {
      alert("Please select your sex.");
      document.getElementById("sex").focus();
      return false;
  }

  // Check if telephone is not empty
  var telephone = document.getElementById("telephone").value;
  if (telephone.trim() === "") {
      alert("Please enter your telephone number.");
      document.getElementById("telephone").focus();
      return false;
  }

  // Check if parent name is not empty
  var parentName = document.getElementById("parent_name").value;
  if (parentName.trim() === "") {
      alert("Please enter the parent's name.");
      document.getElementById("parent_name").focus();
      return false;
  }

  // Check if parent telephone is not empty
  var parentTelephone = document.getElementById("parent_telephone").value;
  if (parentTelephone.trim() === "") {
      alert("Please enter the parent's telephone number.");
      document.getElementById("parent_telephone").focus();
      return false;
  }

  // Check if relationship is not empty
  var relationship = document.getElementById("relationship").value;
  if (relationship.trim() === "") {
      alert("Please enter the relationship with the parent.");
      document.getElementById("relationship").focus();
      return false;
  }

  // Check if ID is not empty
  var id = document.getElementById("id").value;
  if (id.trim() === "") {
      alert("Please enter your ID.");
      document.getElementById("id").focus();
      return false;
  }

  // Check if faculty is not empty
  var faculty = document.getElementById("faculty").value;
  if (faculty.trim() === "") {
      alert("Please enter your faculty.");
      document.getElementById("faculty").focus();
      return false;
  }

  // Check if department is not empty
  var department = document.getElementById("department").value;
  if (department.trim() === "") {
      alert("Please enter your department.");
      document.getElementById("department").focus();
      return false;
  }

  // Check if class is not empty
  var className = document.getElementById("class").value;
  if (className.trim() === "") {
      alert("Please enter your class.");
      document.getElementById("class").focus();
      return false;
  }

  // Check if registration date is not empty
  var registrationDate = document.getElementById("registration_date").value;
  if (registrationDate.trim() === "") {
      alert("Please enter the registration date.");
      document.getElementById("registration_date").focus();
      return false;
  }

  return true;

}