@extends('layouts.navigation');
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  
    <title>Create Book</title>
  </head>
  
  <body class="container bg-light">
    <!-- Start Header form -->
    <div class="text-center pt-5">
      <h1>Create Book Form</h1>
    </div>
    <div class="card">
      <!-- Start Card Body -->
      <div class="card-body">
        <!-- Start Form -->
        <form id="bookingForm" action="/books" method=  "POST" class="needs-validation" novalidate autocomplete="off">
          @csrf
          <!-- Start Input Name -->
          <div class="form-group">
            <label for="inputName">Title</label>
            <input type="text" class="form-control" id="inputName" name="title" placeholder="Book Title" required />
            <small class="form-text text-muted">Please The book Name</small>
          </div>
          <!-- End Input Name -->
  
          <!-- Start Input Email -->
          <div class="form-group">
            <label for="inputEmail">Author</label>
            <input type="text" class="form-control" id="inputAuthor" name="author" placeholder="Author" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
            <small class="form-text text-muted">Author Name</small>
          </div>
          <!-- End Input Email -->
  
          <!-- Start Input Telephone -->
    
          <!-- End Input Telephone -->
  
          <!-- Start Input Date , Start Time and End Time -->
          <div class="form-row">
            <!-- Start Input Date -->
            <div class="form-group col-md-4">
              <label for="inputDate">Date</label>
              <input type="date" class="form-control" id="inputDate" name="publication_date" required />
              <small class="form-text text-muted">Please choose date Published</small>
            </div>
          </div>
          <!-- Start Input Remark -->
          <div class="form-group">
            <label for="textAreaRemark">Description</label>
            <textarea class="form-control" name="description" id="textAreaRemark" rows="2" placeholder="Book Description"></textarea>
          </div>
          <!-- End Input Remark -->
  
          <!-- Start Submit Button -->
          <button class="btn btn-primary btn-block col-lg-2" type="submit">Submit</button>
          <!-- End Submit Button -->
        </form>
        <!-- End Form -->
      </div>
      <!-- End Card Body -->
    </div>
    <!-- End Card -->
    <footer>
      <div class="my-4 text-muted text-center">
        <p>© My Company</p>
      </div>
    </footer>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    <!-- Start Scritp for Form -->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <!-- End Scritp for Form -->
  
  </body>