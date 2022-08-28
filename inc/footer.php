<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="exampleModalLabel">Sign In to Your Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <div class="mb-3">
    <label for="emailUser" class="form-label fw-bold">Email </label>
    <input type="email" class="form-control" id="emailUser" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label fw-bold">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary text-white fw-bold w-100">Sign In</button>
</form>
<p class="text-center mt-3">Don't have an Account? <a href="#">Sign Up</a></p>
      </div>
     
    </div>
  </div>
</div>

<footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#" class="btn btn-primary rounded"><i class="bi bi-arrow-up"></i></a>
        </p>
        <p class="mb-1">&copy; CoderSprint. All Rights Reserved.</p>
    </div>
</footer>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>