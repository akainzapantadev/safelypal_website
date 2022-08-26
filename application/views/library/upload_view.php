<div class="w-50">
    <!-- <div class="mb-3">
      <input class="form-control text-muted" type="file" onclick="previewBlogImg()" name="blogImage" id="blogImage" accept=".jpg,.jpeg,.png,.gif">
      <button onclick="upload()" class="btn btn-outline-primary" name="submit">upload</button>
    </div> -->

    <div class="input-group mb-3">
      <input type="file" class="form-control text-muted" aria-describedby="button_upload" onclick="previewBlogImg()" name="blogImage" id="blogImage" accept=".jpg,.jpeg,.png,.gif">
      <!-- <button onclick="upload()" class="btn-transparent" type="button" id="button_upload">upload</button> -->
    </div>
    <img id="blogImagePreview" src="" style="max-width:500px;max-height:400px;" onerror="this.src='https://deconova.eu/wp-content/uploads/2016/02/default-placeholder.png'" src="#" alt="Preview" />
</div>

<script>
  function upload(){
    var uploaderName = $('#blogImage').attr('name')
    var uploaderFile = $('#blogImage')[0].files[0]
    var uploaderFileName = $('#blogImage')[0].files[0].name
    

    var imageUploadFormData = new FormData();
    imageUploadFormData.append(uploaderName,uploaderFile,uploaderFileName);
    var upload = backendHandleFormData('upload_file',imageUploadFormData);
  }
</script>