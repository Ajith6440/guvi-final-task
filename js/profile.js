const form = document.querySelector('form');

form.addEventListener('submit', (event) => {
  event.preventDefault();
  
  const age = document.querySelector('#age').value;
  const dob = document.querySelector('#dob').value;
  const contact = document.querySelector('#contact').value;
  
  console.log(`Age: ${age}, Date of Birth: ${dob}, Contact Number: ${contact}`);
});