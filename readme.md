<input type="text" id="email" placeholder="Enter your email address">

<button onclick="validateEmail()">Submit</button>

<script>
function validateEmail() {
  // Get the value of the input field
  const email = document.getElementById("email").value;

  // Define a regular expression pattern for email validation
  const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  // Test the pattern against the email value
  if (pattern.test(email)) {
    alert("Email is valid!");
  } else {
    alert("Email is not valid!");
  }
}
</script>


williamson's way of checking email
def clean_email(self, *args, **kwargs):
        email = self.cleaned_data.get("email")
        if not email.endswith("@marietta.edu"):
            raise forms.ValidationError("This is not a valid Marietta email")
        else:
            return email
            
           
 
