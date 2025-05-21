/*!
* Start Bootstrap - Personal v1.0.1 (https://startbootstrap.com/template-overviews/personal)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-personal/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

function validasi() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const service = document.getElementById("service").value.trim();
    const address = document.getElementById("address").value.trim();
    const postcode = document.getElementById("postcode").value.trim();
    const message = document.getElementById("message").value.trim();
  
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const nameRegex = /^[a-zA-Z\s]+$/;
    const numberRegex = /^[0-9]+$/;
  
    if (name === "") {
      Swal.fire("Error", "Name cannot be empty", "error");
      return false;
    }
    if (!nameRegex.test(name)) {
      Swal.fire("Error", "Name must contain only letters and spaces", "error");
      return false;
    }
  
    if (email === "") {
      Swal.fire("Error", "Email cannot be empty", "error");
      return false;
    }
    if (!emailRegex.test(email)) {
      Swal.fire("Error", "Email format is invalid", "error");
      return false;
    }
  
    if (phone === "") {
      Swal.fire("Error", "Phone number cannot be empty", "error");
      return false;
    }
    if (!numberRegex.test(phone)) {
      Swal.fire("Error", "Phone number must contain only digits", "error");
      return false;
    }
  
    if (service === "") {
      Swal.fire("Error", "Please select a service", "error");
      return false;
    }
  
    if (address === "") {
      Swal.fire("Error", "Address cannot be empty", "error");
      return false;
    }
  
    if (postcode === "") {
      Swal.fire("Error", "Post code cannot be empty", "error");
      return false;
    }
    if (!numberRegex.test(postcode)) {
      Swal.fire("Error", "Post code must contain only digits", "error");
      return false;
    }
  
    if (message === "") {
      Swal.fire("Error", "Message cannot be empty", "error");
      return false;
    }
  
    Swal.fire("Success", "Your message has been sent successfully!", "success");
    return false;
  }
  