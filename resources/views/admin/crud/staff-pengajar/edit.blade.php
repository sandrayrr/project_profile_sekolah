<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="editForm" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title">Edit Staff</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" id="editNama" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Jabatan</label>
            <input type="text" name="jabatan" id="editJabatan" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control">
            <img id="currentFoto" src="" width="80" class="mt-2">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Update</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function(){
    var editModal = document.getElementById('editModal');
    editModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        var nama = button.getAttribute('data-nama');
        var jabatan = button.getAttribute('data-jabatan');
        var foto = button.getAttribute('data-foto');

        var form = document.getElementById('editForm');
        form.action = '/admin/staff-pengajar/' + id;

        document.getElementById('editNama').value = nama;
        document.getElementById('editJabatan').value = jabatan;

        var currentFoto = document.getElementById('currentFoto');
        if(foto){
            currentFoto.src = '/' + foto;
            currentFoto.style.display = 'block';
        } else {
            currentFoto.style.display = 'none';
        }
    });
});
</script>
