<div id="headermodal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" ttype="modal">Edit Header</h4>
      </div>
      <div class="modal-body">
         <input id="headermodaltext" type="text" class="form-control" placeholder="Enter Text" aria-describedby="basic-addon1">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="editheader" type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="atagmodal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" ttype="modal">Edit A-Tag</h4>
      </div>
      <div class="modal-body">
         <input id="atagtext" type="text" class="form-control" placeholder="Enter Text (Google)" aria-describedby="basic-addon1">
         <p>&nbsp;</p>
         <input id="ataghref" type="text" class="form-control" placeholder="Enter Link Address (www.google.com)" aria-describedby="basic-addon1">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="editatag" type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="pmodal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" ttype="modal">Edit A-Tag</h4>
      </div>
      <div class="modal-body">
         <textarea style="resize: vertical;" id="ptext" class="form-control" placeholder="Enter Text (Google)"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="editp" type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="immodal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" ttype="modal">Edit Image</h4>
      </div>
      <div class="modal-body">

        <div id="fine-uploader-gallery"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="editim" type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Fine Uploader DOM Element
====================================================================== -->
<!-- Your code to create an instance of Fine Uploader and bind to the DOM/template
====================================================================== -->
<script>
    var galleryUploader = new qq.FineUploader({
        element: document.getElementById("fine-uploader-gallery"),
        template: 'qq-template-gallery',
        multiple: false,
        request: {
            endpoint: '/server/uploads'
        },
        thumbnails: {
            placeholders: {
                waitingPath: '/packages/fine-uploader/placeholders/waiting-generic.png',
                notAvailablePath: '/packages/fine-uploader/placeholders/not_available-generic.png'
            }
        },
        validation: {
            allowedExtensions: ['jpeg', 'jpg', 'gif', 'png']
        },
        callbacks: {
            onComplete: function(id,name,responseJSON) {
                var res = responseJSON;
                GVar.new_image_url = res.full_url;
            }
        }
    });
</script>
