<!-- tambah Modal -->
<div class="modal fade tambah-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="row">
            <div class="col-6 border-right">
               <div class="row">
                  <div class="col-12">
                     <h5>Upload File</h5>

                     <div class="upload text-center">
                        <i class="fas fa-cloud-upload-alt fa-3x"></i>
                        <p class="mt-3">Drop File Document Here</p>
                        <button class="btn btn-primary px-4 py-1 mt-4">Browse</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-6 form-modal">
               <form action="">
                  <textarea name="description" id="modal-desc" cols="30" rows="5"></textarea>

                  <div class="image-upload mt-3">
                     <img style="width: 19rem;" src="<?= base_url(); ?>assets/images/list/img-1.jpg" alt="Images01">
                  </div>

                  <div class="form-group mt-5">
                     <select class="form-control">
                        <option value="">Pilih Tag</option>
                        <option>Jalan Tol</option>
                        <option>Jembatan</option>
                        <option>UnderPass</option>
                     </select>
                  </div>

                  <div class="button-modals header mt-4">
                     <button class="btn btn-second px-5 py-1 mr-2">Batal</button>
                     <button class="btn btn-prime px-5 py-1">Simpan</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>

</section>