<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Demande</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="POST" action="/listedemande">
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><?=isset($demande->id)?"Modifier":"Ajouter"?> Demande</h3>

            <div class="form-outline mb-4">
              <input type="text" id="form2Example18" class="form-control form-control-lg" name="motif" value="<?=$demande->motif?>"/>
              <label class="form-label" for="form2Example18">Motif de la demande</label>
            </div>


            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit"><?= isset($demande->id)?"Modifier":"Enregistrer"?> sa demande</button>
            </div>
<!--             <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>
 -->
          </form>

        </div>

      </div>
      <div class="col-sm-7 px-0 d-none d-sm-block">
        <img src="<?=$Constantes::WEB_ROOT?>images/images1.png"
          alt="Login image" class="w-100 vh-90" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>